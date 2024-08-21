<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PresenceController extends Controller
{
    public function index(Request $request)
    {

        $presences = Presence::latest('id');

        // if (!empty($request->get('keyword'))) {
        //     $p =  $products->where('title', 'like', '%' . $request->get('keyword') . '%');
        // }

        $presences = $presences->paginate();
        $data['presences'] = $presences;
        return view('admin.presence.list', $data);
        // dd($products);
    }

    public function create()
    {

        // $data = [];
        // $categories = Category::orderBy('name', 'ASC')->get();
        // $brands = Brand::orderBy('name', 'ASC')->get();

        // $data['categories'] = $categories;
        // $data['brands'] = $brands;

        return view('admin.presence.create');
    }


    public function store(Request $request)
    {


        $rules = [

            'name' => 'required',
            'location' => 'required',
            'state' => 'required',
            'status' => 'required',



        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            $presences = new Presence();
            $presences->name = $request->name;
            $presences->location = $request->location;
            $presences->state = $request->state;
            $presences->status = $request->status;

            $presences->save();



            // Save Gallery Image



            $request->session()->flash('success', 'Franchisee Added Successfully');

            return response()->json([
                'status' => true,
                'messge' => 'Franchisee Added Successfully'


            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()

            ]);
        }
    }


    public function edit($id, Request $request)
    {


        $presences = Presence::find($id);



        if (empty($presences)) {
            return redirect()->route('presence.index')->with('error', 'Franchisee Not Found');
        }

        $data['name'] = $presences;
        $data['location'] = $presences;
        $data['state'] = $presences;
        $data['status'] = $presences;

        // dd($presences->location);
        return view('admin.presence.edit', $data);
    }




    public function update($id, Request $request)
    {

        $presences = Presence::find($id);

        $rules = [

            'name' => 'required',
            'location' => 'required',
            'state' => 'required',


        ];

        // if (!empty($request->track_qty) && $request->track_qty == 'Yes') {
        //     $rules['qty'] = 'required|numeric';
        // }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            $presences->name = $request->name;
            $presences->location = $request->location;
            $presences->state = $request->state;
            $presences->save();



            // Save Gallery Image




            $request->session()->flash('success', 'Franchisee Updated Successfully');

            return response()->json([
                'status' => true,
                'messge' => 'Franchisee Updated Successfully'


            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()

            ]);
        }
    }


    public function destroy($id, Request $request)
    {
        $presences = Presence::find($id);

        if (empty($presences)) {
            $request->session()->flash('error', 'Franchisee Not Found');

            return response()->json([
                'status' => false,
                'notFound' => true
            ]);
        }



        $presences->delete();

        $request->session()->flash('success', 'Franchisee Deleted Successfully');
        return response()->json([
            'status' => true,
            'message' => 'Franchisee Deleted Successfully'
        ]);
    }
}
