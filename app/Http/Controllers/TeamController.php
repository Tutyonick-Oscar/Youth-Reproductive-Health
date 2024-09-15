<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function show ()
    {
        return view('admin.team',['members' => TeamMember::paginate(5)]);
    }
    public function add ()
    {
        return view('admin.addMember');
    }
    public function store (Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'image' => ['required','file','image'],
            'content' => ['required','json']
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('members','public');
        }
        TeamMember::create($data);

        return to_route('admin.members')->with('success','membre ajoutée avec succès !');
    }
    public function getMember ( int $id)
    {
        $member =  teamMember::find($id);
        return view('admin.addMember',[
            'member' => $member
        ]);
    }
    public function update (int $id, Request $request)
    {
        $member =  TeamMember::find($id);
        
        $data = $request->validate([
            'name' => ['required'],
            'image' => ['file','image'],
            'content' => ['required','json']
        ]);

        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('members','public');
        }
        $member->update($data);
        return to_route('admin.members')->with('success','membre mis à jour avec succès !');
    }
    public function delete (int $id)
    {
        $member = TeamMember::find($id);
        $member->delete();
        return to_route('admin.members')->with('success','membre supprimée !');
    }
}
