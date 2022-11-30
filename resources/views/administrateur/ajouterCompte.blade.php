@extends('layouts.master')
@section('content')
<div id="app">
        <h1> Welcome Administrateur   </h1>
       
    


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                
                    <div  class="compte-back col-lg-12">
                    <form method="GET" action="{{ url('/introduirecomptecontrol/'.$users[0]->name)}}">
                        
                           <div class="container">
                            
                                <div class="margin-form3 row">
                                        
                                        <div class=" margin-form8 col-lg-5">
                                                <label  class="  color-form-compte" for="">Nom utilisateur :</label>
                                                    <select name="nom_utilisateur" class=" form-control form-control-lg">

                                                        @foreach ($users as $item)
                                                        <option>{{ $item->name }}</option>
                                                        @endforeach
                                                   
                                                            
                                                            
                                                          </select>
                                                    </div>
                                    </div>
                                    <div class="row"></div>
                                    
    

                                        <div class="row"><br></div>




                            <div class="margin-form3 row">
                                <div class="col-lg-3">
                                            <label class="color-form-compte" for="">Matricule :</label>
                                            <input  placeholder="ex:1234567"name="matricule" type="text" class="form-control">
                                        </div>
                                <div class="col-lg-3">
                                    <label class="color-form-compte" for="">Nom :</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div  class="col-lg-3">
                                    <label class="color-form-compte"  for="">prenom :</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
<div class="row"><br></div>

                            <div class=" margin-form3 row">
                                    <div class="col-lg-3">
                                                <label class="color-form-compte" for="">Date naissance :</label>
                                                <input type="date" class="form-control">
                                            </div>
                                    <div class="col-lg-3">
                                        <label class="color-form-compte" for="">Lieu de naissance :</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div  class="col-lg-3">
                                        <label class="color-form-compte" for="">Email :</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>


<div class="row"><br></div>
                                <div class="margin-form2 row">
                                        <div class="col-lg-4">
                                                <label class="color-form-compte" for="exampleFormControlSelect1">Sexe :</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option>Homme</option>
                                                  <option>Femme</option>
                                                 
                                                </select>
                                                </div>
                                        <div class="col-lg-4">
                                          
                                            <label class="color-form-compte" for="exampleFormControlSelect1">Groupage sang :</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                        <option value="">O+</option>   
                                                        <option value="">O-</option> 
                                                        <option value="">A+</option>  
                                                        <option value="">A-</option> 
                                                        <option value="">B+</option> 
                                                        <option value="">B-</option>  
                                                        <option value="">AB+</option> 
                                                        <option value="">AB-</option> 
                                                 
                                                </select>
                                        </div>
                                       
                                    </div>
                                    <div  class="row"><br></div>

                                    <div  class="row">

                                            <div   class=" margin-form1 col-lg-9">
                                                <div  class="form-group">
                                                        <label class="color-form-compte" for="exampleFormControlTextarea1">Adresse :</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>

                                    </div>
                                    
                               <div class="col-lg-11">

                               <div  class="col-lg-">
                                    <label class="color-form-compte" for="">prévilèges :</label>
                                </div>
                            </div>
                                    <div class="row">
                                        <br><br>
                                            
                                            
                                                    <div class=" col-lg-11   ">
                                                            <div class="col-lg-3">
                                                                <div class="form-check form-check-inline">
                                                                        
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Introduire utilisateur</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                    
                                                                </div>
                                                                  <div class="col-lg-4">
                                                                      <div class="form-check form-check-inline">
                                                                       
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Modifier compte utilisateur</label> 
                                                                      </div>
                                                                  </div>
                                            </div>
                                            
            
                                            
                                                    
                                                


                                    </div>


                                   
                                            <div class=" row">
                                            
                                                    <div class=" col-lg-11">
                                                            <div class="col-lg-3">
                                                                <div class="form-check form-check-inline">
                                                                        
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Introduire données patient</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                                  <div class="col-lg-4  ">
                                                                      <div class="form-check form-check-inline">
                                                                         
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Modifier données patient</label>
                                                                      </div>
                                                                  </div>

                                                                  <div class="col-lg-4">
                                                                        <div class="form-check form-check-inline">
                                                                          
                                                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                          <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Afficher données patient</label> 
                                                                        </div>
                                                                    </div>
                                            </div>
      
                                                </div>



                                                <div class=" row">
                                            
                                                        <div class=" col-lg-11">
                                                                <div class="col-lg-3">
                                                                    <div class="form-check form-check-inline">
                                                                            
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Gérer rendez-vous </label>
                                                                            
                                                                            
                                                                          </div>
                                                                </div>
                                                                      <div class="col-lg-4  ">
                                                                          <div class="form-check form-check-inline">
                                                                             
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                            <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Consulter Historique de manipulation</label>
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-lg-4">
                                                                            <div class="form-check form-check-inline">
                                                                              
                                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                              <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Consulter Historique des rendez-vous</label> 
                                                                            </div>
                                                                        </div>
                                                </div>
          
                                                    </div>


                                                    <div class="container"> 
                                                            <br>
                                                        <div class="row">  
                                                            <div align="center" style=" margin-left:-5cm">
                                                                <input type="submit" class="btn btn-primary" value="Valider ">
                                                                <button class="btn btn-danger">Annuler</button></div>    
                                                            </div>
                                                        </div>





                           </div>
                        
                        
                        
                        
                    </div>

            </div>
            
            
        </form>

        
    <!-- debut espace formulaire assisstant -->
        
    
@endsection 