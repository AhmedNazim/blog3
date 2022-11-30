@extends('layouts.masterPatient')
@section('content')

  
        <h1>    </h1>
       
        <h2>

        </h2>
        <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                   
                <div id="app3">
                    <div  class="compte-back col-lg-12">
                      @if ($trouv=="oui")
                      
                      <div class="container">
                            <div class="col-md-2">

                          </div>
                          <div class="col-md-6">
                              <div  class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Notification pour votre rendez-vous</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                   Bonjour <b>{{$userPat[0]->nom_pat." ".$userPat[0]->prenom_pat  }}</b>
                                   <br>
                                         Veuillez confirmer votre <b>rendez-vous du Lundi 01/07/2019</b> 
                                  
                                    </div>
                                    <div class="modal-footer">
                                      <a @click="patientaccepte({{$userPat[0]->matricule_p}})" class="btn btn-primary" >Accepter</a>
                                      <a @click="patientrefuse({{$userPat[0]->matricule_p}})" class="btn btn-light">Annuler</a>
                              
                                    </div>  
                                </div>  
                          </div>
                      </div>
                    
                    
                    @else
                    <div class="col-md-2">

                        </div>
                        <div class="col-md-6">
                            <div  class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Notification pour votre rendez-vous</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        Bonjour <b>{{$userPat[0]->nom_pat." ".$userPat[0]->prenom_pat  }}</b>,
                                        <br>
                                             <b>Vous n'avez pas de rendez-vous pour le moment.</b> 
                                        
                                  </div>
                                  <div class="modal-footer">
                                    
                                  </div>  
                              </div>  
                        </div>
                    </div>
                   
                      @endif
                

<div class="row">
            

</div>

      






                           
                        
                        
                        
                        
                    

            </div>
            </div>
</div>
            

    <!-- debut espace formulaire assisstant -->
        
    
@endsection