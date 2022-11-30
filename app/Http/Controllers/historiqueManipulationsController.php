<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technicien;
use App\Patient;
use App\User;
use App\Selected;
use App\Categorie;
use App\Historiquemnp;
use App\Profile;
use Auth;


class historiqueManipulationsController extends Controller
{
    //
    public function index()
    {
        $users=User::All();
    
        //la le technicien authentifier
        $techAuth= Technicien::where("id_user","=",Auth::user()->id)->get();
        
        $a=0;
        //matricule technicien authentifier    
        foreach($techAuth as $item)
        {
           $a=$item->matricule;
        }
        
        //rechercher profile du technicien authentifier via la matricule trouvée
        $profiletech= Profile::where("matricule_tech","=",$a)->get();
        
        if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->cons_his_man==2) )
        {  include('variable.php');
            $patients=Patient::All();
            Selected::truncate();
            $users = User::all();
            $technicieno=Technicien::All();
           // $Historiquemnp=Historiquemnp::all();
           $Historiquemnp=Historiquemnp::orderBy('quand', 'DESC')->get();
            return view('profile.historiqueDeManipulation',compact('Historiquemnp','technicieno','users','patients','techAuth','profiletech','a'));
            }
        else
        return view('errors.errorAutorise');      
    ///
   }
}
