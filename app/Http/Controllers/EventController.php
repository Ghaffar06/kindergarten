<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\EventSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->validate([
            'text' => ['required', 'string'],
            'title' => ['required', 'string'],
            'event_date' => ['required'],
        ]);
        $event = new Event;
        $event->title = $request->title;
        $event->text = $request->text;
        $admin = Admin::findOrFail($request->user()->id);
        $admin->reports()->save($event);

        return back()->with('success', 'your event was created!');
    }

    public function signToEvent($event)
    {
        $eventSubscription = new EventSubscription;
        $eventSubscription->child_id = Auth::user()->id;
        $eventSubscription->event_id = $event;
        $eventSubscription->date_sub = Carbon::now();
        $eventSubscription->save();
        return back()->with('success', 'You have subscribed the event successfully!');
    }

    public function index()
    {
        $events = Event::all();
        return view('event.index', ['events' => $events]);
    }


}
