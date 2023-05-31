<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Destination;
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
}
