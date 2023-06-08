<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::where('lang', App::getLocale())->get();

        return view('index', compact('hotels'));
    }

    public function show(Hotel $hotel)
    {
        $data = $hotel;

        $destinations = Destination::where('lang', App::getLocale())->get();

        return view('show', compact('data', 'destinations'));
    }
}
