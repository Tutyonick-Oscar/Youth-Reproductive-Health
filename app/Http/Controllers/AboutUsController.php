<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function show ()
    {
        $about = About::find(1);
        if ($about !== null) {
            return view('admin.aboutus',[
                'about' => $about
            ]);
        }
        return view('admin.aboutus');
    }
    public function store (Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['required','file','image'],
            'content' => ['required','json']
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('about','public');
        }
        About::create($data);

        return to_route('admin.about')->with('success','à propos définit avec succès !');
    }
    public function update (Request $request)
    {
        $about = About::find(1);
        $data = $data = $request->validate([
            'title' => ['required'],
            'image' => ['file','image'],
            'content' => ['required','json']
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('about','public');
        }
        $about->update($data);
        return to_route('admin.about')->with('success','à propos mis à jour avec succès !');
    }
}
