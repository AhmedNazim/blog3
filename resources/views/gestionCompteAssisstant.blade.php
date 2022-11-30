@extends('layouts.master')
@section('content')
<div id="app">
        <h1> Welcome Racim Assistant   </h1>
        <h2>

        </h2>
    


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                
                    <div  class="compte-back col-lg-12">
                        <form action="">
                        
                           <table>  
                             
    
                                <tr>
                                        <td class="color-form-compte" width="40%"> <label for=""> Nom :</label></td>
                                        
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td  class="color-form-compte" width="30%" > <label for=""> prenom :</label></td>
                                    
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        
                                        
                                </tr>

                                <tr>
                                   <td><input type="text " class="form-control"></td> 
                                    <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text " class="form-control"></td> 
                                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    

                                </tr>
                                <tr>
                                        <td><br></td>
                                        <td><br></td>
                                        <td><br></td>
                                </tr>

                                <tr>
                                        <td class="color-form-compte" width="30%"  > <label for=""> adresse :</label></td>
                                        
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td class="color-form-compte" width="30%" > <label for=""> lieu de naissance :</label></td>
                                    
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>    
                                        
                                </tr>
                                    
                                <tr>
                                        <td> <textarea name="" id="" cols="60" rows="3"></textarea></td>  
                                    <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td><textarea name="" id="" cols="50" rows="3"></textarea></td> 
                                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                   

                                </tr>

                                <tr>
                                        <td><br></td>
                                        <td><br></td>
                                        <td><br></td>
                                </tr>

                                <tr>
                                        <td class="color-form-compte" width="40%"> <label for=""> date de naissance :</label></td>
                                        
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td class="color-form-compte" width="30%" > <label for=""> date de recrutement :</label></td>
                                    
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        
                                        
                                </tr>
                                <tr>
                                        <td><input type="date" class="form-control"></td> 
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td><input type="date" class="form-control"></td> 
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         
     
                                     </tr>

                                     <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                    </tr>
    
                                    <tr>
                                            <td class="color-form-compte" width="40%"> <label for=""> email :</label></td>
                                            
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="color-form-compte" width="30%" > <label for=""> numéro de poste :</label></td>
                                        
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            
                                            
                                    </tr>
                                    <tr>
                                            <td><input type="mail" class="form-control"></td> 
                                             <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                             <td><input type="date" class="form-control"></td> 
                                             <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                             
         
                                    </tr>     
                                    <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                    </tr>
    
                                    <tr>
                                            <td class="color-form-compte" width="40%"> <label for=""> groupage :</label></td>
                                            
                                            <td class="color-form-compte" >Situation familiale :</td>
                                            <td class="color-form-compte"  width="30%" > <label for=""> sexe : </label></td>
                                        
                                            <td  class="color-form-compte"  > maladie Chronique :</td>
                                            
                                            
                                    </tr>
                                    <tr>
                                            <td><select name="" id="">
                                            <option value="">O+</option>   
                                            <option value="">O-</option> 
                                            <option value="">A+</option>  
                                            <option value="">A-</option> 
                                            <option value="">B+</option> 
                                            <option value="">B-</option>  
                                            <option value="">AB+</option> 
                                            <option value="">AB-</option>              
                                            
                                            </select>
                                        </td> 
                                             <td> <select name="" id="">
                                            <option value=""> célibataire</option>  
                                            <option value=""> marié/(e)</option>   
                                            <option value=""> veuf/veuve</option> 
                                            <option value=""> Dévorcé(e)</option> 
                                               
                                            </select></td>
                                             <td><select name="" id="">
                                                <option value=""> Homme</option>     
                                                <option value=""> Femme</option> 
                                            </select></td> 
                                             <td> <input type="date" class="form-control"></td>
                                             
         
                                    </tr>     

                                

                                




                           </table>
                        
                        
                        </form>
                        
                    </div>

            </div>

    <!-- debut espace formulaire assisstant -->
        
    
@endsection