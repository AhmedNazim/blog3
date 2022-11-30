<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Technicien;
use App\User;
use App\Profile;
use App\Selected;
use App\Selectedvalide; 
use Auth;


class gestionRendezVousController extends Controller
{
    public function getList()
    {
        return Patient::all();
    }
    public function getpatient($id7)
    {
        $a=Patient::find($id7);
        return $a;
     }
    public function getListSelected()
    {
        include('variable.php');
        $technicieno=Technicien::All();
        $selectedvalides=Selectedvalide::orderBy('etat', 'ASC')->get();
        // $Historiquemnp=Historiquemnp::orderBy('quand', 'DESC')->get();
        return view('profile.gererlisterendezvous',$users,compact('selectedvalides','users','technicieno','techAuth','profiletech','a'));
    }
    public function getIdListFromBDD($id8)
    {   
        $patient = Patient::where("matricule_p","=",$id8)->get();
        $a=new Selected();
        $a->id=$id8;
        $a->nom_sel=$patient[0]->nom_pat;
        $a->prenom_sel=$patient[0]->prenom_pat;
        $a->date_der_visite_sel=$patient[0]->dateSupProchRendez;
        $a->type_visite="Visite pèriodique";


        $a->save();
        return Selected::all();
    }
    public function deleteSelected($id9)
    {
        $fordelete = Selected::find($id9);
        $fordelete->delete();   
        return Selected::all();    
    }
    public function setselected()
    {   
        //Selected::query()->update(['etat' => "en attente"]);

        $selected= Selected::all(); 
        foreach ($selected as  $value) {
            $sv=new Selectedvalide();
            $sv->id=$value->id;
            $sv->nom_sel=$value->nom_sel;
            $sv->prenom_sel=$value->prenom_sel;
            $sv->date_der_visite_sel=$value->date_der_visite_sel;
            $sv->type_visite=$value->type_visite;
            $sv->etat="en attente";
            $sv->etat_visite="Non effectué";
            

            $sv->save();
            
        }   
   
   return Selectedvalide::all();
    }
    public function patientaccepte($matricule)
    {
        $selectedvalides=Selectedvalide::find($matricule);
        $selectedvalides->etat="accepte";
        $selectedvalides->save();

    }
    
    public function patientrefuse($matricule)
    {
        $selectedvalides=Selectedvalide::find($matricule);
        $selectedvalides->etat="annule";
        $selectedvalides->save();

    }

    
}
