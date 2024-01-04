<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Image;

class BrandController extends Controller
{

    public function index(Request $request)
    {
        $brands = Brand::latest('id');

        if ($request->get('keyword')) {
            $brands = $brands->where('name', 'like', '%' . $request->keyword . '%');
        }
        $brands = $brands->paginate(10);

        return view('admin.brands.list', compact('brands'));
    }


    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'slug' => 'required|unique:brands',

        ]);

        if ($validator->passes()) {

            $brand = new Brand();
            $brand->name = $request->name;
            $brand->slug = $request->slug;
            $brand->status = $request->status;
            $brand->save();


            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $brand->id . '.' . $ext;

                $sPath = public_path() .'/temp/'.$tempImage->name;
                $dPath = public_path() .'/uploads/brand/'.$newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() .'/uploads/brand/thumb/'.$newImageName;
                $img = Image::make($sPath);
                // $img->resize(300, 200);
                $img->fit(540, 540, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save($dPath);


                $brand->image = $newImageName;
                $brand->save();
            }

            $request->session()->flash('success', 'Brand Created Successfully');

            return response([
                'status' => true,
                'message' => 'Brand Created Successfully'
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
        $brand = Brand::find($id);

        if (empty($brand)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('brands.index');
        }

        $data['brand'] = $brand;
        return view('admin.brands.edit', $data);
    }


    public function update($id, Request $request)
    {


        $brand = Brand::find($id);

        if (empty($brand)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
            // return redirect()->route('sub-categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'slug' => 'required|unique:brands,slug,' . $brand->id . ',id',
            'status' => 'required',

        ]);

        if ($validator->passes()) {

            $brand->name = $request->name;
            $brand->slug = $request->slug;
            $brand->status = $request->status;
            $brand->save();



            $oldImage = $brand->image;

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $brand->id . '-' . time() . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/brand/' . $newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() . '/uploads/brand/thumb/' . $newImageName;
                $img = Image::make($sPath);
                // $img->resize(300, 200);
                $img->fit(540, 540, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save($dPath);



                $brand->image = $newImageName;
                $brand->save();


                //delete old images

                File::delete(public_path() . '/uploads/brand/thumb/' . $oldImage);
                File::delete(public_path() . '/uploads/brand/' . $oldImage);
            }

            $request->session()->flash('success', 'Brand Updated Successfully');

            return response([
                'status' => true,
                'message' => 'Brand Updated Successfully'

            ]);
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $brand = Brand::find($id);

        if (empty($brand)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $brand->delete();

        $request->session()->flash('success', 'Brand Deleted Successfully');
        return response([
            'status' => true,
            'message' => 'Brand Deleted Successfully'

        ]);
    }
}
