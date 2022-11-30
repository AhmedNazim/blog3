<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Technicien;
use App\Profile;
class gestionAcceeController extends Controller
{
public function index()
{   if(Auth::user()->isAdmin==1)
    {
       include('variable.php');
       return view('administrateur.homeAdmin',$users,compact('techAuth','profiletech','a'));
   
    }
    if(Auth::user()->isAdmin==2)
    {
       include('variable.php');
       return view('technicien.homeTechnicien',$users,compact('techAuth','profiletech','a'));
   
    }
    if(Auth::user()->isAdmin==3)
    {
        
      
        include('variable.php');
         $patients=Patient::All();
                
        return view('patient.homePatient',$users,compact('patients','techAuth','profiletech','a'));
      
   
    }
    if(Auth::user()->isAdmin!=3 || Auth::user()->isAdmin!=2 || Auth::user()->isAdmin!=1 )
    {
        
        include('variable.php');
       return view('anonnyme.anonnyme',$users,compact('techAuth','profiletech','a'));
   
    }
    
}
}
