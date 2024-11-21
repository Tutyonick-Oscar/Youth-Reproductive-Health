<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jobs\Compress;
use App\Models\HomeSlide;
use App\Services\ImageService;
use Auth;
use Illuminate\Http\Request;


class DataStoreController extends Controller
{
    public function storeSlide (Request $request )
    {
        $data = $request->validate([
            'image' => ['required','image'],
            'title' => ['required']
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('slides','public');
            Compress::dispatch($data,'image');
        }
        $admin = Auth::user();
        $admin->slides()->create($data);
        return back()->with('success','slide ajouté avec succès !');
    }
    public function updateSlide (int $id)
    {
        $slide = HomeSlide::find($id);
        return view ('admin.addSlide',[
            'slide' => $slide
        ]);
    }
    public function updatedSlide (Request $request, int $id)
    {
        $slide = HomeSlide::find($id);

        $data = $request->validate([
            'image' => ['image'],
            'title' => ['required']
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('slides','public');
            Compress::dispatch($data,'image');
        }
        $slide->update($data);
        return to_route('admin.slider')->with('success','slide mise à jour avec succès !');
    }
    public function deleteSlide (int $id)
    {
        $slide = HomeSlide::find($id);
        $slide->delete();
        return to_route('admin.slider')->with('success','slide supprimé !');
    }
}
