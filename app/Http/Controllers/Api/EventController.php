<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        $results = Event::with("User")->get();
        $data = [
            "success" => true,
            "results" => $results
        ];
        return response()->json($data);
    }

    // Metodo show che usa il success true/false
    public function show($id)
    {
        $event = Event::with("User")->find($id);

        return response()->json([
            "success" => $event ? true : false,
            "results" => $event ? $event : "Nessun evento corrisponde all'id"
        ]);
    }
}
