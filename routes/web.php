<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/gestionEmploye','gestionController@listerEmploye');
Route::get('/getListeEmployes','gestionController@getListeEmployes');
//gestionCompteUtilisateur
Route::get('/gestionCompteAssistant','gestionCompteController@index');
Auth::routes();
route::group(['middleware'=>['web','auth']],function()
{   
    route::get('/home','gestionAcceeController@index');
    Route::get('/','gestionUtilisateurController@Authentif' );
    Route::get('/gestioncoremedicale','gestionUtilisateurController@getGestionCoreMedicale');
    Route::get('/introduirecompte', 'gestionUtilisateurController@getIntroduireCompte');
    
    //get email
    Route::get('/getemail/{email}', 'gestionUtilisateurController@getemail');

    route::get('/introduirecomptecontrol','gestionUtilisateurController@introduireUtilisateur' );
    route::get('/formmodification/{id}','gestionUtilisateurController@getFormModif');
    route::post('/modifercomptecontroller/{id2}','gestionUtilisateurController@modifAtBdd');
    route::get('/gestionpatient','gestionPatientController@index');
    route::get('/introduirepatient','gestionPatientController@getIntroduire');
    route::get('/introduirepatientcontrol','gestionPatientController@getIntroduireContr');
    
    //modification patient
    route::get('/formmodificationpatient/{idmodif}','gestionPatientController@modificationpatient');
    //modifier patient controller
    route::post('/modifierepatientcontrol/{matricule}','gestionPatientController@modifierepatientcontrol');
    
    //afficher donnée patient
    route::get('/afficherpatient/{matricule}','gestionPatientController@afficherpatient');
    
    //gestion rendez-vous
    route::get('/gestionrendezvous','gestionRdvController@index');
    route::get('/introduirerendezvous','gestionRdvController@introduirerendezvous');
    route::get('/introduirerendezvousinterface1','gestionRdvController@introduirerendezvousinterface1');


    //supprimer la liste
    route::get('/viderlalistedesrdv','gestionRdvController@viderlalistedesrdv');
    //setachev
    route::get('/setachev/{m}','gestionRdvController@setachev');
    //setNonAchev
    route::get('/setNonAchev/{m}','gestionRdvController@setNonAchev');
    //setReporte
    route::get('/setReporte/{m}','gestionRdvController@setReporte');


    //suppression corp médicale
    route::get('/gestioncoremedicale/suppression/{id3}','gestionUtilisateurController@destroy');
   //getListeTo ARCHIve core medical
   route::get('/getNameToSupp/{id3}','gestionUtilisateurController@getNameToSupp');

    route::get('/gestionpatient/suppression/{id4}','gestionPatientController@destroy');
  //  route::get('/getlisteredezvous','gestionRendezVousController@getList');
  
  //get name to supp patient
  route::get('/namePatToSupp/{id4}','gestionPatientController@namePatToSupp');
 

    route::get('/getpatient/{id7}','gestionRendezVousController@getpatient');
    route::get('/getlistepatients','gestionRendezVousController@getList');
    route::get('/gererlalisterendezvous','gestionRendezVousController@getListSelected');   
    route::get('/getIdListFromBDD/{id8}','gestionRendezVousController@getIdListFromBDD');
    
    //supprimer de la liste selected
    route::get('/supprimerleselectione/{id9}','gestionRendezVousController@deleteSelected');
   
    // set etat =en attente
    route::get('/setselected','gestionRendezVousController@setselected');
    //patient ACCEPTE rendez vous
    route::get('/patientaccepte/{matricule}','gestionRendezVousController@patientaccepte');
    //patient refuse
    route::get('/patientrefuse/{matricule}','gestionRendezVousController@patientrefuse');

    //historique de manipulation
    route::get('/historiquedemanipulation','historiqueManipulationsController@index');

    //historique des rendez-vous
    route::get('/historiquedesrendezvous','historiqueRdvController@index');

});

//vueJS LISTE TECHNICIENS
 route::get('/getListeTechniciens/{id2}','listTechnicienController@getList');
 route::get('/prevelege/{id2}','listTechnicienController@prevelege');










