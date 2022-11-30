<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Technicien;
use App\Profile;

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