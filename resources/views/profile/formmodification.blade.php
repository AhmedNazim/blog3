@extends('layouts.master')
@section('content')

        
       
    
<h1> Modifier corps médical </h1>

<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                
                    <div  class="compte-back col-lg-12">
                    <form method="POST" action="{{ url('/modifercomptecontroller/'.$id)}}">
                        {{ csrf_field() }}
                           <div class="container">
                            
                                
                                    <div class="row"></div>
                                    
    

                                        <div class="row"><br></div>


                           

                            <div class="margin-form3 row">
                                <div class="col-lg-3">
                                            <label class="color-form-compte" for="">Matricule :</label>
                                            <input value="{{$techToModif[0]->matricule}}" placeholder="ex:1234567"name="matricule" type="text" class="form-control">
                                        </div>
                                <div class="col-lg-3">
                                    <label class="color-form-compte" for="">Nom :</label>
                                    <input value="{{$techToModif[0]->nom_tech}}" type="text" name="nom" class="form-control">
                                </div>
                                <div  class="col-lg-3">
                                    <label class="color-form-compte"  for="">Prénom :</label>
                                    <input value="{{$techToModif[0]->prenom_tech}}" type="text" name="prenom" class="form-control">
                                </div>
                            </div>
<div class="row"><br></div>

                            <div class=" margin-form3 row">
                                    <div class="col-lg-3">
                                                <label class="color-form-compte" for="">Date de naissance :</label>
                                                <input value="{{$techToModif[0]->date_naiss}}"  type="date" name="date_naissance" class="form-control">
                                            </div>
                                    <div class="col-lg-3">
                                        <label class="color-form-compte" for="">Lieu de naissance :</label>
                                        <input  value="{{$techToModif[0]->lieu_naiss}}"   type="text" name="lieu_naissance" class="form-control">
                                    </div>
                                    <div  class="col-lg-3">
                                        <label class="color-form-compte" for="">E-mail :</label>
                                        <input value="{{$techToModif[0]->email_tech}}" type="text" value="gmail" disabled="disabled" name="email" class="form-control">
                                    </div>
                                </div>


