<?php

namespace App\Http\Controllers\panel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ImageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('panel.Images.index');
    }

    public function app()
    {
        return view('panel.Images.create');
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
