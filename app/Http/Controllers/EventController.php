<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Rules\pastDate;
use App\Rules\upcomingDate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function getEvents (string $status = 'upcoming')
    {
        $events = Event::where('status', $status)->paginate(5);
        return view('admin.events',[
            'events' => $events,
            'carbon'=>Carbon::class
        ]);
    }
    public function store (Request $request)
    {
        //dd(Carbon::now()->format('Y-m-d'));
        
        $user = Auth::user();
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['required','file','image'],
            'content' => ['required','json'],
            'date' => ['date',new pastDate, new upcomingDate],
            'tags' => [],
            'status'=> ['required']
        ]);
    
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('events','public');
        }

        $user->events()->create($data);

        return to_route('admin.getEvents',['status'=> $data['status']])->with('success','event publié avec succès !');
    }
    public function addEvent ()
    {
        return view('admin.addEvent');
    }
    public function getEvent ( int $id)
    {
        $event =  Event::find($id);
        return view('admin.addEvent',[
            'event' => $event
        ]);
    }
    public function update (int $id, Request $request)
    {
        $event =  Event::find($id);
        
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['file','image'],
            'content' => ['required','json'],
            'date' => ['date',new pastDate, new upcomingDate],
            'tags' => [],
            'status'=> ['required'],
        ]);

        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('events','public');
        }
        $event->update($data);
        return to_route('admin.getEvents',['status'=> $data['status']])->with('success','event mis à jour avec succès !');
    }
    public function delete (int $id)
    {
        $event =  Event::find($id);
        $event->delete();
        return back()->with('success','event supprimé !');
    }
}
