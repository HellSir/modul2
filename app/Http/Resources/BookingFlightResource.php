<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingFlightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'flight_id'=>$this->id,
            'flight_code'=>$this->flight_code,
            'from'=>[
                'city'=>$this->airportFrom->city,
                'airport'=>$this->airportFrom->name,
                'iata'=>$this->airportFrom->iata,
                'time'=>Carbon::createFromFormat('H:i:s',$this->time_from)->format('h:i')
            ],
            'to' => [
                    'city'=>$this->airportTo->city,
                    'airport'=>$this->airportTo->name,
                    'iata'=>$this->airportTo->iata,
                    'time'=>Carbon::createFromFormat('H:i:s',$this->time_from)->format('h:i')
            ]
        ];
    }
}
