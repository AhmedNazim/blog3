
                                        <div  style="margin-left:-1cm" class="row">


                                                <div class="col-lg-10 border border-dark" style="height:7cm; overflow:auto;">


                                                        <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0"
                                  width="100%">
                                  <thead>
                                        <tr>
                                                <th width="10%"></th>
                                                <th width="20%"></th>
                                                <th width="20%">Liste des patients</th>
                                                <th width="20%"></th>
                                                <th width="20%"> <div align=""> </div></th>
                                        </tr>
                                      
                                      <tr>
                                        <th> <b>Matricule</b> </th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th> <div align=""> Action</div></th>
                                      </tr>
                                      </thead>
                                      <tbody id="myTable">
                                      @foreach ($technicieno as $item)
                                      <tr>
                                          <td> <b>{{$item->matricule}}</b> </td>
                                          <td>{{$item->nom_tech}}</td>
                                          <td>{{$item->prenom_tech}}</td>
                                          <td>{{$item->email_tech}}</td>
                                          <td>
                                            
                                            
                                            <div align="" class="col-lg-8">
                                             <div align="center">
                                             <div class="col-lg-2">
                                              @foreach ($profiletech as $item2)
                                              @if ($item2->modif_cor_med==2)
                                             <a  href="{{ url('formmodification/'.$item->matricule)}}"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                              @else
                                              <div></div>
                                          @endif
                                          @endforeach
                                              </div>
                                              <div class="col-lg-2">
                                          @foreach ($profiletech as $item2)
                                          @if ($item2->	arch_cor_med==2)        
                                            <!-- boutton archiver -->
                                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                              <i class="fa fa-close" style="font-size:11px"></i>&nbsp;
                                      </button>
                                            
                                           
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                          <div class="modal-body">
                                                                  <h5>Popover in a modal</h5>
                                                                  <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
                                                                  <hr>
                                                                  <h5>Tooltips in a modal</h5>
                                                                  <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
                                                                </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                              
                                            @else
                                              <div></div>
                                              @endif
                                              @endforeach 
                                            </div>
                                            <div class="col-lg-2">
                                               
                                            @foreach ($profiletech as $item2)
                                              @if ($item2->affic_donn_med==2)

                                
                                             
                                             
                                                  

                                                                                               
  <button @click="getId({{$item->id}})" style="font-size:11px;background-color:#0793BD;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
      <i class="fa fa-plus-square"></i>
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
          <div  class="modal-body">
            
           <table>
             <tr>
          
              <td> Matricule :</td>
             <td> @{{idTech}} </td>
              
             </tr>
             <tr>
          
                <td> Nom :</td>
                <td> matricule :</td>
                
               </tr>
               <tr>
          
                  <td> Prénom :</td>
                  <td> matricule :</td>
                  
                 </tr>
                 <tr>
          
                    <td> Adresse :</td>
                    <td> matricule :</td>
                    
                   </tr>
           </table>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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
                                      </div>
                                      </td>
                                          
                                        </tr>
                                        
                                      @endforeach
                                      </tbody>
                                      </table>

                                        </div>