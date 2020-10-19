<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getOne($code)
    {
        $booking = Booking::where(['code'=>$code])->first();
        return new BookingResource($booking);
    }
}
