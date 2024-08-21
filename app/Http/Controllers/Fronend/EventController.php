<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events()
    {
        return view('frontend.pages.event');
    }
}
