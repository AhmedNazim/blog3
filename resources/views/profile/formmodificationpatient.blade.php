@extends('layouts.master')
@section('content')
<div id="app">
        <h1> Modifier compte patient  </h1>
       
    


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                
                    <div  class="compte-back col-lg-12">
                    <form method="post" action="{{ url('/modifierepatientcontrol/'.$patientToModif->matricule_p)}}">
                        {{ csrf_field() }}
                           <div class="container">
                            
                               
                                    <div class="row"></div>
                                    
    

                                        <div class="row"><br></div>




                            <div class="margin-form3 row">
                                <div class="col-lg-3">
                                            <label class="color-form-compte" for="">Matricule :</label>
                                <input value="{{$patientToModif->matricule_p}}" placeholder="ex:1234567"name="matricule_p" type="text" class="form-control">
                                        </div>
                                <div class="col-lg-3">
                                    <label class="color-form-compte" for="">Nom :</label>
                                    <input value="{{$patientToModif->nom_pat}}" type="text" name="nom_pat" class="form-control">
                                </div>
                                <div  class="col-lg-3">
                                    <label class="color-form-compte"  for="">Prénom :</label>
                                    <input value="{{$patientToModif->prenom_pat}}" type="text" name="prenom_pat" class="form-control">
                                </div>
                            </div>
<div class="row"><br></div>

                            <div class=" margin-form2 row">
                                    <div class="col-lg-4">
                                                <label class="color-form-compte" for="">Date de naissance :</label>
                                                <input value="{{$patientToModif->date_naiss_pat}}" type="date" name="date_naiss_pat" class="form-control">
                                            </div>
                                    <div class="col-lg-4">
                                        <label class="color-form-compte" for="">Lieu de naissance :</label>
                                        <input value="{{$patientToModif->lieu_naiss_pat}}" type="text" name="lieu_naiss_pat" class="form-control">
                                    </div>
                                    
                                </div>


