@extends('layouts.master')
@section('content')

  
        <h1> Historique des manipulations  </h1>
       
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
     
                                    
                           <div class="col-lg-5">
                                            <div class="form-group ">
                                             
                                                <input  type="text" id="myInput" class="form-control" placeholder="Rechercher" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                          </div>
                                         <br>
                                         <br/>
                                         <br/>
                              
                                   

                                        <div class="row"><br></div>

                                        <div  style="margin-left:-1cm" class="row">


                                                <div class="col-lg-10 border border-dark" style="height:7cm; overflow:auto;">


                                                        <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0"
                                  width="100%">
                                  <thead>
                                      <tr>
                                                           
                                          {{-- <th width="10%"></th> --}}
                                          

                          </tr>
                                      <tr>
                                        {{-- <th> <b>Matricule</b> </th> --}}
                                        <th width="20%" >Qui</th>
                                        <th width="20%">Quoi</th>
                                        <th width="20%">A qui</th>
                                        <th width="20%"> <div align=""> Quand</div></th>
                                      </tr>
                                      </thead>
                                      <tbody id="myTable">
                                     
                                      
                                     @foreach ($Historiquemnp as $item)
                                         <tr>
                                         <td> {{$item->qui }}</td>
                                         <td> {{$item->quoi }}</td>
                                         <td> {{$item->aqui }}</td>
                                         <td> {{$item->quand }}</td>
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