<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technicien;
use App\Patient;
use App\User;
use App\Categorie;
use App\Equipe;
use App\Division;
use App\Historiquemnp;
use App\Profile;
use Auth;
use Carbon\Carbon;

use DateTime;
class gestionPatientController extends Controller
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
    
    if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->int_donn_pat==2 ||$profiletech[0]->modif_donn_pat==2 ||$profiletech[0]->arch_comp_pat==2||$profiletech[0]->afficher_donn_pat==2 ) )
    {    include('variable.php');
        $technicieno=Technicien::All();
        $patients=Patient::all();
        return view('profile.gestionPatient',$users,compact('patients','technicieno','techAuth','profiletech','a'));
    }
    else
    return view('errors.errorAutorise');  
    //////
}

public function getIntroduire()

{
    $users=User::All();
    $message="";
    
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

if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->int_donn_pat==2) )
{ include('variable.php');
    $technicieno=Technicien::All();
    return view('profile.introduirePatient',$users,compact('message','users','technicieno','techAuth','profiletech','a'));
}
else
return view('errors.errorAutorise');  
  
}
public function getIntroduireContr( Request $request)
{       //formulaire patient
$message="";
        $patient = new Patient();
        $testing=Patient::find($request->input('matricule_p'));

        if($testing)
        {
            $message="Veuillez bien  insérer correctement les données*";
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
return view('profile.introduirePatient',$users,compact('message','users','technicieno','techAuth','profiletech','a'));
        }
        $userNameForm= $request->input('nom_utilisateur');
        $user1 = User::where("name","=",$userNameForm)->get();
        $patient->id=$request->input('matricule_p');
        $patient->id_user_pat=$user1[0]->id;

  

        $patient->matricule_p=$request->input('matricule_p');
        $patient->nom_pat=$request->input('nom_pat');
        $patient->prenom_pat=$request->input('prenom_pat');
        $patient->date_naiss_pat=$request->input('date_naiss_pat');
        $patient->lieu_naiss_pat=$request->input('lieu_naiss_pat');
        $patient->sexe_pat=$request->input('sexe_pat');
        $patient->date_recru_pat=$request->input('date_recru_pat');
        $patient->email_emp_pat=$user1[0]->email;
        $patient->poste_trav_pat=$request->input('poste_trav_pat');
        $patient->n_poste_pat=$request->input('n_poste_pat');
        $patient->groupage_pat=$request->input('groupage_pat');
        $patient->situation_fam_pat=$request->input('situation_fam_pat');
        $patient->n_securite_so_pat=$request->input('n_securite_so_pat');
        $patient->adresse_pat=$request->input('adresse_pat');
        $patient->date_der_visite=$request->input('date_der_visite');
        $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('420 days'));
        $patient->dateSupProchRendez=$date;

        // $date=date_create($patient->dateSupProchRendez);
        // date_format($date,"Y-m-d");
        // return $date;
        
        //to comeback--start
        //tester monday
        
        // $date = new DateTime($patient->dateSupProchRendez);
        // $result = $date->format('Y-m-d ');
        // return $result;
        
        // $date = strtotime("2013-03-15");
        // $day = date('D', $date);
        // $date = date('d');
        // return  $day;

        //to comeback--end

        


        //admin=3
  $aa= User::find($user1[0]->id);
  $aa->isAdmin=3;
  $aa->save();


        $patient->nbrVA=1;
        $patient->save();

        //champs catégories
        $categorie=new Categorie();
        $categorie->id=$request->input('matricule_p');
        $categorie->matricule_pat=$request->input('matricule_p');
        if($request->has('travailleur_exposes_risque'))
        {
            $categorie->travailleur_exposes_risque=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }

        if($request->has('travailleur_affectes_postes_securite'))
        {
            $categorie->travailleur_affectes_postes_securite=2;
            $patient->nbrVA=2;
            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }

        if($request->has('travailleur_charges_la_restauration'))
        {
            $categorie->travailleur_charges_la_restauration=2;
            $patient->nbrVA=2;
            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }
        if($request->has('handicapes_chroniques'))
        {
            $categorie->handicapes_chroniques=2;
            $patient->nbrVA=2;
            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }
        if($request->has('femmes_enceintes_mere'))
        {
            $categorie->femmes_enceintes_mere=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }
        $patient->save();
        $categorie->save();
        
        //division
        $division=new Division();
        $division->id =$patient->matricule_p;
        $division->division =$request->input('division');;
        $division->save();

        //equipe
        $equipe=new Equipe();
        $equipe->id =$patient->matricule_p;
        $equipe->equipe =$request->input('equipe');;
        $equipe->save();

        //historique manip
        $Historiquemnp = new Historiquemnp();
        $Historiquemnp->matricule= Auth::user()->id ;
        $Historiquemnp->qui= Auth::user()->name ;
        $Historiquemnp->quoi= "Compléter compte" ;
        $Historiquemnp->aqui=$request->input('nom_pat');
        $Historiquemnp->quand= date("Y-m-d h:i:s");
        $Historiquemnp->save();
        //end manip 

        
        return redirect('/gestionpatient');


}
    public function modificationpatient($idmodif)
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
        
        if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->modif_donn_pat==2) )
        {     $patientToModif=Patient::find($idmodif);


            $categorie=Categorie::find($idmodif);
            include('variable.php');
            $technicieno=Technicien::All();
    
            //div/equipe
            $equipe=Equipe::find($patientToModif->matricule_p);
            $equipeequipe=$equipe->equipe;
    
            $division=Division::find($patientToModif->matricule_p);
            $divisiondivision=$division->division;
    
    
            
            
            return view('profile.formmodificationpatient',$users,compact('equipeequipe','divisiondivision','categorie','patientToModif','technicieno','techAuth','profiletech','a'));
    }
        else
        return view('errors.errorAutorise'); 
        ///
    
    }
    public function modifierepatientcontrol(Request $request,$matricule)
    {
        $patient=Patient::find($matricule);
        $patient->matricule_p=$request->input('matricule_p');
        $patient->nom_pat=$request->input('nom_pat');
        $patient->prenom_pat=$request->input('prenom_pat');
        $patient->date_naiss_pat=$request->input('date_naiss_pat');
        $patient->lieu_naiss_pat=$request->input('lieu_naiss_pat');
        $patient->sexe_pat=$request->input('sexe_pat');
        $patient->date_recru_pat=$request->input('date_recru_pat');
       
        $patient->poste_trav_pat=$request->input('poste_trav_pat');
        $patient->n_poste_pat=$request->input('n_poste_pat');
        $patient->groupage_pat=$request->input('groupage_pat');
        $patient->situation_fam_pat=$request->input('situation_fam_pat');
        $patient->n_securite_so_pat=$request->input('n_securite_so_pat');
        $patient->adresse_pat=$request->input('adresse_pat');
        $patient->date_der_visite=$request->input('date_der_visite');

        $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('420 days'));
        $patient->dateSupProchRendez=$date;

        $patient->nbrVA=1;
        $patient->save();

        $categorie=Categorie::find($matricule);
        $categorie->id=$request->input('matricule_p');
        $categorie->matricule_pat=$request->input('matricule_p');
        $categorie->travailleur_exposes_risque=1;
        $categorie->travailleur_affectes_postes_securite=1;
        $categorie->travailleur_charges_la_restauration=1;
        $categorie->handicapes_chroniques=1;
        $categorie->femmes_enceintes_mere=1;
        if($request->has('travailleur_exposes_risque'))
        {
            $categorie->travailleur_exposes_risque=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }

        if($request->has('travailleur_affectes_postes_securite'))
        {
            $categorie->travailleur_affectes_postes_securite=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }

        if($request->has('travailleur_charges_la_restauration'))
        {
            $categorie->travailleur_charges_la_restauration=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }
        if($request->has('handicapes_chroniques'))
        {
            $categorie->handicapes_chroniques=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }
        if($request->has('femmes_enceintes_mere'))
        {
            $categorie->femmes_enceintes_mere=2;
            $patient->nbrVA=2;

            $date=date_create($patient->date_der_visite);
        date_add($date, date_interval_create_from_date_string('210 days'));
        $patient->dateSupProchRendez=$date;
        }
        $patient->save();
        $categorie->save();

        //division
        $division=Division::find($patient->matricule_p);
        $division->id =$patient->matricule_p;
        $division->division =$request->input('division');;
        $division->save();

        //equipe
        $equipe=Equipe::find($patient->matricule_p);
        $equipe->id =$patient->matricule_p;
        $equipe->equipe =$request->input('equipe');;
        $equipe->save();

           //historique manip
           $Historiquemnp = new Historiquemnp();
           $Historiquemnp->matricule= Auth::user()->id ;
           $Historiquemnp->qui= Auth::user()->name ;
           $Historiquemnp->quoi= "Modifier compte" ;
           $Historiquemnp->aqui=$request->input('nom_pat');
           $Historiquemnp->quand= date("Y-m-d h:i:s");
           $Historiquemnp->save();
           //end manip 

        return redirect('/gestionpatient');
    }

 public function destroy($id4)
 {      

    
    $patients=Patient::find($id4);
    $patients->deleted_at=date('Y-m-d H:i:s');
    $patients->save();
    $categorie =Categorie::find($id4);
    $categorie->deleted_at=date('Y-m-d H:i:s');
    //archivier div/equi
    $division =Division::find($id4);
    $division->deleted_at=date('Y-m-d H:i:s');
    $Equipe =Equipe::find($id4);
    $Equipe->deleted_at=date('Y-m-d H:i:s');
    $division->save();
    $Equipe->save();

    $categorie->save();

       //historique manip
       $Historiquemnp = new Historiquemnp();
       $Historiquemnp->matricule= Auth::user()->id ;
       $Historiquemnp->qui= Auth::user()->name ;
       $Historiquemnp->quoi= "Archiver compte" ;
       $Historiquemnp->aqui=$patients->nom_pat;
       $Historiquemnp->quand= date("Y-m-d h:i:s");
       $Historiquemnp->save();
       //end manip 

    return redirect('/gestionpatient');

 }

 public function afficherpatient($matricule)
 {
     return Patient::find($matricule);
 }

 public function namePatToSupp($id4)
    {
        $a=Patient::find($id4);
        return $a->nom_pat." ".$a->prenom_pat;
    }


}
