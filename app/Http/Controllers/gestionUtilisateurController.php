<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technicien;
use App\User;
use App\Profile;
use App\Patient; 
use App\Selectedvalide; 
use App\Historiquemnp; 


use Auth;

class gestionUtilisateurController extends Controller
{
    //
    
    public function introduireUtilisateur(Request $request )
    {
        
        $message="";
        $technicien = new Technicien();
        $testing=Technicien::find($request->input('matricule'));
        if($testing)
        {
            $message= "Veuillez bien  insérer correctement les données*";
            $users= User::All();
         $techniciens=Technicien::All();
          $a=0;
         
         //la le technicien authentifier
      $techAuth=Technicien::where("id_user","=",Auth::user()->id)->get();
       
      
      //matricule technicien authentifier    
      foreach($techAuth as $item)
        {
            $a=$item->matricule;
        }
        
        //rechercher profile du technicien authentifier via la matricule trouvée
      $profiletech= Profile::where("matricule_tech","=",$a)->get();
 
      
      $technicieno=Technicien::All();
      return view('profile.introduireCompte',compact('message','users','techAuth','profiletech','a'));

        }
        $userNameForm= $request->input('nom_utilisateur');
        $user1 = User::where("name","=",$userNameForm)->get();
        $technicien->matricule=$request->input('matricule');
        $technicien->id=$request->input('matricule');
        $technicien->id_user1=$user1[0]->id;
        
        //zyada id_user mamchatch
        $technicien->id_user=$user1[0]->id;
        //
        $technicien->nom_tech=$request->input('nom');
        $technicien->prenom_tech=$request->input('prenom');
        $technicien->date_naiss=$request->input('date_naissance');
        $technicien->lieu_naiss=$request->input('lieu_naissance');
        $technicien->sexe=$request->input('sexe');
        $technicien->groupage=$request->input('groupage');
        $technicien->adresse=$request->input('adresse');
        $technicien->email_tech=$user1[0]->email;
        $technicien->save();
        
        //partie profile
        $profile= new Profile();
        $profile->id=$request->input('matricule');
        $profile->matricule_tech=$request->input('matricule');


if($request->has('int_cor_med'))
{
    $profile->int_cor_med=2;
}

if($request->has('modif_cor_med'))
{
    $profile->modif_cor_med=2;
}

if($request->has('arch_cor_med'))
{
    $profile->arch_cor_med=2;
}
if($request->has('affic_donn_med'))
{
    $profile->affic_donn_med=2;
}
if($request->has('int_donn_pat'))
{
    $profile->int_donn_pat=2;
}
if($request->has('modif_donn_pat'))
{
    $profile->modif_donn_pat=2;
}
if($request->has('arch_comp_pat'))
{
    $profile->arch_comp_pat=2;
}
if($request->has('afficher_donn_pat'))
{
    $profile->afficher_donn_pat=2;
}
if($request->has('gerer_rendez'))
{
    $profile->gerer_rendez=2;
}
if($request->has('cons_his_man'))
{
    $profile->cons_his_man=2;
}
if($request->has('cons_his_rendez'))
{
    $profile->cons_his_rendez=2;
}
if($request->has('rechercher'))
{
    $profile->rechercher=2;
}
    //historique manip
    $Historiquemnp = new Historiquemnp();
    $Historiquemnp->matricule= Auth::user()->id ;
    $Historiquemnp->qui= Auth::user()->name ;
    $Historiquemnp->quoi= "Compléter compte" ;
    $Historiquemnp->aqui=$request->input('nom');;
    $Historiquemnp->quand= date("Y-m-d h:i:s");
    $Historiquemnp->save();
    //end manip 



        $profile->save();
      $aa= User::find($user1[0]->id);
      $aa->isAdmin=2;
      $aa->save();
       
        
         $users= User::All();
         $techniciens=Technicien::All();
          $a=0;
         
         //la le technicien authentifier
      $techAuth=Technicien::where("id_user","=",Auth::user()->id)->get();
       
      
      //matricule technicien authentifier    
      foreach($techAuth as $item)
        {
            $a=$item->matricule;
        }
        
        //rechercher profile du technicien authentifier via la matricule trouvée
      $profiletech= Profile::where("matricule_tech","=",$a)->get();
 
      
      $technicieno=Technicien::All();
      return view('profile.gestioncoremedicale',$users,compact('message','technicieno','techAuth','profiletech','a'));

           
        
    

        
    }

