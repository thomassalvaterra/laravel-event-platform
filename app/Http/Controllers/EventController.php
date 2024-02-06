<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\tag;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            $events = Event::all();
            return view("admin.events.index", compact("events"));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Event $event)
    {
        $tags = tag::all();

        return view("admin.events.create", compact("tags", "event"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $validati = $request->validated();

        $newEvent = new Event();
        $newEvent->fill($validati);
        $newEvent->save();

        return redirect()->route("admin.event.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view("admin.events.show", compact("event"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $tags = tag::all();
        return view("admin.events.edit", compact("event", "tags"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validati = $request->validated();

        $event->fill($validati);
        $event->update();
        return redirect()->route("admin.event.show", $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route("admin.event.index");
    }
}