<div class="row"><br></div>
                                <div class="margin-form2 row">
                                        <div class="col-lg-4">
                                                <label class="color-form-compte" for="exampleFormControlSelect1">Sexe :</label>
                                                <select value="" name="sexe" class="form-control" id="exampleFormControlSelect1">
                                                  <option @if ($techToModif[0]->sexe=='Homme')
                                                      {{"selected"}}
                                                  @endif >Homme</option>
                                                  <option  @if ($techToModif[0]->sexe=='Femme')
                                                    {{"selected"}}
                                                @endif>Femme</option>
                                                 
                                                </select>
                                                </div>
                                        <div class="col-lg-4">
                                          
                                            <label class="color-form-compte" for="exampleFormControlSelect1">Groupage :</label>
                                                <select name="groupage" class="form-control" id="exampleFormControlSelect1">
                                                        <option @if ($techToModif[0]->groupage=='O+')
                                                            {{"selected"}}
                                                        @endif value="O+">O+</option>
                                                        
                                                        
                                                        <option @if ($techToModif[0]->groupage=='O-')
                                                            {{"selected"}}
                                                        @endif value="O-">O-</option> 


                                                        <option @if ($techToModif[0]->groupage=='A+')
                                                            {{"selected"}}
                                                        @endif value="A+">A+</option> 
                                                        
                                                        

                                                        <option @if ($techToModif[0]->groupage=='A-')
                                                            {{"selected"}}
                                                        @endif value="A-">A-</option> 


                                                        <option @if ($techToModif[0]->groupage=='B+')
                                                            {{"selected"}}
                                                        @endif value="B+">B+</option> 


                                                        <option @if ($techToModif[0]->groupage=='B-')
                                                            {{"selected"}}
                                                        @endif value="B-">B-</option> 
                                                        
                                                        
                                                        <option @if ($techToModif[0]->groupage=='AB+')
                                                            {{"selected"}}
                                                        @endif value="AB+">AB+</option>
                                                        
                                                        
                                                        <option @if ($techToModif[0]->groupage=='AB-')
                                                            {{"selected"}}
                                                        @endif value="AB-">AB-</option> 
                                                 
                                                </select>
                                        </div>
                                       
                                    </div>
                                    <div  class="row"><br></div>

                                    <div  class="row">

                                            <div   class=" margin-form1 col-lg-9">
                                                <div  class="form-group">
                                                        <label class="color-form-compte" for="exampleFormControlTextarea1">Adresse :</label>
                                                        <textarea  name="adresse" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$techToModif[0]->adresse}}</textarea>
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
                                                                        
                                                                        <input @if ($profileToModif[0]->int_cor_med==2)
                                                                        {{"checked"}}
                                                                    @endif name="int_cor_med" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Compléter  corps médical</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                            <div class="col-lg-4">

                                                                    <div class="form-check form-check-inline">
                                                                        
                                                                            <input @if ($profileToModif[0]->modif_cor_med==2)
                                                                            {{"checked"}} @endif name="modif_cor_med"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Modifier compte corps médical</label>
                                                                            
                                                                            
                                                                          </div>
                                                                    
                                                                </div>
                                                                  <div class="col-lg-4">
                                                                      <div class="form-check form-check-inline">
                                                                       
                                                                        <input  @if ($profileToModif[0]->affic_donn_med==2)
                                                                        {{"checked"}} @endif name="affic_donn_med"  class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Afficher compte corps médical</label> 
                                                                      </div>
                                                                  </div>
                                            </div>
                                            
            
                                            
                                                    
                                                


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-4"><div class="form-check form-check-inline">
                                                           
                                                    <input @if ($profileToModif[0]->arch_cor_med==2)
                                                    {{"checked"}} @endif name="arch_cor_med" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Archiver compte corps médical</label> 
                                                  </div></div>
                                            <div class="col-lg-4"></div>
                                        </div>

                                    </div>

                                   
                                            <div class=" row">
                                            
                                                    <div class=" col-lg-11">
                                                            <div class="col-lg-3">
                                                                <div class="form-check form-check-inline">
                                                                        
                                                                        <input  @if ($profileToModif[0]->int_donn_pat==2)
                                                                        {{"checked"}}   @endif name="int_donn_pat"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Compléter compte patient</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                                  <div class="col-lg-4  ">
                                                                      <div class="form-check form-check-inline">
                                                                         
                                                                        <input  @if ($profileToModif[0]->modif_donn_pat==2)
                                                                        {{"checked"}} @endif  name="modif_donn_pat" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Modifier compte patient</label>
                                                                      </div>
                                                                  </div>

                                                                  <div class="col-lg-4">
                                                                        <div class="form-check form-check-inline">
                                                                          
                                                                          <input @if ($profileToModif[0]->afficher_donn_pat	==2)
                                                                            {{"checked"}} @endif name="afficher_donn_pat"  class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                          <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Afficher compte patient</label> 
                                                                        </div>
                                                                    </div> 
                                            </div>
      
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-11">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-4"><div class="form-check form-check-inline">
                                                                       
                                                                <input @if ($profileToModif[0]->arch_comp_pat==2)
                                                                            {{"checked"}} @endif name="arch_comp_pat" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Archiver compte patient</label> 
                                                              </div></div>
                                                        <div class="col-lg-4"></div>
                                                    </div>

                                                </div>



                                                <div class=" row">
                                            
                                                        <div class=" col-lg-11">
                                                                <div class="col-lg-3">
                                                                    <div class="form-check form-check-inline">
                                                                            
                                                                            <input @if ($profileToModif[0]->gerer_rendez==2)
                                                                            {{"checked"}} @endif name="gerer_rendez" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Gérer rendez-vous </label>
                                                                            
                                                                            
                                                                          </div>
                                                                </div>
                                                                      <div class="col-lg-4  ">
                                                                          <div class="form-check form-check-inline">
                                                                             
                                                                            <input @if ($profileToModif[0]->cons_his_man==2)
                                                                            {{"checked"}} @endif name="cons_his_man" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                            <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Consulter Historiques manipulations</label>
                                                                          </div>
                                                                      </div>
    
                                                                      <div class="col-lg-4">
                                                                            <div class="form-check form-check-inline">
                                                                              
                                                                              <input @if  ($profileToModif[0]->cons_his_rendez==2)
                                                                            {{"checked"}} @endif name="cons_his_rendez"  class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                              <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Consulter Historiques rendez-vous</label> 
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

        <br><br>
    <!-- debut espace formulaire assisstant -->
        
    
@endsection 