    public function getGestionCoreMedicale()
    {
        $message="";
        $users= User::All();
        $techniciens=Technicien::All();
         $a=0;
        
        //la le technicien authentifier
     $techAuth=Technicien::where("id_user","=",Auth::user()->id)->get();
      
     
     //matricule technicien authentifier    
     foreach($techAuth as $item)
       {
           $a=$item->matricule;
       }
       
       //rechercher profile du technicien authentifier via la matricule trouvée
     $profiletech= Profile::where("matricule_tech","=",$a)->get();

     
     $technicieno=Technicien::All();
    
            if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->int_cor_med==2 || $profiletech[0]->modif_cor_med==2 || $profiletech[0]->arch_cor_med==2 || $profiletech[0]->affic_donn_med==2  ) )
            return view('profile.gestioncoremedicale',$users,compact('message','technicieno','techAuth','profiletech','a'));
            else
            return view('errors.errorAutorise');
        }
    public function Authentif()
    {
        
        
        
            if(Auth::user()->isAdmin==1)
            {
                //la liste des users
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
             
    
                return view('administrateur.homeAdmin',$users,compact('techAuth','profiletech','a'));
                
            }
           
            if(Auth::user()->isAdmin==2)
            {
                 //la liste des users
              $users=User::All();
    
              //la le technicien authentifier
           $techAuth=Technicien::where("id_user","=",Auth::user()->id)->get();
            
           $a=0;
           //matricule technicien authentifier    
           foreach($techAuth as $item)
             {
                 $a=$item->matricule;
             }
             
             //rechercher profile du technicien authentifier via la matricule trouvée
           $profiletech=Profile::where("matricule_tech","=",$a)->get();
          
    
             return view('technicien.homeTechnicien',$users,compact('techAuth','profiletech'));
                
            }
            if(Auth::user()->isAdmin==3)
            {
                  $userPat=Patient::where("id_user_pat","=",Auth::user()->id)->get();   
                  $matricule=$userPat[0]->matricule_p;
                  $search= Selectedvalide::find($matricule);

                  if($search)
                      $trouv="oui";
                  else
                      $trouv="non";

               
               return view('patient.homePatient',compact('users','trouv','userPat'));
             
                
            }
            if(Auth::user()->isAdmin!=3 || Auth::user()->isAdmin!=2 ||Auth::user()->isAdmin!=1 )
            {
                $users=User::All();
                return view('anonnyme.anonnyme',$users);
                
            }
    
        
    }

    public function getIntroduireCompte()
    {
        $message="";
    //la liste des users
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


  
   if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->int_cor_med==2 ) )
   return view('profile.introduireCompte',compact('message','users','techAuth','profiletech','a'));
   else
   return view('errors.errorAutorise');
    }


    public function getForm()
    {
        return view('anonnyme.anonnyme');
    }
    public function getFormModif($id)
    {
//la liste des users
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

//spéciale pour la modification
$techToModif= Technicien::where("matricule","=",$id)->get();
$profileToModif=Profile::where("matricule_tech","=",$techToModif[0]->matricule)->get();



if((Auth::user()->isAdmin==1 || Auth::user()->isAdmin==2) && ($profiletech[0]->modif_cor_med==2 ) )
return view('profile.formmodification',compact('id','profileToModif','techToModif','users','techAuth','profiletech','a'));
else
return view('errors.errorAutorise');         
         
          
          
    }
    public function modifAtBdd(Request $request, $id2)

    {   

        
       // $tech_trouv=Technicien::where("matricule","=",$id2)->first();
       
        $tech_trouv=Technicien::find($id2);
        
        $tech_trouv->matricule=$request->input('matricule');
        $tech_trouv->nom_tech=$request->input('nom');
        $tech_trouv->prenom_tech=$request->input('prenom');
        $tech_trouv->date_naiss=$request->input('date_naissance');
        $tech_trouv->lieu_naiss=$request->input('lieu_naissance');
        $tech_trouv->sexe=$request->input('sexe');
        $tech_trouv->groupage=$request->input('groupage');
        $tech_trouv->adresse=$request->input('adresse');
        $tech_trouv->save();

        /* modif */
        $Profile=Profile::find($id2);
        $Profile->id=$request->input('matricule');
        $Profile->matricule_tech=$request->input('matricule');
        $Profile->int_cor_med=1;
        $Profile->modif_cor_med=1;
        $Profile->arch_cor_med=1;
        $Profile->affic_donn_med=1;

        $Profile->int_donn_pat=1;
        $Profile->modif_donn_pat=1;
        $Profile->arch_comp_pat=1;
        $Profile->afficher_donn_pat=1;
        $Profile->gerer_rendez=1;
        $Profile->cons_his_man=1;
        $Profile->cons_his_rendez=1;
        
       
        if($request->has('int_cor_med'))
        {
            $Profile->int_cor_med=2;
           
        }

        if($request->has('modif_cor_med'))
        {
            $Profile->modif_cor_med=2;
            
        }

        if($request->has('arch_cor_med'))
        {
            $Profile->arch_cor_med=2;
           
        }
        if($request->has('affic_donn_med'))
        {
            $Profile->affic_donn_med=2;
          
        }
        if($request->has('int_donn_pat'))
        {
            $Profile->int_donn_pat=2;
          
        }
        if($request->has('modif_donn_pat'))
        {
            $Profile->modif_donn_pat=2;
          
        }
        if($request->has('arch_comp_pat'))
        {
            $Profile->arch_comp_pat=2;
          
        }
        if($request->has('afficher_donn_pat'))
        {
            $Profile->afficher_donn_pat=2;
          
        }
        if($request->has('gerer_rendez'))
        {
            $Profile->gerer_rendez=2;
          
        }
        if($request->has('cons_his_man'))
        {
            $Profile->cons_his_man=2;
          
        }  
        if($request->has('cons_his_rendez'))
        {
            $Profile->cons_his_rendez=2;
          
        }
        /* modif */
        $Profile->save();

        

    $Historiquemnp = new Historiquemnp();
    $Historiquemnp->matricule= Auth::user()->id ;
    $Historiquemnp->qui= Auth::user()->name ;
    $Historiquemnp->quoi= "Modifier compte" ;
    $Historiquemnp->aqui=$request->input('nom');;
    $Historiquemnp->quand= date("Y-m-d h:i:s");
    $Historiquemnp->save();



        return redirect('/gestioncoremedicale');
 

    }
    public function getemail($email)
    {
            $a=User::where("name","=",$email)->get();
            return $a[0]->email;
    }
    public function destroy($id3)
    {   
        $technicien=Technicien::find($id3);
        $technicien->deleted_at=date('Y-m-d H:i:s');
        $technicien->save();
        $profile =Profile::find($id3);
        $profile->deleted_at=date('Y-m-d H:i:s');
    //manip 
    $Historiquemnp = new Historiquemnp();
    $Historiquemnp->matricule= Auth::user()->id ;
    $Historiquemnp->qui= Auth::user()->name ;
    $Historiquemnp->quoi= "Archiver compte" ;
    $Historiquemnp->aqui=$technicien->nom_tech;     
    $Historiquemnp->quand= date("Y-m-d h:i:s");
    $Historiquemnp->save();
        $profile->save();
        return redirect('/gestioncoremedicale');
    }
    public function getNameToSupp($id3)
    {
        $a=Technicien::find($id3);
        return $a->nom_tech." ".$a->prenom_tech;
    }
}
