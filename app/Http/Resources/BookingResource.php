<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $flights = [];
        $flights[] = new BookingFlightResource($this->flightFrom);
        if ($this->flightBack)
        {
            $flights [] = new BookingFlightResource($this->flightBack);
        }

        return [
            'code' => $this->code,
            'cost' =>$this->flightFrom->cost + $this->flightBack->cost,
            'flights' =>$flights,
            'passangers' =>new BookingPassengersResource($this->passengers)
        ];
    }
}
