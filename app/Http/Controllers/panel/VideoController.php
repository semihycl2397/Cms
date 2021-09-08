<?php

namespace App\Http\Controllers\panel;


use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class VideoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){

        return view('panel.Videos.index');
    }

    public function app(){
        $videos=Videos::all();
        return view('panel.Videos.create',compact('videos'));
    }
    public function createVideo(Request $request){

        $request->validate([

            'name'=>'min:3,required'

        ]);
        if ($request->hasFile("type")){
            $request->validate([
               'type'=>'mimes:jpg,png,img'
            ]);

            $request->type->store('video','public');
            $obj=new Videos();
            $obj->name=$request->name;
            $obj->video_url=$request->type->hashName();
            $obj->save();
        }

       return redirect()->route('Videos.create');

    }
    public function apps()
    {
        return view('panel.Videos.album');
    }
    public function apply()
    {
        return view('panel.Videos.albindex');
    }
    public function apple()
    {
        return view('panel.Videos.albcreate');
    }
}
