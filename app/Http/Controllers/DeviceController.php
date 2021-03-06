<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function list($id=null)
    {
        return $id? Device::find($id):Device::all();

    }

    function add(Request $req){

        $device= new Device;
        $device-> name=$req->name;
        $device->member_id=$req->member_id;
        $result =$device->save();
        if($result){
            return ["Result"=>"SAVED!"];
        }
        else {
            return ["Result"=>"Failed!"];
        }  
    }

    function update(Request $req){

        $device= Device::find($req->id);
        $device-> name=$req->name;
        $device->member_id=$req->member_id;
        $result =$device->save();
        if($result){
            return ["Result"=>"Update!"];
        }
        else {
            return ["Result"=>"notUpdate!"];
        }  
    }
}
