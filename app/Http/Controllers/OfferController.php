<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class OfferController extends Controller
{
         public function index()
    {
        $rooms=Room::all();
        return view('offers', ['rooms' => $rooms ], ['title' => 'Offers']);

    }
}
