<?php

namespace App\Http\Controllers;
use App\Technicien;
use App\Patient;
use App\User;
use App\Selected;
use App\Categorie;
use Illuminate\Http\Request;
use App\Historiquem;
use App\Profile;
use Auth;


class historiqueRdvController extends Controller
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
        
        if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->cons_his_rendez==2) )
        {   ///
            include('variable.php');
            $patients=Patient::All();
            Selected::truncate();
            $users = User::all();
            $technicieno=Technicien::All();
            //$Historiquem=Historiquem::All();
            $Historiquem=Historiquem::orderBy('date_rendez', 'DESC')->get();
    
            return view('profile.historiqueDesRendezVous',compact('Historiquem','technicieno','users','patients','techAuth','profiletech','a'));   
        }
        else
        return view('errors.errorAutorise');  
      }
}
