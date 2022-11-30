@extends('layouts.master')
@section('content')

  
        <h1> Gérer la liste des rendez-vous    </h1>
       
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
                                        
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                             
                                                <input  type="text" id="myInput" class="form-control" placeholder="Rechercher" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                          </div>
                                          @foreach ($profiletech as $item2)
                                          @if ($item2->int_cor_med==2)
                                          
                                          <div class="col-lg-3">
                                              <div class="input-group ">
                                                 
                                             <a href="/introduirerendezvous" class="btn btn-primary"><b>+</b> Introduire un rendez-vous </a>
                                              </div>
                                         </div>
                                          @else
                                              <div></div>
                                          @endif
            
                                          @endforeach
                                          <div class="col-lg-3">
                                              <div class="input-group ">
                                                 
                                             <a href="/gestionrendezvous" class=" btn btn-primary"> Générer les rendez-vous  </a>
                                              </div>
                                         </div>
                                            <div class="col-lg-2">
                                              <div class="input-group ">
                                                 
                                             {{-- <a href="/viderlalistedesrdv" @clik="viderlalistedesrdv()" class=" btn btn-danger"><b>-</b> Vider la  liste </a> --}}
                                             <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-close" style="font-size:13px"> </i>&nbsp; Vider la liste</button>

                                             <!-- Modal -->
                                             <div class="modal fade" id="myModal" role="dialog">
                                               <div class="modal-dialog modal-sm">
                                                 <br><br><br><br><br><br><br><br><br>
                                                 <div class="modal-content">
                                                   <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                     
                                                     <h4 class="modal-title"> Vider la liste</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                     Etes-vous sûr de vouloir supprimer cette liste ?
                                                       
                                                      
                                                   </div>
                                                   <div class="modal-footer">
                                                       <form method="get" action="/viderlalistedesrdv">  
                                                         <a  href="/viderlalistedesrdv" class="btn btn-danger" >Vider</a>
                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                       </form> 
                                                     
                                                   </div>
                                                 </div>
                                               </div>
                                             </div>
                                            
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


                                                <div class="col-lg-10 border border-dark" style="height:9cm; overflow:auto;">
                                
                                
                                                        <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0" width="100%">
                                                        <thead>
                                                     <tr>
                                                           
                                                        
                                                                    <th colspan="8"> <div align="center">Liste des patients concérnés par la prochaine visite</div> </th>
                                                                    

                                                    </tr>
                                      
                                      <tr>
                                        <th width="5%"> <b>Matricule</b> </th>
                                        <th width="10%">Nom</th>
                                        <th width="10%">Prénom</th>
                                        <th width="5%">Type visite</th>
                                        <th width="20">Date supposée du prochain rendez-vous</th>
                                        <th width="20">Etat du rendez-vous</th>
                                        <th width="7%">Etat de la visite</th>

                                        <th width="20"> <div align=""> Action</div></th>
                                      </tr>
                                      </thead>
                                      <tbody id="myTable">
                                      @foreach ($selectedvalides as $item)
                                      <tr>
                                          <td> <b>{{$item->id}}</b> </td>
                                          <td>{{$item->nom_sel}}</td>
                                          <td>{{$item->prenom_sel}}</td>
                                          <td>{{$item->type_visite}}</td>
                                          <td>{{$item->date_der_visite_sel }}</td>
                                      <td>{{$item->etat }}</td>
                                      <td>{{$item->etat_visite}}</td>
                                      
                                      <td>
                                      <button @click="setachev({{$item->id}})" style="background:rgba(43, 63, 82, 0.9); color:aliceblue;" class="btn btn-light btn-sm">Effectué</button> 
                                              <button @click="setNonAchev({{$item->id}})" style="background:#f8ac59; color:aliceblue;" class="btn btn-light btn-sm">Non effectué</button> 
                                              <button  @click="setReporte({{$item->id}})" style="background:rgba(43, 63, 82, 0.9); color:aliceblue;"class="btn btn-light btn-sm">Reporté</button>  
                                              
                                    </td>
                                    </tr>
                                    @endforeach
                                      </tbody>
                                      </table>
                                      </div>
                                        </div>
                                      <!-- tableau 1 -->
<br>
                                      



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