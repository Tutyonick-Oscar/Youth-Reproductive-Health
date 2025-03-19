<?php

namespace App\Http\Controllers;

use App\Jobs\Compress;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\MultipleFilesCompress;
use App\Http\Requests\StoreMissionRequest;

class MissionController extends Controller
{
    public function store (StoreMissionRequest $request)
    {
        $data  =  $request->validated();
       
        if ($request->image1 !== null && !$request->image1->getError()){
            $data['image1'] = $request->image1->store('mission','public');
        }
        
        if ($request->image2 !== null && !$request->image2->getError()){
          $data['image2'] = $request->image2->store('mission','public');
        }
        MultipleFilesCompress::dispatch([$data['image1'],$data['image2']]);
        Mission::create($data);
        return to_route('admin.storeMission')->with('success','mission définit avec succès !');
    }
    public function update (Request $request)
    {
        if (Auth::user()->id !== 2) {
            return  to_route('admin.setMission')->withErrors(['title'=>'Seuls les supers Admins peuvent mettre à jour la mission']);
        }
        $mission = Mission::find(1);
        $data  =  $request->validate([
            'title'=>['required'],
            'image1' => ['image'],
            'image2' => ['image'],
            'content' => ['required']]);
        
        if ($request->image1 !== null && !$request->image1->getError()){
            $data['image1'] = $request->image1->store('mission','public');
        }
        if ($request->image2 !== null && !$request->image2->getError()){
          $data['image2'] = $request->image2->store('mission','public');
        }
        if (isset($data['image1']) && !isset($data['image2'])){
            Compress::dispatch($data['image1']);
            $mission->update($data);
        }
        elseif (isset($data['image2']) && !isset($data['image1'])) {
            Compress::dispatch($data['image2']);
            $mission->update($data);
        }
        elseif (isset($data['image1']) && isset($data['image2'])){
            MultipleFilesCompress::dispatch([$data['image1'],$data['image2']]);
            $mission->update($data);
        }
        else {$mission->update($data);}
        return to_route('admin.storeMission')->with('success','mission mis à jour !');
    }
}
