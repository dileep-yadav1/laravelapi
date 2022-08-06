<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    
    

    function list($id=null)
    {
        return $id?Device::find($id):Device::all();
    
    }

    function add(Request $req)
    {
        $device = new Device;
        $device->name=$req->name;
        $device->email=$req->email;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result)
        {
            return ["Result"=>"Data has been saved"];
        }
        else
        {
            return ["Result"=>"Operation failed"];
        }
        
    }

    function update(Request $req)
    {
        $device = Device::find($req->id);
        $device->name = $req->name;
        $device->email= $req->email;
        $device->member_id=$req->member_id;
        $result = $device->save();
        if($result)
        {
            return ["result"=>"data has been updated"];
        }
        else
        {
            return ["result"=>"update operation has been failed"];
        }
        
    }


    // function list()
    // {
    //     return Device::all();
    
    // }
}
