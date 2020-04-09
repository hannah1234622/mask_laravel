<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Masks;

class DataController extends Controller
{
    public function data()
    {
        $arr_data=new \App\Masks\MaskInfo();
        $arr_data=$arr_data->get();

        $exist=new \App\Masks\MaskInfo();
        $exist=$exist->exists();

        $update_db=new \App\Masks\MaskInfo();
        $update_db->updateDB($arr_data,$exist);
    }
}
