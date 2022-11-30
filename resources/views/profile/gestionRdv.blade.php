@extends('layouts.master')
@section('content')

  
<h1> Gestion rendez-vous  </h1>
       
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
                   
                <div id="app2">
                    <div  class="compte-back col-lg-12">
                        <form action="">
                        
                           <div class="container">
     
                                    
                                    <div style="margin-top:20px;" class="row">
                                      <div class="col-lg-10">
                                        
                                        <div class="col-lg-5">
                                            <div class="form-group ">
                                             
                                                <input  type="text" id="myInput" class="form-control" placeholder="Rechercher" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                          </div>
                                         
                                          
                                          <div class="col-lg-3">
                                              <div class="input-group ">
                                                 
                                             <a href="/introduirerendezvous" class="btn btn-primary"><b>+</b> Introduire un rendez-vous </a>
                                              </div>
                                         </div>
                                          
                                          <div class="col-lg-2">
                                              <div class="input-group ">
                                                 
                                             <a href="/gererlalisterendezvous" class=" btn button-waring"><b>+</b> Gérer la liste de rendez-vous </a>
                                              </div>
                                         </div>
                                          
                                      </div>
                                      
                                          <!--
                                          <div class=" margin-form4 col-lg-5">
                                              <label  class="  color-form-compte" for="">Nom utilisateur :</label>
                                                  <select class=" form-control form-control-lg">
                                                          <option>Racim</option>
                                                          <option>Lylia</option>
                                                          
                                                        </select>
                                                  </div> 
                                          -->
                                      
                                    </div>
                                        <div class="row"><br></div>
                                        <div  style="margin-left:-1cm" class="row">


                                                <div class="col-lg-10 border border-dark" style="height:7cm; overflow:auto;">
                                
                                
                                                        <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0" width="100%">
                                                        <thead>
                                                     <tr>
                                                           
                                                                    
                                                                    <th colspan="7"> <div align="center">Liste des patients consernés par les visites périodiques</div> </th>
                                                                    

                                                    </tr>
                                      
                                      <tr>
                                        <th  width="10%" > <b>Matricule</b> </th>
                                        <th  width="20%" >Nom</th>
                                        <th  width="20%" >Prénom</th>
                                        <th  width="15%" >Date supposée du prochain rendez-vous</th>
                                        <th  width="15%" >Nombre de visites par an</th>
                                        <th  width="20%" > <div align=""> Action</div></th>
                                      </tr>
                                      </thead>
                                      <tbody id="myTable">
                                      @foreach ($patients as $item)
                                      <tr>
                                          <td> <b>{{$item->matricule_p}}</b> </td>
                                          <td>{{$item->nom_pat}}</td>
                                          <td>{{$item->prenom_pat}}</td>
                                          <td>{{$item->dateSupProchRendez    }}</td>
                                      <td> {{$item->nbrVA }}</td>
                                          <td>
                                            
                                            
                                            <div align="" class="col-lg-8">
                                             <div align="center">
                                             <div  class="col-lg-2">
                                             
                                             <button  @click="getIdListFromBDD({{$item->id}})"  type="button"  class="bt-color btn  btn-sm"><i  class="fa fa-check" style="font-size:11px"></i></button>
                                            
                                              </div>
                                              <div class="col-lg-2">
                                          
                                            <div class="col-lg-2">
                                               
                                            
                                
                                
                                             
                                             
                                                  
                                     
                                <a  @click="printPatient({{$item->matricule_p}})" style="font-size:11px;background-color:#0793BD;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
      <i  class="fa fa-eye"></i>
  </a>
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Données patient </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
          <div  class="modal-body">
            
           <table>
             <tr >
          
              <td width="50%"> <b>Matricule :</b> </td>
             <td width="50%">  @{{afficherpatient.matricule_p}} </td>
              
             </tr>
             <tr>
          
                <td> <b>Nom :</b> </td>
                <td> @{{afficherpatient.nom_pat}} </td>
                
               </tr>
               <tr>
          
                  <td> <b>Prénom :</b></td>
                  <td> @{{afficherpatient.prenom_pat}} </td>
                  
                 </tr>
                 <tr>
          
                    <td>  <b>Adresse :</b> </td>
                    <td> @{{afficherpatient.adresse_pat}} </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>date de naissance :</b> </td>
                    <td>  @{{afficherpatient.date_naiss_pat}}   </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>lieu de naissance :</b> </td>
                    <td> @{{afficherpatient.lieu_naiss_pat}}   </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>Email :</b> </td>
                    <td> @{{afficherpatient.	email_emp_pat}}  </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>Sexe : </b> </td>
                    <td> @{{afficherpatient.sexe_pat}}  </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>groupage :</b></td>
                    <td>@{{afficherpatient.	groupage_pat}}   </td>
                    
                   </tr>
                                
                                </tr>
                                </table>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                                </div>
                                
                                </div>
                                          
                                          
                                          
                                          
                                      
                                        </div>
                                
                                        </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                      </tbody>
                                      </table>
                                      </div>
                                        </div>
                                      <!-- tableau 1 -->
