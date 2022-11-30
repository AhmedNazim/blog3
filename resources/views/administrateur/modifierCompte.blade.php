@extends('layouts.master')
@section('content')
<div id="app">
        <h1> Welcome Administrateur   </h1>
        <h2>

        </h2>
    


<hr>
    <!-- debut espace formulaire assisstant -->
            <div class="container-fluid">
                
                    <div  class="compte-back col-lg-12">
                        <form action="">
                        
                           <div class="container">
                            
                                <div class="margin-form3 row">
                                        
                                        
                                <div class="row"><br><br><br></div>

                                <div class="margin-form3 row">
                                        
                                        <div class=" margin-form4 col-lg-5">
                                            <label  class="  color-form-compte" for="">Nom utilisateur :</label>
                                                <select class=" form-control form-control-lg">
                                                        <option>Racim</option>
                                                        <option>Lylia</option>
                                                        
                                                      </select>
                                                </div>
                                </div>
                                        
                                    </div>

                                        <div class="row"><br></div>

                                        <div  style="margin-left:-1cm" class="row">


                                                <div class="col-lg-10 border border-dark" style="height:6cm; overflow:auto;">


                                                        <table id="dtVerticalScrollExample"   style="background-color:white;" class="table table-bordered table-hover " cellspacing="0"
                                  width="100%">
                                  <thead>
                                    <tr>
                                      <th class="th-sm">Name
                                      </th>
                                      <th class="th-sm">prenom
                                      </th>
                                      <th class="th-sm">Adresse
                                      </th>
                                      <th class="th-sm">Age
                                      </th>
                                      <th class="th-sm">Start date
                                      </th>
                                      <th align="center" class="th-sm">Action
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     
                                      <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                            <td>cc</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <div align="center">
                                                    <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                     <!-- boutton archiver -->
                                                     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                            <i class="fa fa-close" style="font-size:11px"></i>
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
                                                          
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>

                                                <tr>
                                                        <td>aa</td>
                                                        <td>bb</td>
                                                        <td>cc</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>
                                                            <div align="center">
                                                                    <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                                  <!-- boutton archiver -->
                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                    <i class="fa fa-close" style="font-size:11px"></i>
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
                                                        
                                                            </div>
                                                        </td>
                                                      </tr>
            
                                                      <tr>
                                                            <tr>
                                                                    <td>aa</td>
                                                                    <td>bb</td>
                                                                    <td>cc</td>
                                                                    <td>61</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div align="center">
                                                                                <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                                              <!-- boutton archiver -->
                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                    <i class="fa fa-close" style="font-size:11px"></i>
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
                                                        
                                                                        </div>
                                                                    </td>
                                                                  </tr>


                                                                  <tr>
                                                                        <td>aa</td>
                                                                        <td>bb</td>
                                                                        <td>cc</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>
                                                                            <div align="center">
                                                                                    <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                                                  <!-- boutton archiver -->
                                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                        <i class="fa fa-close" style="font-size:11px"></i>
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
                                                            
                                                                            </div>
                                                                        </td>
                                                                      </tr>
                                                                      <tr>
                                                                            <td>aa</td>
                                                                            <td>bb</td>
                                                                            <td>cc</td>
                                                                            <td>61</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>
                                                                                <div align="center">
                                                                                        <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                                                      <!-- boutton archiver -->
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                            <i class="fa fa-close" style="font-size:11px"></i>
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
                                                                
                                                                                </div>
                                                                            </td>
                                                                          </tr>
                                                                          <tr>
                                                                                <td>aa</td>
                                                                                <td>bb</td>
                                                                                <td>cc</td>
                                                                                <td>61</td>
                                                                                <td>2011/04/25</td>
                                                                                <td>
                                                                                    <div align="center">
                                                                                            <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                                                          <!-- boutton archiver -->
                                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                                <i class="fa fa-close" style="font-size:11px"></i>
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
                                                                    
                                                                                    </div>
                                                                                </td>
                                                                              </tr>
                        
                                                                  <tr>  
                                                <td>aa</td>
                                                <td>bb</td>
                                                <td>cc</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div align="center">
                                                            <a  href="/formmodification"  @click=print() type="button"  class=" bt-color btn  btn-sm"><i class="fas fa-edit" style="font-size:11px"></i></a>
                                                            
                                                             <!-- boutton archiver -->
                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                    <i class="fa fa-close" style=" font-size:11px"></i>
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
                                                        
                                                    </div>
                                                </td>
                                              </tr>
                                              
                                          
                                   
                                    
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
<div class="row"><br><br></div>
<div class="row">

        
</div>
      






                           </div>
                        
                        
                        </form>
                        
                    </div>

            </div>

    <!-- debut espace formulaire assisstant -->
        
    
@endsection