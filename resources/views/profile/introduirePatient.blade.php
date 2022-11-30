@extends('layouts.master')
@section('content')

<div id="app6"> 

</div>
<div id="app">
        <h1>Compléter compte patient   </h1>

<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                    <span style="color:red"> {{$message}}</span> 
                    <div  class="compte-back col-lg-12">
                    <form method="GET" action="{{ url('/introduirepatientcontrol')}}">
                        
                           <div class="container">
                            
                                <div class="margin-form3 row">
                                        

                                        <div class=" margin-form8 col-lg-5">

                                                <label  class="  color-form-compte" for="">Nom utilisateur :</label>
                                                <select v-model="message2" @click="getEmail2(message2)" style="overflow:auto" id="myDiv" ref="myDiv"  name="nom_utilisateur" class=" form-control form-control-lg">
                                                        
                                                        @foreach ($users as $item)
                                                        @if ( $item->isAdmin!=1 && $item->isAdmin!=2 && $item->isAdmin!=3)
                                                        <option>{{ $item->name }}</option>
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
                                            <input  placeholder="ex:1234567"name="matricule_p" type="text" class="form-control">
                                        </div>
                                <div class="col-lg-3">
                                    <label class="color-form-compte" for="">Nom :</label>
                                    <input type="text" name="nom_pat" class="form-control">
                                </div>
                                <div  class="col-lg-3">
                                    <label class="color-form-compte"  for="">Prénom :</label>
                                    <input type="text" name="prenom_pat" class="form-control">
                                </div>
                            </div>
<div class="row"><br></div>

                            <div class=" margin-form3 row">
                                    <div class="col-lg-3">
                                                <label class="color-form-compte" for="">Date de naissance :</label>
                                                <input type="date" name="date_naiss_pat" class="form-control">
                                            </div>
                                    <div class="col-lg-3">
                                        <label class="color-form-compte" for="">Lieu de naissance :</label>
                                        <input type="text" name="lieu_naiss_pat" class="form-control">
                                    </div>
                                    <div  class="col-lg-3">
                                        <label class="color-form-compte" for="">E-mail :</label>
                                        <input type="text" value="malik@gmail.com" disabled="disabled" name="email" class="form-control">
                                    </div>
                                </div>


