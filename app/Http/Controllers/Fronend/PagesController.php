<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function franchise()
    {
        return view('frontend.pages.franchise-opp');
    }

    public function career()
    {
        return view('frontend.pages.career-opp');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }


    public function contact(Request $request)
    {
        $presences = Presence::latest('id')->get();
        $data['name'] = $presences;
        $data['presences'] = $presences;
        // dd($presences);
        return view('frontend.pages.contact', $data);
    }
}
