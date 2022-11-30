@extends('layouts.master')
@section('content')
<div id="app">
        <h1> Introduire rendez-vous   </h1>
       
    


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                
                    <div  class="compte-back col-lg-12">
                    <form method="GET" action="{{ url('/introduirerendezvousinterface1')}}">
                        
                           <div class="container">
                            
                                <div class="margin-form3 row">
                                        <br><br>
                                        <div class=" margin-form8 col-lg-5">
                                                <label  class="  color-form-compte" for="">Nom d'utilisateur :</label>
                                                    <select style="overflow:auto"  name="nom_utilisateur" class=" form-control form-control-lg">
                                                        
                                                        @foreach ($users as $item)
                                                        @if ( $item->isAdmin==3)
                                                        <option>{{ $item->name }}</option>
                                                        @endif
                                                       
                                                        @endforeach
                                                     
                                                            
                                                          </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="margin-form3 row"><div class=" margin-form8 col-lg-5">
                                        <label  class="  color-form-compte" for="">Type de visite :</label>

                                       <select name="type_visite" class="form-control" id="exampleFormControlSelect1">
                                           <option >Visite d'embauche</option>
                                           <option >Visite systématique</option>
                                           <option >Maladies professionelles</option>
                                       </select>
                                                
                                                
                                               
                                               
                                             
                                                    
                                                 
                                </div></div>
        
                                    
    

                                       

                                    

                                                    <div class="container"> 
                                                            <br>
                                                        <div class="row">  
                                                            <div align="center" style=" margin-left:-5cm">
                                                                <input type="submit" class="btn btn-primary" value="Valider ">
                                                                <button class="btn btn-danger">Annuler</button></div>    
                                                            </div>
                                                        </div>

<br><br><br><br>



                           </div>
                        
                        
                        
                        
                    </div>

            </div>
            
            
        </form>

        
    <!-- debut espace formulaire assisstant -->
        
    
@endsection 