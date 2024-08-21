<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function abacus()
    {
        return view('frontend.courses.abacus');
    }

    public function vedicmath()
    {
        return view('frontend.courses.vedicmath');
    }
}