<br>
                                      <div  style="margin-left:-1cm" class="row">
                                            <div class="col-lg-10 border border-dark" style="height:7cm; overflow:auto;">
        
                                                <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0" width="100%">
                                                    <thead>
                                                 <tr>
                                                       
                                                               
                                                                <th colspan="5"><div align="center">Liste des patients séléctionés</div></th>
                                                               
                                                                <th > <a @click="setselected()" class="btn btn-primary">Valider</a></th>

                                                </tr>
                                  
                                  <tr>
                                    <th width="10" > <b>Matricule</b> </thwidh>
                                    <th width="25">Nom</th>
                                    <th width="30">Prénom</th>
                                    <th width="20">Date supposée du prochain rendez-vous</th>
                                    <th width="25"> Type de visite</th>
                                    <th width="20%"> <div align=""> Action</div></th>
                                  </tr>
                                  </thead>
                                  <tbody id="">
                                 
                                  <tr v-for="item in ListFromBDD">
                                    
                                      <td> <b>@{{item["id"]}} </b> </td>
                                      <td>@{{item["nom_sel"]}}</td>
                                      <td>@{{item["prenom_sel"]}}</td>
                                      <td>@{{item["date_der_visite_sel"]}}</td>
                                      <td  >@{{item["type_visite"]}} </td>
                                      <td>
                                        
                                        
                                         
                                         <div  class="col-lg-3">
                                         
                                         <button @click="selectedDelete(item['id'])" type="button" class=" btn-danger btn  btn-sm"><i  class="fa fa-close" style="font-size:15px"></i></a>
                                         
                                          </div>
                                         
                                          
                                        <div class="col-lg-4">
                                           
                                       
                            
                            
                                         
                                         
                                              
                            
                                                                                           
                            <a  @click="printPatient({{$item->matricule_p}})" style="font-size:11px;background-color:#0793BD;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
      <i  class="fa fa-eye"></i>
  </a>
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Données patient </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
          <div  class="modal-body">
            
           <table>
             <tr >
          
              <td width="50%"> <b>Matricule :</b> </td>
             <td width="50%">  @{{afficherpatient.matricule_p}} </td>
              
             </tr>
             <tr>
          
                <td> <b>Nom :</b> </td>
                <td> @{{afficherpatient.nom_pat}} </td>
                
               </tr>
               <tr>
          
                  <td> <b>Prénom :</b></td>
                  <td> @{{afficherpatient.prenom_pat}} </td>
                  
                 </tr>
                 <tr>
          
                    <td>  <b>Adresse :</b> </td>
                    <td> @{{afficherpatient.adresse_pat}} </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>date de naissance :</b> </td>
                    <td>  @{{afficherpatient.date_naiss_pat}}   </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>lieu de naissance :</b> </td>
                    <td> @{{afficherpatient.lieu_naiss_pat}}   </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>Email :</b> </td>
                    <td> @{{afficherpatient.	email_emp_pat}}  </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>Sexe : </b> </td>
                    <td> @{{afficherpatient.sexe_pat}}  </td>
                    
                   </tr>
                   <tr>
          
                    <td> <b>groupage :</b></td>
                    <td>@{{afficherpatient.	groupage_pat}}   </td>
                    
                   </tr>
           </table>
        </div>
        </div>
        <div style="background-color:rgba(43, 63, 82, 0.9);"  class="modal-footer rounded">
            <form method="post" action="/gestioncoremedicale/suppression/listeTech.matricule">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              
            </form>
        </div>
      </div>
    </div>

</div>
                            
                            </tr>
                            </table>
                            </div>
                            </div>
                            
                            </div>
                            </div>
                            
                            
                                      
                                      
                                      
                                      
                                </div>
                                    
                            
                                
                                </td>
                                </tr>
                                
                                  </tbody>
                                  </table>
                                             </div>   
                                       
                                    </div>



                                       </div>
                                       
                                        </div>

<br>
                           
<div class="row"><br><br></div>
<div class="row">

        
</div>
<br>
      






                           </div>
                        
                        
                        </form>
                        
                    

            </div>

            

    <!-- debut espace formulaire assisstant -->
        
    
@endsection