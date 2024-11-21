<?php

namespace App\Http\Controllers\admin;

use App\Jobs\Compress;
use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SetVisionRequest;

class OurVisionController extends Controller
{
    public function store (SetVisionRequest $request)
    {
        $data  =  $request->validated();
       
        if ($request->image1 !== null && !$request->image1->getError()){
            $data['image1'] = $request->image1->store('vision','public');
            Compress::dispatch($data,'image1');
        }
        if ($request->image2 !== null && !$request->image2->getError()){
            $data['image2'] = $request->image2->store('vision','public');
            Compress::dispatch($data,'image2');
        }

        Vision::create($data);
        return to_route('admin.setVision')->with('success','vision définit avec succès !');
    }
    public function update (Request $request)
    {
        if (Auth::user()->id !== 1) {
            return  to_route('admin.setVision')->withErrors(['title'=>'Seuls les supers Admins peuvent mettre à jour la vision']);
        }
        $vision = Vision::find(1);
        $data  =  $request->validate([
            'title'=>['required'],
            'image1' => ['image'],
            'image2' => ['image'],
            'content' => ['required']]);
        
        if ($request->image1 !== null && !$request->image1->getError()){
            $data['image1'] = $request->image1->store('vision','public');
            Compress::dispatch($data,'image1');
        }
        if ($request->image2 !== null && !$request->image2->getError()){
            $data['image2'] = $request->image2->store('vision','public');
            Compress::dispatch($data,'image2');
        }
        $vision->update($data);
        return to_route('admin.setVision')->with('success','vision mis à jour !');
    }
}
