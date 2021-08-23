<?php

namespace App\Http\Controllers\panel;

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
        return view('panel.Videos.create');
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
