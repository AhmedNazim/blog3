@extends('layouts.master')
@section('content')

  
<h1> Gestion patients  </h1>
       
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
                                        <div class="col-lg-2">
                                          
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group ">
                                             
                                                <input  type="text" id="myInput" class="form-control" placeholder="Rechercher" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                          </div>
                                          @foreach ($profiletech as $item2)
                                          @if ($item2->int_donn_pat==2)
                                          
                                          <div class="col-lg-4">
                                              <div class="input-group ">
                                                 
                                             <a href="/introduirepatient" class="btn btn-primary"><b>+</b> Compléter compte </a>
                                              </div>
                                            </div>
                                          @else
                                              <div></div>
                                          @endif
                                              
                                               
                                           @endforeach
                                          
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


                                                        <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0"
                                  width="100%">
                                  <thead>
                                      <tr>
                                                           
                                          <th colspan="6"> <div align="center"> Liste des patients </div> </th>
                                          

                          </tr>
                                      <tr>
                                        <th width="10%" > <b>Matricule</b> </th>
                                        <th width="20%">Nom</th>
                                        <th width="15%" >Prénom</th>
                                        <th width="8%" >Groupage</th>
                                        <th width="20%" >E-mail</th>
                                        <th width="20%" > <div align=""> Action</div></th>
                                      </tr>
                                      </thead>
                                      <tbody id="myTable">
                                      @foreach ($patients as $item)
                                      <tr>
                                        @if ($item->deleted_at==null)
                                            
                                        
                                          <td> <b>{{$item->matricule_p}}</b> </td>
                                          <td>{{$item->nom_pat}}</td>
                                          <td>{{$item->prenom_pat}}</td>
                                          <td>{{$item->groupage_pat}}</td>
                                          <td>{{$item->email_emp_pat}}</td>
                                          <td>
                                            
                                            
                                            <div align="" class="col-lg-10">
                                             <div align="center">
                                             
                                               
                                                
                                          
                                            <div class="col-lg-4">
                                               
                                            @foreach ($profiletech as $item2)
                                              @if ($item2->afficher_donn_pat==2)

                                
                                             
                                             
                                                  

                                                                                                                       
  <a  @click="printPatient({{$item->matricule_p}})" style="font-size:10px;background-color:#0793BD;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
      <i  class="fa fa-eye"></i>
  </a> &nbsp;
  
  
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
<div class="col-lg-4">
                                              @foreach ($profiletech as $item2)
                                              @if ($item2->modif_donn_pat==2)
                                             <a  href="{{ url('formmodificationpatient/'.$item->matricule_p)}}"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                              @else
                                              <div></div>
                                          @endif
                                          @endforeach
                                              </div>

<div class="col-lg-4"> 
    @foreach ($profiletech as $item2)
    
    @if ($item2->arch_comp_pat==2)  
    <button @click="idToSuppPat({{$item->id}})" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-close" style="font-size:11px"></i></button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-sm">
        <br><br><br><br><br><br><br><br><br>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
            <h4 class="modal-title">Archiver compte </h4>
          </div>
          <div class="modal-body">
              voulez-vous vraimment supprimer <b>@{{namePatToSupp}}</b>  ?
              
           
          </div>
          <div class="modal-footer">
              <form method="get" :action="urlToSuppPat">  
                <input type="submit" class="btn btn-danger" value="Supprimer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </form> 
            
          </div>
        </div>
      </div>
    </div>
    @else
        <div></div>
        @endif
     
        @endforeach 
  </div>
</div>
                                          
                                          
                                          
                                          @else
                                          <div></div>
                                      @endif
                                      @endforeach
                                      
                                        </div>
                                        
                                        
                                      </td>
                                      @endif
                                      </tr>
                                     
                                        
                                      @endforeach
                                      </tbody>
                                      </table>
                                
                                       
                                       </div>
                                        </div>


                            <div class="margin-form6 row">
                                <div class="col-lg-3">
                                        
                                        </div>
                                <div class="col-lg-3">
                                    
                                </div>
                                </div>
                                
                            </div>
<div class="row"><br><br></div>
<div class="row">

        
</div>
      






                           </div>
                        
                        
                        </form>
                        
                    

            </div>

            

    <!-- debut espace formulaire assisstant -->
        
    
@endsection