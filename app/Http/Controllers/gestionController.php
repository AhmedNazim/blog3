<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;

class gestionController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth');
    }






    public function listerEmploye()
    {   
        $tableEmp=Employe::all();

        return view('gestionEmploye',compact('tableEmp'));
    }






    public function getListeEmployes()
    {
        return Employe::all();
    }
}
