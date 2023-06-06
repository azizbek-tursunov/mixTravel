<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutPage;
use App\Models\Banner;
use App\Models\Destination;
use App\Models\DestinationTour;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function home()
    {
        $lang = App::getLocale();

        $banners = Banner::where('lang', $lang)->get();
        $about = About::where('lang', $lang)->first();
        $destinations = Destination::where('lang', $lang)->take(3)->get();
        $tours = Tour::where('lang', $lang)->take(4)->get();

        return view('home', compact('banners', 'about', 'destinations', 'tours'));
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);

        session()->put('locale', $request->lang);

        return redirect()->back();
    }

    public function view()
    {

        $tours = Tour::where('lang', App::getLocale())->get();
        $destinations = Destination::where('lang', App::getLocale())->get();

        return view('tours', compact('tours', 'destinations'));
    }

    public function show(Tour $tour)
    {
        $destinations = Destination::where('lang', App::getLocale())->get();

        return view('show', compact('tour', 'destinations'));
    }

    public function showByDestination(Destination $destination)
    {
        $destinations = Destination::where('lang', App::getLocale())->get();
        $tours = $destination->tours;
//        dd($tours);

        return view('tours', compact('tours', 'destinations'));
    }

    public function about(Request $request)
    {
//        $about = AboutPage::where('lang', App::getLocale())->first();

        return view('aboutUs');
    }
}
