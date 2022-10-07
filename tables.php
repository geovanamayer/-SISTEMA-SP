<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Superpao-User</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="sb-admin-2.css" rel="stylesheet" type="text/css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
   


    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <img src="img/logo.png">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">Sistema Superão<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <!--COMPONENTES-->
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

<!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
 <!---ULTILITIES-->
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
<!---PAGES-->                      
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    
                    
                    <!-- Sidebar Toggle (Topbar) --> <!--FORMULARIO-->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    
                    
                    
                    
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    
                    
                    
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                           
                           
                            </a>



<!---MENSAGEM NOTICAÇÃO-->                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>


                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>


                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"></div>
                                        <span class="font-weight-bold"></span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"></div>
                                        
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"></div>
                                        
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">
                                            </div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                        </div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            </div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            </div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800"> CADASTRAR USUARIOS</h1></center>
                    <p class="mb-4">
                        <a target="_blank"
                        href="https://datatables.net"></a></p>


<!-- INICIO FORMULARIO -->
 <!--CSS-->
 <style>
        #listaRegistros{ display: none; }
        #cadastroRegistro{
            display: none;
            flex-direction: column;
            gap: 30px;
        }

        body[page=lista] #listaRegistros{ display: block; }
        body[page=cadastro] #cadastroRegistro{ display: flex; }

        body{
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }
        table th,
        table td{
            font-size: 14px;
            padding: 10px 15px;
            border: solid 1px rgb(0, 0, 0);
            border-radius: 25px;
            color: rgb(0, 0, 0);
        }

        button{
            border: none;
            border-radius: 25px;
            cursor: pointer;
            background-color: rgb(94, 116, 241);
            color: #fff;
            margin: 3px;
            padding: 10px 15px;
        }
        button.cinza{
            background-color: #ccc;
            color: rgb(179, 180, 184);
        }
        button.vermelho{
            background-color: rgb(255, 45, 45);
        }
        button:hover{
            opacity: 0.8;
        }

        input{
            border: solid 1px #ccc;
            border-radius: 4px;
            padding: 10px;
        }

        .label>div{
            display: flex;
            color:black
        }
        .label>div>input{
            flex: 1;
            color:black
        }

        .inputBox{
                position: relative;
                                    
                   
            }
    </style>
    <!--SCRIPT-->
    <script type='text/javascript' src="main.js"></script>


    <!--FORM E CONECT PHP-->


    <?php
    error_reporting(E_ERROR | E_PARSE);
    if(isset($_POST['submit']))
        {  
            
            // print_r('Login:'.$_POST['login']);
            // print_r('<br>');
            // print_r('Nome:' .$_POST['nome']);
            // print_r('<br>');
            // print_r('Unidades:' .$_POST['unidades']);
            // print_r('<br>');
            // print_r('Setor:' .$_POST['setor']);
            // print_r('<br>');
            // print_r('Senha:' .$_POST['senha']);
        
        }
        
        include_once('config.php');
       //$sql = "SELECT * FROM usuarios ORDER BY id DESC";
        
        //$result = pg_query($conexao,$query);
      //  print_r($result);

        $login = $_POST['login'];
        $nome = $_POST['nome'];
        $unidades = $_POST['unidades'];
        $setor = $_POST['setor'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        

        $query = "INSERT INTO usuarios(login_usuario, nome_usuario, unidades_validas, filtro_setor, senha_usuario, email_usuarios) 
        VALUES ('$login', '$nome', '$unidades', '$setor', '$senha', '$email')";
   
   
//        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
        $result = pg_query($conexao,$sql);
      //   $result = pg_query($conexao,$query);
     
      // $result = $conexao->pg_query($sql);
    //    print_r($result);
        
        
    ?>
    <body page='lista'autocomplete="off" action="tables.php" method="POST">
        
        <div id='listaRegistros'>

    <div style='display: flex;'>
        <input style='flex:1'  placeholder="PESQUISAR" autofocus id='inputPesquisa' />
    </div>
    <br>

    <!--FORMULARIO WHILE PHP PARA CONECT DA TABELA-->
    <div>
    <table class="table">
    <thead>
        <tr>
    

        
                
                </td> 
                
            
                <th scope="col">Login</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Setor</th>
                <th scope="col">Senha</th>
                <th scope="col">Unidade</th>
                <th scope="col"></th> 
     

        </tr>
    </thead>


    </table>
    </div>

    <!--BUTTON NOVO-->

    <div>
        <button autocomplete="off" action="tables.phps" method="POST" onclick="vizualizar('cadastro', true)">Novo usuário</button>
    </div>

    </div>
    <div class="box">

    <!--FORMULARIO QUE CADASTRA NO BANCO--->
                <form autocomplete="off" action="tables.php" method="POST" id="">
                    <fieldset>
                        <legend><b><h2></h2></b></legend>
                        
                        <div class="inputBox" >

                        <input type="text" name="login" id="login" class="inputUser"  required maxlength="3" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                            <label for="login" class="labelinput"> Login</label>
                        </div>
                        
                        <div class="inputBox">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelinput"> Nome</label>
                        </div>
                        
                        <div class="inputBox">
                        <input type="text" name="unidades" id="unidades" class="inputUser" required>
                            <label for="unidades" class="labelinput"> Unidades </label>
                        </div>
                        
                        <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <br>    
                        <label for="email" class="labelinput"> Email </label>
                        </div>
                        
                        <div class="inputBox">
                        
                        <fieldset>
                            <legend> Setor </legend>
                            <div class="caixa">
                                
                            <input type = "checkbox" id = "comercial" name = "setor" value = "comercial">
                            <label for = "comercial"> Comercial </label>
                            
                            <input type = "checkbox" id = "Controladoria" name = "setor" value = "controladoria">
                            <label for = "controladoria"> Controladoria </label>
                            
                                <input type = "checkbox" id = "contabilidade" name = "setor" value = "contabilidade">
                                <label for = "contabilidade"> Contabilidade </label>
                            
                                <input type = "checkbox" id = "financeiro" name = "setor" value = "financeiro">
                                <label for ="financeiro"> Financeiro </label>
                            
                            
                            <div>
                                <input type = "checkbox" id = "supply" name = "setor" value = "supply">
                            <label for = "supply"> Supply </label>
                            
                            <input type = "checkbox" id = "marketing" name = "setor" value = "marketing">
                            <label for = "marketing"> Marketing </label>
                            
                                <input type = "checkbox" id = "pricing" name = "setor" value = "pricing">
                                <label for = "pricing"> Pricing </label>
                            
                                <input type = "checkbox" id = "rh" name = "setor" value = "rh">
                                <label for ="rh"> RH </label>
                            </div>
                            </fieldset>
                        </div>
                        
                        <div class="inputBox">
                            <input type="text" name="senha" id="senha" class="inputUser" required>
                            <label for="senha" class="labelinput"> Senha</label>
                        </div>
                        <div>
                        <button>Salvar</button>
                <button onclick="vizualizar('lista')" class="cinza" type='button'>Cancelar</button>
            </div>

                    </fieldset>
                </form>        
            </div>

    <!---formulario acaba aqui-->



<!--FINAL DA PAGINA-->          
<!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
    
</html>
                      