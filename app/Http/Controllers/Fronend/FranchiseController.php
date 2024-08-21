<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\FranchiseeForm;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function franchise()
    {
        return view('frontend.form.franchise');
    }


    public function postfranchisee(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'invpot' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'location' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'invpot' => $request->invpot,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'location' => $request->location,
        ];


        $createData = FranchiseeForm::insert($data);

        if ($createData) {
            return redirect()->back()->with('success', 'Thank You for Contacting Us. We will get back to you soon.');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
}
