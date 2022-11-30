<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Technicien;
use App\Patient;
use App\User;
use App\Selected;
use App\Categorie;
use App\Selectedvalide;
use App\Historiquem;
use App\Profile;
use Auth;

class gestionRdvController extends Controller
{
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
    
    if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->gerer_rendez==2) )
    {    /////
        include('variable.php');
        $patients=Patient::orderBy('dateSupProchRendez', 'ASC')->get();
        Selected::truncate();
        return view('profile.gestionRdv',$users,compact('patients','techAuth','profiletech','a'));
    }
    else
    return view('errors.errorAutorise');  
 
}
public function introduirerendezvous(){
    
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
    
    if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->gerer_rendez==2) )
    {  ///
        include('variable.php');
        $patients=Patient::All();
        Selected::truncate();
        $users = User::all();
        return view('profile.IntroduiRerendezVous',compact('users','patients','techAuth','profiletech','a'));
     }
    else
    return view('errors.errorAutorise');  
   

}
 
public function viderlalistedesrdv()
    {
        $selected=Selectedvalide::All();
        Selectedvalide::truncate();
        return redirect('/gererlalisterendezvous');
    }

    public function introduirerendezvousinterface1(Request $request)
    {
        $Selectedvalide = new Selectedvalide();
        $userNameForm= $request->input('nom_utilisateur');
        $user1 = User::where("name","=",$userNameForm)->get();
        $patient=Patient::where("id_user_pat","=",$user1[0]->id)->get();
        $Selectedvalide->id = $patient[0]->matricule_p;
        $Selectedvalide->nom_sel =$patient[0]->nom_pat;
        $Selectedvalide->prenom_sel = $patient[0]->prenom_pat;
        $Selectedvalide->date_der_visite_sel = date('y-m-d');
        $Selectedvalide->type_visite = $request->type_visite;
        $Selectedvalide->etat = "en attente";
        $Selectedvalide->etat_visite = "Non achevé";
        $Selectedvalide->save();
        return redirect('/gererlalisterendezvous');
        
    }
    public function setachev($m)
{
    $sv=Selectedvalide::find($m);
    $sv->etat_visite="Effectuée";
  
    //traitement patient
    $patient=Patient::find($m);
    $patient->date_der_visite=date("Y-m-d");
    if($patient->nbrVA==1)
    {
        $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('420 days'));
        $patient->dateSupProchRendez=$date;
        $sv->date_der_visite_sel=$date;
    }
    else
    {
        $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        $sv->date_der_visite_sel=$date;
    }

    $patient->save();
    $sv->save();
    $hr=new Historiquem();
    $hr->matricule_pat=$sv->id;
    $hr->nom_pat=$sv->nom_sel;
    $hr->prenom_pat=$sv->prenom_sel;
    $hr->etat_rendez=$sv->etat_visite;
    $hr->date_rendez=date("Y-m-d h:i:s");
    $hr->save();
    




}
public function setNonAchev($m)
{
    $sv=Selectedvalide::find($m);
    $sv->etat_visite="Non Effectuée";
    $sv->save();
    $hr=new Historiquem();
    $hr->matricule_pat=$sv->id;
    $hr->nom_pat=$sv->nom_sel;
    $hr->prenom_pat=$sv->prenom_sel;
    $hr->etat_rendez=$sv->etat_visite;
    $hr->date_rendez=date("Y-m-d h:i:s");
    $hr->save();

}
public function setReporte($m)
{
    $sv=Selectedvalide::find($m);
    $sv->etat_visite="Reportée";
    $sv->save();
    $hr=new Historiquem();
    $hr->matricule_pat=$sv->id;
    $hr->nom_pat=$sv->nom_sel;
    $hr->prenom_pat=$sv->prenom_sel;
    $hr->etat_rendez=$sv->etat_visite;
    $hr->date_rendez=date("Y-m-d h:i:s");
    $hr->save();
    

}
}
