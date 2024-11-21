<?php

namespace App\Http\Controllers;


use App\Jobs\Compress;
use App\Models\About;
use App\Models\Blog;
use App\Models\Cause;
use App\Models\Event;
use App\Rules\pastDate;
use App\Rules\upcomingDate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use BumpCore\EditorPhp\Blocks\Header;
use BumpCore\EditorPhp\Blocks\Image;
use BumpCore\EditorPhp\Blocks\ListBlock;
use BumpCore\EditorPhp\Blocks\Paragraph;
use BumpCore\EditorPhp\EditorPhp;

class EventController extends Controller
{
    public function events (string $status = 'upcoming')
    {
        EditorPhp::register([
            'image' =>Image::class,
            'paragraph' => Paragraph::class,
            'header' => Header::class,
            'list'=>ListBlock::class,
        ]);
        $events = Event::where('status', $status)->paginate(3);
        return view('events',[
            'events' => $events,
            'carbon'=>Carbon::class,
            'causes' => Cause::limit(4)->orderBy('created_at','desc')->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
            'recentevents'=>Event::where([['created_at','<',$events[0]->created_at],['status',$status]])->orderBy('created_at','desc')->limit(3)->get(),
            'editorphp'=> EditorPhp::class,
            'allevents' => Event::all(),

        ]);
    }
    public function eventDetail (int $id) 

    {
        EditorPhp::useTailwind();

        EditorPhp::register([
            'image' =>Image::class,
            'paragraph' => Paragraph::class,
            'header' => Header::class,
            'list'=>ListBlock::class,
        ]);
        $event = Event::find($id);
        return view('eventDetails',[
            'event'=> $event,
            'carbon'=>Carbon::class,
            'causes' => Cause::limit(4)->orderBy('created_at','desc')->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
            'events'=>Event::orderBy('created_at','desc')->get(),
            'editorphp'=> EditorPhp::class,
            'recentevents'=>Event::where([['created_at','>',$event->created_at],['status',$event->status]])->orderBy('created_at','desc')->limit(3)->get(),
        ]);
    }
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
            Compress::dispatch($data,'image');
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
        $event =  Event::with('user')->find($id);
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
            Compress::dispatch($data,'image');
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
