<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technicien;
use App\Profile;

class listTechnicienController extends Controller
{
    //
    public function getList($id2)
    {
       return Technicien::find($id2);
     //return "ss".$id2."ss"  ;
    }
    public function prevelege($id2)
    {
        return Profile::find($id2);
    }
}
