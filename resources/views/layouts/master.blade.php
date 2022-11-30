<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<title>CDTA | GVM</title>
<link href="{{asset('/css/all.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('/css/fontawesome.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('/css/brands.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('/css/all.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('/css/fontawesome.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('/css/cssPfe.css')}}"type="text/css"  rel="stylesheet">
    <link href="{{asset('/css/all.css')}}"  type="text/css" rel="stylesheet" integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <div  id="wrapper">
        <nav class="navbar-default  navbar-static-side"  role="navigation">
            <div  class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/avatar1.png" width="60" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$techAuth[0]->nom_tech." ".$techAuth[0]->prenom_tech  }}</strong>
                            <br>
                            <a class="text-muted text-xs block" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Se déconnecter
                                </a>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            
                             <!-- </span> <span class="text-muted text-xs block">Compte <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                               
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Se déconnecter
                                </a>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>

                                
                            </ul> -->
                        </div>
                        <div class="logo-element">
                            CDTA
                        </div>
                    </li>
                    @foreach ($profiletech as $item2)
                    @if ($item2->gerer_rendez==2 )
                    <li>
                        <a href="/gererlalisterendezvous"><i class="far fa-calendar-alt"></i> <span class="nav-label">Gestion rendez-vous</span></a>
                        
                    </li>
                    @else
                   <div></div>
                    @endif
                                          
                                               
                  @endforeach
                     
 <!-- 
                    <li class="">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Gestion corp médicale  </span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="active"><a href="/ajoutercompte">Introduir compte</a></li>

                       <li><a href="/archivercompte"> archiver compte</a></li> 

                            <li><a href="/modifiercompte">Modifier compte</a></li>
                            
                            
                        </ul>
                    </li> -->  
              
                    @foreach ($profiletech as $item2)
                      @if ($item2->int_donn_pat==1 && $item2->modif_donn_pat==1 && $item2->arch_comp_pat==1 && $item2->afficher_donn_pat==1  )
                      <div></div>
                     

                        @else
                    <li>
                        <a href="/gestionpatient"><i class="fas fa-stethoscope"></i> <span class="nav-label">Gestion compte patient</span></a>
                        
                    </li>
                    @endif
                                                   
                                                    
                       @endforeach  

             @foreach ($profiletech as $item2)
                 @if ($item2->cons_his_rendez==2)
                    <li>
                        <a href="/historiquedesrendezvous"><i class="fas fa-file-medical"></i> <span class="nav-label">Historique des rendez-vous</span></a>
                    </li>
                    @else
                    <div></div>
                     @endif
                   @endforeach         
                  @foreach ($profiletech as $item2)
                    @if ($item2->cons_his_man==2)
                    <li>
                        <a href="/historiquedemanipulation"><i class="fa fa-pie-chart"></i> <span class="nav-label">Historique des manipulations</span>  </a>
                    </li>

                    @else
                   <div></div>
                    @endif
                  @endforeach
            

                  
                   @foreach ($profiletech as $item2)
                      @if ($item2->int_cor_med==1 && $item2->modif_cor_med==1 && $item2->arch_cor_med==1 && $item2->affic_donn_med==1  )
                      <div></div>
                     

                        @else
                        <li>
                                <a href="/gestioncoremedicale"><i class="fas fa-user-md"></i> <span class="nav-label">Gestion corps médical</span>  </a>
                        </li>
                         @endif
                                                   
                                                    
                       @endforeach  
                   
                    <!--

                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html">Text Editor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="project_detail.html">Project detail</a></li>
                            <li><a href="teams_board.html">Teams board</a></li>
                            <li><a href="social_feed.html">Social feed</a></li>
                            <li><a href="clients.html">Clients</a></li>
                            <li><a href="full_height.html">Outlook view</a></li>
                            <li><a href="file_manager.html">File manager</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="issue_tracker.html">Issue tracker</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="article.html">Article</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="pin_board.html">Pin board</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="search_results.html">Search results</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_two_columns.html">Login v.2</a></li>
                            <li><a href="forgot_password.html">Forget password</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="toastr_notifications.html">Notification</a></li>
                            <li><a href="nestable_list.html">Nestable list</a></li>
                            <li><a href="agile_board.html">Agile board</a></li>
                            <li><a href="timeline_2.html">Timeline v.2</a></li>
                            <li><a href="diff.html">Diff</a></li>
                            <li><a href="sweetalert.html">Sweet alert</a></li>
                            <li><a href="idle_timer.html">Idle timer</a></li>
                            <li><a href="spinners.html">Spinners</a></li>
                            <li><a href="tinycon.html">Live favicon</a></li>
                            <li><a href="google_maps.html">Google maps</a></li>
                            <li><a href="code_editor.html">Code editor</a></li>
                            <li><a href="modal_window.html">Modal window</a></li>
                            <li><a href="forum_main.html">Forum view</a></li>
                            <li><a href="validation.html">Validation</a></li>
                            <li><a href="tree_view.html">Tree view</a></li>
                            <li><a href="chat_view.html">Chat view</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="draggable_panels.html">Draggable Panels</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs_panels.html">Panels</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="notifications.html">Notifications & Tooltips</a></li>
                            <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.html">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                            <li><a href="table_foo_table.html">Foo Tables</a></li>
                            <li><a href="jq_grid.html">jqGrid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                            <li><a href="ecommerce_product_list.html">Products list</a></li>
                            <li><a href="ecommerce_product.html">Product edit</a></li>
                            <li><a href="ecommerce-orders.html">Orders</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                            <li><a href="carousel.html">Bootstrap Carusela</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>


                -->
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            {{-- <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> --}}
            
        </div>
        <ul class="nav navbar-top-links navbar-right">
                <li>
                    {{-- <span class="m-r-sm text-muted welcome-message">Welcome to </span> --}}
                    <img src="{{asset('/img/logoCDTA.png')}}" alt="" width="50" srcset="">
                </li>
                
            </ul>

        </nav>
        </div>
        
       
