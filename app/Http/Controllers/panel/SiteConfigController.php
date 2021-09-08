<?php

namespace App\Http\Controllers\panel;

use App\Models\SiteConfig;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteConfigController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('panel.SiteConfig.index');
    }
    public function create(Request $request){
        $request->validate([
        'phone'=>'min:5|max:20|numeric'
            ]);
        $obj=new SiteConfig();
        $obj->info=$request->info;
        $obj->adress=$request->adress;
        $obj->phone=$request->phone;
        $obj->save();
        return redirect()->route("siteconfig.index");

    }
}
