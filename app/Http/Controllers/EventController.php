<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Child;
use App\Models\Event;
use App\Models\EventSubscription;
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
            'level' => ['required'],
        ]);
        $event = new Event(array_merge(
            request()->all(),
            ['admin_id' => $request->user()->id]
        ));

        $event->save();
        Admin::findOrFail($request->user()->id)
            ->events()
            ->save($event);

        return back()->with('success', 'your event was created!');
    }

    public function signToEvent(Event $event)
    {
        $eventSubscription = new EventSubscription([
            'event_id' => $event->id,
            'child_id' => Auth::user()->id,
        ]);
        $eventSubscription->save();

        $event->eventSubscriptions()
            ->save($eventSubscription);
        Child::findOrFail(Auth::user()->id)
            ->eventSubscriptions()
            ->save($eventSubscription);

        return back()->with('success', 'You have subscribed the event successfully!');
    }

    public function signOutEvent(EventSubscription $eventSubscription)
    {
        $eventSubscription->delete();
        return back()->with('success', 'You have unsubscribed the event successfully!');
    }

    public function index()
    {
        $events = Event::all();
        return view('event.index', ['events' => $events]);
    }


}