@yield('content')


    </div>
    <br><br>

</div>

   
    <script src="/js/vue.js"></script>
    <script src="/js/axios.min.js"></script>
  
    <!-- Mainly scripts -->
    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/js/plugins/flot/jquery.flot.js"></script>
    <script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="/js/plugins/toastr/toastr.min.js"></script>
    <script>
    
    </script>

<script>
new Vue({
    el:'#app',
    data:{
        name:'sofiane',
        lists:[],
        listID:[],
        listRendezVous:[],
        s:''
    },
    methods: {
            
             getListeEmployes: function()
        {
            axios.get('http://127.0.0.1:8000/getListeEmployes')
            .then( response => {
                this.lists=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        print : function(id)
        {
            this.listID.push(id);
            this.name=id;
            

        }
    },  
    mounted() {
        this.getListeEmployes();
    },
})

new Vue({
    el:'#app2',
    data:{
        name2:'sofiane',
        lists:[],
        listID:[],
        listRendezVous:[],
        s:'',
        idTech:0,
        idTechToSupp:0,
        urlToSupp:'',
        urlToSuppPat:'',
        listIdRdv:[],
        test3:0,
        listePatientGeted:[],
        gg:[],


        idTechToSuppPat:0,
        listeTech:[],
        patientTrouv:[],
        id_rdv_Pat:0,
        status:'NotExist',
        idFor:[],
        status1:'NotExist',
        a:0,
        tt:[],
        cc:[],
        k:0,
        bos:0,
        ListFromBDD:[],
        listeSelected:[],
        afficherpatient:[],
        mail:'11',
        nameToSupp:'',
        namePatToSupp:'',
        prevelege:[],
        idd:'',
        namee:'',
    },
    methods: {
        onChange: function(e){
        this.idd = e.target.value;
        this.namee = e.target.options[e.target.options.selectedIndex].text;
        
    },
        setReporte: function(m)
        {
            axios.get('http://127.0.0.1:8000/setReporte/'+m)
        },
        setNonAchev: function(m)
        {
            axios.get('http://127.0.0.1:8000/setNonAchev/'+m)
        },
        setachev:function(m)
        {
            axios.get('http://127.0.0.1:8000/setachev/'+m)
        },
        printPatient: function(m)
        {
            this.bos=m;
            axios.get('http://127.0.0.1:8000/afficherpatient/'+m)
            .then( response => {
                this.afficherpatient=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        getEmail : function(mail)
        {
            this.mail=mail;
            axios.get('http://127.0.0.1:8000/getemail/'+mail)
            .then( response => {
                this.mail=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        setselected : function()
        {
            axios.get('http://127.0.0.1:8000/setselected')
            .then( response => {
                this.listeSelected=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        }
        ,
        selectedDelete : function(ide)
        {
            this.bos=ide;
            axios.get('http://127.0.0.1:8000/supprimerleselectione/'+this.bos)
            .then( response => {
                this.ListFromBDD=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        }
        ,
        print : function(id)
        {
            this.listID.push(id);
            this.name=id;
            

        },
        idToSupp : function(id3)
        {
            
            axios.get('http://127.0.0.1:8000/getNameToSupp/'+id3)
            .then( response => {
                this.nameToSupp=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            this.idTechToSupp=id3;
            this.urlToSupp='gestioncoremedicale/suppression/'+this.idTechToSupp;
            

        },
        idToSuppPat : function(id4)
        {
            axios.get('http://127.0.0.1:8000/namePatToSupp/'+id4)
            .then( response => {
                this.namePatToSupp=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            this.idTechToSuppPat=id4;
            this.urlToSuppPat='gestionpatient/suppression/'+this.idTechToSuppPat;
            

        },

        
        getId : function(id2){
            this.idTech=id2;
            axios.get('http://127.0.0.1:8000/getListeTechniciens/'+this.idTech)
            .then( response => {
                this.listeTech=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
// prevelege
            axios.get('http://127.0.0.1:8000/prevelege/'+id2)
            .then( response => {
                this.prevelege=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })

        },
        
        getPatient: function(id7)
        {  
            for(var i=0; i<this.gg.length; i++){
                if(this.gg[i].id == id7){
                    this.status1='exist';
                    break;
                }
            
            }
            if(this.status1!='exist')
            {
                const distinct=(value,index,self)=>{
                return self.indexOf(value)===index;
            }
             this.id_rdv_Pat=id7;
            axios.get('http://127.0.0.1:8000/getpatient/'+this.id_rdv_Pat)
            .then( response => {
                this.patientTrouv=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            this.gg.push(this.patientTrouv);
            this.status='NotExist';
            }
            //éléminer les reddendance
            
        /*    for(var i=0; i<this.gg.length; i++){
                
                if(this.gg[i].id == id7){
                 this.status = 'Exist';
                 this.idFor.push(this.gg[i].id);
                 this.idFor=this.idFor.filter(distinct);
                    break;
                                  }
            }
            if (this.status=='NotExist')
            {this.gg.push(this.patientTrouv);
                this.status=='Exist';
            }
        */ 
        
       
        
        },
        getIdListFromBDD: function(id8)
        {
            axios.get('http://127.0.0.1:8000/getIdListFromBDD/'+id8)
            .then( response => {
                this.ListFromBDD=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        
        getIdlisteRdv : function(id6)
        {   
           
            const distinct=(value,index,self)=>{
                return self.indexOf(value)===index;
            }
            this.listIdRdv.push(id6);
            
            this.listIdRdv=this.listIdRdv.filter(distinct);
            axios.get('http://127.0.0.1:8000/getlistepatients')
            .then( response => {
                this.patientTrouv=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            
            for(var i=0; i<this.patientTrouv.length; i++){
                for(var j=0; j<this.listIdRdv.length; j++){
                if (this.patientTrouv[i].id==this.listIdRdv[j])
                {   
                   
                    this.tt.push(this.patientTrouv[i]);

                    this.listIdRdv[j]=0;
                    
                    
                    
                }
                
                }
            }
            
            
            
            
        
            
            

        }
    },  
    mounted() {
        this.getListeEmployes();
    },
})


//other
new Vue({
    el:'#app6',
    data:{
        name2:'sofiane',
        lists:[],
        listID:[],
        listRendezVous:[],
        s:'',
        idTech:0,
        idTechToSupp:0,
        urlToSupp:'',
        urlToSuppPat:'',
        listIdRdv:[],
        test3:0,
        listePatientGeted:[],
        gg:[],


        idTechToSuppPat:0,
        listeTech:[],
        patientTrouv:[],
        id_rdv_Pat:0,
        status:'NotExist',
        idFor:[],
        status1:'NotExist',
        a:0,
        tt:[],
        cc:[],
        k:0,
        bos:0,
        ListFromBDD:[],
        listeSelected:[],
        afficherpatient:[],
        mail:'11',
        nameToSupp:'',
        namePatToSupp:'',
        prevelege:[],
        idd:'',
        namee:'',
    },
    methods: {
        onChange: function(e){
        this.idd = e.target.value;
        this.namee = e.target.options[e.target.options.selectedIndex].text;
        
    },
        setReporte: function(m)
        {
            axios.get('http://127.0.0.1:8000/setReporte/'+m)
        },
        setNonAchev: function(m)
        {
            axios.get('http://127.0.0.1:8000/setNonAchev/'+m)
        },
        setachev:function(m)
        {
            axios.get('http://127.0.0.1:8000/setachev/'+m)
        },
        printPatient: function(m)
        {
            this.bos=m;
            axios.get('http://127.0.0.1:8000/afficherpatient/'+m)
            .then( response => {
                this.afficherpatient=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        getEmail : function(mail)
        {
            this.mail=mail;
            axios.get('http://127.0.0.1:8000/getemail/'+mail)
            .then( response => {
                this.mail=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        setselected : function()
        {
            axios.get('http://127.0.0.1:8000/setselected')
            .then( response => {
                this.listeSelected=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        }
        ,
        selectedDelete : function(ide)
        {
            this.bos=ide;
            axios.get('http://127.0.0.1:8000/supprimerleselectione/'+this.bos)
            .then( response => {
                this.ListFromBDD=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        }
        ,
        print : function(id)
        {
            this.listID.push(id);
            this.name=id;
            

        },
        idToSupp : function(id3)
        {
            
            axios.get('http://127.0.0.1:8000/getNameToSupp/'+id3)
            .then( response => {
                this.nameToSupp=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            this.idTechToSupp=id3;
            this.urlToSupp='gestioncoremedicale/suppression/'+this.idTechToSupp;
            

        },
        idToSuppPat : function(id4)
        {
            axios.get('http://127.0.0.1:8000/namePatToSupp/'+id4)
            .then( response => {
                this.namePatToSupp=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            this.idTechToSuppPat=id4;
            this.urlToSuppPat='gestionpatient/suppression/'+this.idTechToSuppPat;
            

        },

        
        getId : function(id2){
            this.idTech=id2;
            axios.get('http://127.0.0.1:8000/getListeTechniciens/'+this.idTech)
            .then( response => {
                this.listeTech=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
// prevelege
            axios.get('http://127.0.0.1:8000/prevelege/'+id2)
            .then( response => {
                this.prevelege=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })

        },
        
        getPatient: function(id7)
        {  
            for(var i=0; i<this.gg.length; i++){
                if(this.gg[i].id == id7){
                    this.status1='exist';
                    break;
                }
            
            }
            if(this.status1!='exist')
            {
                const distinct=(value,index,self)=>{
                return self.indexOf(value)===index;
            }
             this.id_rdv_Pat=id7;
            axios.get('http://127.0.0.1:8000/getpatient/'+this.id_rdv_Pat)
            .then( response => {
                this.patientTrouv=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            this.gg.push(this.patientTrouv);
            this.status='NotExist';
            }
            //éléminer les reddendance
            
        /*    for(var i=0; i<this.gg.length; i++){
                
                if(this.gg[i].id == id7){
                 this.status = 'Exist';
                 this.idFor.push(this.gg[i].id);
                 this.idFor=this.idFor.filter(distinct);
                    break;
                                  }
            }
            if (this.status=='NotExist')
            {this.gg.push(this.patientTrouv);
                this.status=='Exist';
            }
        */ 
        
       
        
        },
        getIdListFromBDD: function(id8)
        {
            axios.get('http://127.0.0.1:8000/getIdListFromBDD/'+id8)
            .then( response => {
                this.ListFromBDD=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
        },
        
        getIdlisteRdv : function(id6)
        {   
           
            const distinct=(value,index,self)=>{
                return self.indexOf(value)===index;
            }
            this.listIdRdv.push(id6);
            
            this.listIdRdv=this.listIdRdv.filter(distinct);
            axios.get('http://127.0.0.1:8000/getlistepatients')
            .then( response => {
                this.patientTrouv=response.data;
            })
            .catch( error => {
                console.log('errors',error);
            })
            
            for(var i=0; i<this.patientTrouv.length; i++){
                for(var j=0; j<this.listIdRdv.length; j++){
                if (this.patientTrouv[i].id==this.listIdRdv[j])
                {   
                   
                    this.tt.push(this.patientTrouv[i]);

                    this.listIdRdv[j]=0;
                    
                    
                    
                }
                
                }
            }
            
            
            
            
        
            
            

        }
    },  
    mounted() {
        this.getListeEmployes();
    },
})

 
</script>


    <script>
        // $(document).ready(function() {
        //     setTimeout(function() {
        //         toastr.options = {
        //             closeButton: true,
        //             progressBar: true,
        //             showMethod: 'slideDown',
        //             timeOut: 4000
        //         };
        //         toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        //     }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>

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
</body>
</html>