<div class="row"><br></div>
                                <div class="margin-form2 row">
                                        <div class="col-lg-4">
                                                <label class="color-form-compte" for="exampleFormControlSelect1">Sexe :</label>
                                                <select name="sexe_pat" class="form-control" id="exampleFormControlSelect1">
                                                  <option>Homme</option>
                                                  <option>Femme</option>
                                                 
                                                </select>
                                                </div>
                                        <div class="col-lg-4">
                                          
                                            <label class="color-form-compte" for="exampleFormControlSelect1">Groupage :</label>
                                                <select name="groupage_pat" class="form-control" id="exampleFormControlSelect1">
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

                                    <div class="row">
                                        
                                            <div class="margin-form3 row">
                                                    <div class="col-lg-3">
                                                                <label class="color-form-compte"  for="">Date de recrutement :</label>
                                                                <input  placeholder="ex:1234567" name="date_recru_pat" type="date" class="form-control">
                                                            </div>
                                                    <div class="col-lg-3">
                                                        <label class="color-form-compte"  for="">N° de poste  :</label>
                                                        <input type="text" name="n_poste_pat" class="form-control">
                                                    </div>
                                                    <div  class="col-lg-3">
                                                        <label class="color-form-compte"   for="">Poste de travaille  :</label>
                                                        <input type="text" name="poste_trav_pat" class="form-control">
                                                    </div>
                                                </div>
                                    </div>
                                    <br>
                                    <div class="margin-form3 row">
                                        
                                        <div class=" margin-form8 col-lg-5">
                                                <label  class="  color-form-compte" for="">Date  dernière visite :</label>
                                                <input type="date" name="date_der_visite" class="form-control">
                                                        
                                                        
                                                       
                                                       
                                                     
                                                            
                                                         
                                                    </div>
                                    </div>

                                    <div  class="row"><br></div>

                                    <div class="row">
                                        
                                            <div class="margin-form2 row">
                                                    <div  class="col-lg-4">
                                                            <label class="color-form-compte"   for="">Situation familiale :</label>
                                                            <select type="text" name="situation_fam_pat" class="form-control">
                                                                    <option value="celibataire">Célibataire</option>   
                                                                    <option value="mariee">Mariée</option> 
                                                                     
                                                            
                                                            </select>
                                                        </div>
                                                    <div class="col-lg-4">
                                                                <label class="color-form-compte"  for="">N° de sécurité sociale :</label>
                                                                <input  placeholder="ex:1234567" name="n_securite_so_pat" type="text" class="form-control">
                                                            </div>
                                                    
                                                    
                                            </div>
                                            <br>
                                            <div class="margin-form2 row">
                                                <div class="col-lg-4">
                                                        <label class="color-form-compte" for="exampleFormControlSelect1">Division/Département :</label>
                                                        <select name="division" class="form-control" id="exampleFormControlSelect1">
                                                          <option>A</option>
                                                          <option>B</option>
                                                          <option>C</option>
                                                          <option>D</option>
                                                         
                                                        </select>
                                                        </div>
                                                <div class="col-lg-4">
                                                  
                                                    <label class="color-form-compte" for="exampleFormControlSelect1">Equipe/Service :</label>
                                                        <select name="equipe" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="A1">A1</option>   
                                                                <option value="A2">A2</option> 
                                                                <option value="A3">A3</option>  
                                                                <option value="B1">B1</option> 
                                                                <option value="B2">B2</option> 
                                                                <option value="B3">B3</option>  
                                                                <option value="C1">C1</option> 
                                                                <option value="C2">C2</option> 
                                                                <option value="C3">C3</option> 
                                                                
                                                         
                                                        </select>
                                                </div>
                                               
                                            </div>
                                            
                                            
                                    <div  class="row"><br></div>




                                    <div  class="row">

                                            <div   class=" margin-form1 col-lg-9">
                                                <div  class="form-group">
                                                        <label class="color-form-compte" for="exampleFormControlTextarea1">Adresse :</label>
                                                        <textarea name="adresse_pat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>

                                    </div>
                                    
                               <div class="col-lg-11">
<br>
                               <div  class="col-lg-">
                                    <label class="color-form-compte" for="">Catégorie :</label>
                                </div>
                            </div>
                            <br>
                                    <div class="row">
                                        <br><br>
                                            
                                            
                                                    <div class=" col-lg-11   ">
                                                            <div class="col-lg-8">
                                                                <div class="form-check form-check-inline">
                                                                        
                                                                        <input name="travailleur_exposes_risque" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les travailleurs particulièrement exposés aux risques</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                            
                                            </div>
 
                                    </div>
                                   


                                    <div class="row">
                                            


                                                
                                                
                                                        <div class=" col-lg-11   ">
                                                                <div class="col-lg-10">
                                                                    <div class="form-check form-check-inline">
                                                                            
                                                                            <input name="travailleur_affectes_postes_securite" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les travailleurs affectés à des postes impliquant une responsabilité particulière en matière de sécurité.</label>
                                                                            
                                                                            
                                                                          </div>
                                                                </div>
                                                                
                                                </div>
     
                                        </div>

                                        <div class="row">
                                            


                                                
                                                
                                                <div class=" col-lg-11   ">
                                                        <div class="col-lg-10">
                                                            <div class="form-check form-check-inline">
                                                                    
                                                                    <input name="travailleur_charges_la_restauration" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les travailleurs chargés de la restauration.</label>
                                                                    
                                                                    
                                                                  </div>
                                                        </div>
                                                        
                                        </div></div>
                                        <div class="row">
                                            


                                                
                                                
                                                <div class=" col-lg-11   ">
                                                        <div class="col-lg-10">
                                                            <div class="form-check form-check-inline">
                                                                    
                                                                    <input name="handicapes_chroniques" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les handicapés physiques et les malades chroniques.</label>
                                                                    
                                                                    
                                                                  </div>
                                                        </div>
                                                        
                                        </div></div>
                                        <div class="row">                                                
                                                <div class=" col-lg-11   ">
                                                        <div class="col-lg-10">
                                                            <div class="form-check form-check-inline">
                                                                    
                                                                    <input name="femmes_enceintes_mere" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les femmes enceintes et les mères d’un enfant de moins de deux ans.</label>
                                                                    
                                                                    
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