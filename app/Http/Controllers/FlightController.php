<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function search(FlightRequest $request)
    {
        $airportFrom = Airport::where(['iata'=>$request->from])->first();
        $airportTo = Airport::where(['iata'=>$request->to]);

        $flights = Flight::where(['from_id'=>$airportFrom->id,'to_id'=>$airportTo->id])->get();

        $availableFromFlights = [];
        $availableBackFlights = [];
    }
}
