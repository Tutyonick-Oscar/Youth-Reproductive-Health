<?php

namespace App\Http\Controllers;

use App\Jobs\Compress;
use App\Models\Cause;
use Illuminate\Http\Request;
use App\Models\Blog;

class CauseContoller extends Controller
{
    public function show ()
    {
        return view('admin.causes',['causes' => Cause::paginate(5)]);
    }
    public function add ()
    {
        return view('admin.addCause');
    }
    public function store (Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['required','file','image'],
            'content' => ['required','json']
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('causes','public');
            Compress::dispatch($data,'image');
        }
        Cause::create($data);

        return to_route('admin.causes')->with('success','cause ajoutée avec succès !');
    }
    public function getCauses ( int $id)
    {
        $cause =  Cause::find($id);
        return view('admin.addCause',[
            'cause' => $cause
        ]);
    }
    public function update (int $id, Request $request)
    {
        $cause =  Cause::find($id);
        
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['file','image'],
            'content' => ['required','json']
        ]);

        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('causes','public');
            Compress::dispatch($data,'image');
        }
        $cause->update($data);
        return to_route('admin.causes')->with('success','cause mis à jour avec succès !');
    }
    public function delete (int $id)
    {
        $cause = Cause::find($id);
        $cause->delete();
        return to_route('admin.causes')->with('success','cause supprimée !');
    }

    public function detail(int $id)
    {
        $cause = Cause::find($id);
        return view('cause_detail',[
            'cause' => $cause,
            'causes' => Cause::orderBy('created_at','desc')->limit(4)->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
        ]);
    }
}