<div class="row"><br></div>
                                <div class="margin-form2 row">
                                        <div class="col-lg-4">
                                                <label class="color-form-compte" for="exampleFormControlSelect1">Sexe :</label>
                                                <select name="sexe_pat" class="form-control" id="exampleFormControlSelect1">
                                                        <option @if ($patientToModif->sexe_pat=='Homme')
                                                                {{"selected"}}
                                                            @endif >Homme</option>
                                                            <option  @if ($patientToModif->sexe_pat=='Femme')
                                                              {{"selected"}}
                                                          @endif>Femme</option>
                                                 
                                                </select>
                                                </div>
                                        <div class="col-lg-4">
                                          
                                            <label class="color-form-compte" for="exampleFormControlSelect1">Groupage :</label>
                                                <select name="groupage_pat" class="form-control" id="exampleFormControlSelect1">
                                                        <option @if ($patientToModif->groupage=='O+')
                                                                {{"selected"}}
                                                            @endif value="O+">O+</option>
                                                            
                                                            
                                                            <option @if ($patientToModif->groupage_pat=='O-')
                                                                {{"selected"}}
                                                            @endif value="O-">O-</option> 
    
    
                                                            <option @if ($patientToModif->groupage_pat=='A+')
                                                                {{"selected"}}
                                                            @endif value="A+">A+</option> 
                                                            
                                                            
    
                                                            <option @if ($patientToModif->groupage_pat=='A-')
                                                                {{"selected"}}
                                                            @endif value="A-">A-</option> 
    
    
                                                            <option @if ($patientToModif->groupage_pat=='B+')
                                                                {{"selected"}}
                                                            @endif value="B+">B+</option> 
    
    
                                                            <option @if ($patientToModif->groupage_pat=='B-')
                                                                {{"selected"}}
                                                            @endif value="B-">B-</option> 
                                                            
                                                            
                                                            <option @if ($patientToModif->groupage_pat=='AB+')
                                                                {{"selected"}}
                                                            @endif value="AB+">AB+</option>
                                                            
                                                            
                                                            <option @if ($patientToModif->groupage_pat=='AB-')
                                                                {{"selected"}}
                                                            @endif value="AB-">AB-</option> 
                                                 
                                                </select>
                                        </div>
                                       
                                    </div>
                                    <div  class="row"><br></div>

                                    <div class="row">
                                        
                                            <div class="margin-form3 row">
                                                    <div class="col-lg-3">
                                                                <label class="color-form-compte"  for="">Date de recrutement :</label>
                                                                <input value="{{$patientToModif->date_recru_pat}}"  placeholder="ex:1234567" name="date_recru_pat" type="date" class="form-control">
                                                            </div>
                                                    <div class="col-lg-3">
                                                        <label class="color-form-compte"  for="">N° de poste :</label>
                                                        <input value="{{$patientToModif->n_poste_pat}}"  type="text" name="n_poste_pat" class="form-control">
                                                    </div>
                                                    <div  class="col-lg-3">
                                                        <label class="color-form-compte"   for="">Poste de travaille  :</label>
                                                        <input value="{{$patientToModif->poste_trav_pat}}" type="text" name="poste_trav_pat" class="form-control">
                                                    </div>
                                                </div>
                                    </div>
                                    <br>
                                    <div class="margin-form3 row">
                                        
                                        <div class=" margin-form8 col-lg-5">
                                                <label  class="  color-form-compte" for="">Date  dernière visite :</label>
                                                <input  value="{{$patientToModif->date_der_visite}}" type="date" name="date_der_visite" class="form-control">
                                                
                                                        
                                                       
                                                       
                                                     
                                                            
                                                         
                                                    </div>
                                    </div>

                                    <div  class="row"><br></div>

                                    <div class="row">
                                        
                                            <div class="margin-form2 row">
                                                    <div  class="col-lg-4">
                                                            <label class="color-form-compte"   for="">Situation familiale :</label>
                                                            <select type="text" name="situation_fam_pat" class="form-control">
                                                                     
                                                                    <option @if ($patientToModif->situation_fam_pat=='celibataire')
                                                                            {{"selected"}}
                                                                        @endif >Célibataire</option>
                                                                        <option  @if ($patientToModif->situation_fam_pat=='mariee')
                                                                          {{"selected"}}
                                                                      @endif>Marié</option>
                                                            
                                                            </select>
                                                        </div>
                                                    <div class="col-lg-4">
                                                                <label class="color-form-compte"  for="">N° de sécurité sociale :</label>
                                                                <input value="{{$patientToModif->n_securite_so_pat}}" placeholder="ex:1234567" name="n_securite_so_pat" type="text" class="form-control">
                                                            </div>
                                                            
                                                    
                                                    
                                    </div>
                                    
                                    <br>
                                            <div class="margin-form2 row">
                                                <div class="col-lg-4">
                                                    
                                                        <label class="color-form-compte" for="exampleFormControlSelect1">Division/Département :</label>
                                                        <select name="division" class="form-control" id="exampleFormControlSelect1">
                                                          <option @if ($divisiondivision=='A')
                                                                {{"selected"}}
                                                            @endif>A</option>

                                                          <option @if ($divisiondivision=='B')
                                                          {{"selected"}}
                                                      @endif>B</option>

                                                          <option @if ($divisiondivision=='C')
                                                          {{"selected"}}
                                                      @endif>C</option>

                                                          <option @if ($divisiondivision=='D')
                                                          {{"selected"}}
                                                      @endif>D</option>
                                                         
                                                        </select>
                                                        </div>
                                                <div class="col-lg-4">
                                                  
                                                    <label class="color-form-compte" for="exampleFormControlSelect1">Equipe/Service :</label>
                                                        <select name="equipe" class="form-control" id="exampleFormControlSelect1">
                                                                <option @if ($equipeequipe=='A1')
                                                                {{"selected"}}
                                                            @endif value="A1">A1</option>   

                                                                <option @if ($equipeequipe=='A2')
                                                                {{"selected"}}
                                                            @endif value="A2">A2</option> 

                                                                <option @if ($equipeequipe=='A3')
                                                                {{"selected"}}
                                                            @endif value="A3">A3</option> 

                                                                <option @if ($equipeequipe=='B1')
                                                                {{"selected"}}
                                                            @endif  value="B1">B1</option> 

                                                                <option @if ($equipeequipe=='B2')
                                                                {{"selected"}}
                                                            @endif value="B2">B2</option> 

                                                                <option @if ($equipeequipe=='B3')
                                                                {{"selected"}}
                                                            @endif value="B3">B3</option> 

                                                                <option @if ($equipeequipe=='C1')
                                                                {{"selected"}}
                                                            @endif  value="C1">C1</option> 

                                                                <option @if ($equipeequipe=='C2')
                                                                {{"selected"}}
                                                            @endif value="C2">C2</option> 

                                                                <option @if ($equipeequipe=='C3')
                                                                {{"selected"}}
                                                            @endif value="C3">C3</option> 
                                                            <option @if ($equipeequipe=='D1')
                                                                {{"selected"}}
                                                            @endif  value="D1">D1</option> 

                                                                <option @if ($equipeequipe=='D2')
                                                                {{"selected"}}
                                                            @endif value="D2">D2</option> 

                                                                <option @if ($equipeequipe=='D3')
                                                                {{"selected"}}
                                                            @endif value="D3">D3</option> 

                                                                
                                                         
                                                        </select>
                                                </div>
                                               
                                            </div>




                                    <div  class="row">

                                            <div   class=" margin-form1 col-lg-9">
                                                <div  class="form-group">
                                                        <label class="color-form-compte" for="exampleFormControlTextarea1">Adresse :</label>
                                                        <textarea name="adresse_pat" class="form-control" id="exampleFormControlTextarea1" rows="3"> {{$patientToModif->adresse_pat}}</textarea>
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
                                                                        
                                                                        <input @if ($categorie->travailleur_exposes_risque==2)
                                                                        {{"checked"}}
                                                                    @endif name="travailleur_exposes_risque" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                    <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les travailleurs particulièrement exposés aux risques</label>
                                                                        
                                                                        
                                                                      </div>
                                                            </div>
                                                            
                                            </div>
 
                                    </div>
                                   


                                    <div class="row">
                                            


                                                
                                                
                                                        <div class=" col-lg-11   ">
                                                                <div class="col-lg-10">
                                                                    <div class="form-check form-check-inline">
                                                                            
                                                                            <input @if ($categorie->travailleur_affectes_postes_securite==2)
                                                                            {{"checked"}}
                                                                        @endif name="travailleur_affectes_postes_securite" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                        <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les travailleurs affectés à des postes impliquant une responsabilité particulière en matière de sécurité.</label>
                                                                            
                                                                            
                                                                          </div>
                                                                </div>
                                                                
                                                </div>
     
                                        </div>

                                        <div class="row">
                                            


                                                
                                                
                                                <div class=" col-lg-11   ">
                                                        <div class="col-lg-10">
                                                            <div class="form-check form-check-inline">
                                                                    
                                                                    <input @if ($categorie->travailleur_charges_la_restauration==2)
                                                                    {{"checked"}}
                                                                @endif name="travailleur_charges_la_restauration" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les travailleurs chargés de la restauration.</label>
                                                                    
                                                                    
                                                                  </div>
                                                        </div>
                                                        
                                        </div></div>
                                        <div class="row">
                                            


                                                
                                                
                                                <div class=" col-lg-11   ">
                                                        <div class="col-lg-10">
                                                            <div class="form-check form-check-inline">
                                                                    
                                                                    <input @if ($categorie->handicapes_chroniques==2)
                                                                    {{"checked"}}
                                                                @endif  name="handicapes_chroniques" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
                                                                <label   class="color-form-compte"  class="form-check-label" for="inlineCheckbox1">Les handicapés physiques et les malades chroniques.</label>
                                                                    
                                                                    
                                                                  </div>
                                                        </div>
                                                        
                                        </div></div>
                                        <div class="row">                                                
                                                <div class=" col-lg-11   ">
                                                        <div class="col-lg-10">
                                                            <div class="form-check form-check-inline">
                                                                    
                                                                    <input @if ($categorie->femmes_enceintes_mere==2)
                                                                    {{"checked"}}
                                                                @endif name="femmes_enceintes_mere" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2">
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