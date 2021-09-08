<?php

namespace App\Http\Controllers\panel;

use App\Models\Images;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ImageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('panel.Images.index');
    }
    public function app(){
        $images=Images::all();
        return view('panel.Images.create',compact('images'));
    }
    public function createImage(Request $request)
    {

        $request->validate([

            'name' => 'min:3,required'

        ]);
        if ($request->hasFile("type")) {
            $request->validate([
                'type' => 'mimes:jpg,png,img'
            ]);

            $request->type->store('image', 'public');
            $obj = new Images();
            $obj->name = $request->name;
            $obj->images_url = $request->type->hashName();
            $obj->save();
        }

        return redirect()->route('Images.create');

    }

    public function apps()
    {
        return view('panel.Images.album');
    }
    public function apply()
    {
        return view('panel.Images.albindex');
    }
    public function apple()
    {
        return view('panel.Images.albcreate');
    }
}
