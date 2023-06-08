<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DestinationController extends Controller
{
    public function showByDestination(Destination $destination)
    {
        $destinations = Destination::where('lang', App::getLocale())->get();
        $tours = $destination->tours;

        return view('index', compact('tours', 'destinations'));
    }
}
