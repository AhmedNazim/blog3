@extends('layouts.master')
@section('content')
<div id="app2">
        <h1> Compléter compte corps médical   </h1>
     
    


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
              <span style="color:red"> {{$message}}</span> 
                <div id="app2">
                        {{-- @{{mail}} --}}
                    <div  class="compte-back col-lg-12">
                    <form method="GET" action="{{ url('/introduirecomptecontrol')}}">
                        
                           <div class="container">
                            
                                <div class="margin-form3 row">
                                        
                                        <div class=" margin-form8 col-lg-5">
                                               
                                      
                                                <label  class="  color-form-compte" for="">Nom d'utilisateur :</label>
                                                    <select v-model="message" @click="getEmail(message)" style="overflow:auto" id="myDiv" ref="myDiv"  name="nom_utilisateur" class=" form-control form-control-lg">
                                                        

                                                            @foreach ($users as $item)
                                                            @if ( $item->isAdmin!=1 && $item->isAdmin!=2 && $item->isAdmin!=3)
                                                            <option > {{ $item->name }}</option>
                                                            @endif
                                                           
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
                                    <input type="text" name="nom" class="form-control">
                                </div>
                                <div  class="col-lg-3">
                                    <label class="color-form-compte"  for="">Prénom :</label>
                                    <input type="text" name="prenom" class="form-control">
                                </div>
                            </div>
<div class="row"><br></div>

                            <div class=" margin-form3 row">
                                    <div class="col-lg-3">
                                                <label class="color-form-compte" for="">Date de naissance :</label>
                                                <input type="date" name="date_naissance" class="form-control">
                                            </div>
                                    <div class="col-lg-3">
                                        <label class="color-form-compte" for="">Lieu de naissance :</label>
                                        <input type="text" name="lieu_naissance" class="form-control">
                                    </div>
                                    <div  class="col-lg-3">
                                        <label class="color-form-compte" for="">E-mail :</label>
                                        <input type="text" :value="mail" disabled="disabled" name="email" class="form-control">
                                    </div>
                                </div>


<div class="row"><br></div>
                                <div class="margin-form2 row">
                                        <div class="col-lg-4">
                                                <label class="color-form-compte" for="exampleFormControlSelect1">Sexe :</label>
                                                <select name="sexe" class="form-control" id="exampleFormControlSelect1">
                                                  <option>Homme</option>
                                                  <option>Femme</option>
                                                 
                                                </select>
                                                </div>
                                        <div class="col-lg-4">
                                          
                                            <label class="color-form-compte" for="exampleFormControlSelect1">Groupage :</label>
                                                <select name="groupage" class="form-control" id="exampleFormControlSelect1">
                                                        <option value="O+">O+</option>   
                                                        <option value="O-">O-</option> 
                                                        <option value="A+">A+</option>  
                                                        <option value="A-">A-</option> 
                                                        <option value="B+">B+</option> 
                                                        <option value="B-">B-</option>  
                                                        <option value="AB+">AB+</option> 
                                                        <option value="AB-">AB-</option> 
                                                 
                                                </select>
                                        </div>
                                       
                                    </div>
                                    <div  class="row"><br></div>

                                    <div  class="row">

                                            <div   class=" margin-form1 col-lg-9">
                                                <div  class="form-group">
                                                        <label class="color-form-compte" for="exampleFormControlTextarea1">Adresse :</label>
                                                        <textarea name="adresse" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>

                                    </div>
                                    
                               <div class="col-lg-11">

                               <div  class="col-lg-">
                                    <label class="color-form-compte" for="">Privilèges :</label>
                                </div>
                            </div>
                                    <div class="row">
                                        <br><br>
                                            
                                            
                                                    <div class=" col-lg-11   ">
                                                            <div class="col-lg-3">
                                                                <div class="form-check form-check-inline">
                                                                        
                                                                        <input name="int_cor_med" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Compléter  corps médical</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                            <div class="col-lg-4">

                                                                    <div class="form-check form-check-inline">
                                                                        
                                                                            <input  name="modif_cor_med"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Modifier compte corps médical</label>
                                                                            
                                                                            
                                                                          </div>
                                                                    
                                                                </div>
                                                                  <div class="col-lg-4">
                                                                      <div class="form-check form-check-inline">
                                                                       
                                                                        <input   name="affic_donn_med"  class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Afficher compte corps médical</label> 
                                                                      </div>
                                                                  </div>
                                            </div>
                                            
            
                                            
                                                    
                                                


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-4"><div class="form-check form-check-inline">
                                                           
                                                    <input  name="arch_cor_med" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Archiver compte corps médical</label> 
                                                  </div></div>
                                            <div class="col-lg-4"></div>
                                        </div>

                                    </div>

                                   
                                            <div class=" row">
                                            
                                                    <div class=" col-lg-11">
                                                            <div class="col-lg-3">
                                                                <div class="form-check form-check-inline">
                                                                        
                                                                        <input   name="int_donn_pat"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" >
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Compléter compte patient</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                                  <div class="col-lg-4  ">
                                                                      <div class="form-check form-check-inline">
                                                                         
                                                                        <input   name="modif_donn_pat" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" >
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Modifier compte patient</label>
                                                                      </div>
                                                                  </div>

                                                                  <div class="col-lg-4">
                                                                        <div class="form-check form-check-inline">
                                                                          
                                                                          <input  name="afficher_donn_pat"  class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" >
                                                                          <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Afficher compte patient</label> 
                                                                        </div>
                                                                    </div> 
                                            </div>
      
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-11">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-4"><div class="form-check form-check-inline">
                                                                       
                                                                <input  name="arch_comp_pat" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Archiver compte patient</label> 
                                                              </div></div>
                                                        <div class="col-lg-4"></div>
                                                    </div>

                                                </div>



                                                <div class=" row">
                                            
                                                        <div class=" col-lg-11">
                                                                <div class="col-lg-3">
                                                                    <div class="form-check form-check-inline">
                                                                            
                                                                            <input  name="gerer_rendez" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" >
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Gérer rendez-vous </label>
                                                                            
                                                                            
                                                                          </div>
                                                                </div>
                                                                      <div class="col-lg-4  ">
                                                                          <div class="form-check form-check-inline">
                                                                             
                                                                            <input  name="cons_his_man" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                            <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Consulter historique manipulations</label>
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-lg-4">
                                                                            <div class="form-check form-check-inline">
                                                                              
                                                                              <input  name="cons_his_rendez"  class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                              <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Consulter historique rendez-vous</label> 
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

            
            
            
        </form>
    </div>

        
    <!-- debut espace formulaire assisstant -->
        
    
@endsection 