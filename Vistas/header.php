<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Le vamos a decir al navegasdor que el diseño que vamos a realizar va a ser responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas Ventas</title>
    <!--Añadimos todos los componenetes de Bootstrap 3.3.5-->
    <link rel="stylesheet" href="../Public/bootstrap/css/bootstrap.min.css">
    <!--Añadimos otra libreria-->
    <link rel="stylesheet" href="../Public/css/font-awesome.css">
    <!--Añadimos la libreria del tema de estilos AdminLTE-->
    <link rel="stylesheet" href="../Public/css/AdminLTE.min.css">
    <!--Añadimos Librerias de AdminLTE-->
    <link rel="stylesheet" href="../Public/css/_all-skins.min.css">
    <!--Librerias de icono de navegador-->
    <link rel="shortcut icon" href="../Public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../Public/img/favicon.ico">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!--Div que contiene toda la estructura del body-->
    <div class="wrapper">
        <!--Aqui va el header-->
        <header class="main-header">
            <!--Logo-->
            <a href="#" class="logo">
                <!--Creamos un mini logo para el sidebar mini 50x50px-->
                <span class="logo-mini"><b>Sistemas</b>Ventas</span>
                <!--logo para un dispositivo normal y disp moviles-->
                <span class="logo-lg"><b>Sistemas Ventas</b></span>
            </a>
            <!--Fin del Logo-->
            <!--Aqui va el header del navbar: los estilos se puden encotrar en header.les-->
            <nav class="navbar navbar-static-top" role="navigation">
                <!--Boton de la hamburguesa del navbar-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegacion</span>

                </a>
                <!--Navbar menu derecho-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!--Cuenta de Usuario: los estilos estan en dropdown.less-->
                        <li class="dropdrown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--Cargamos la imagen del usuario-->
                                <img src="../Public/img/freddy.jpg" alt="Imagen Usuario" class="user-image">
                                <!--Nombre de Usuario-->
                                <span class="hidden-xs">Dave Quintero</span>
                            </a>
                            <!--Desplegable del usuario-->
                            <ul class="dropdown-menu">
                                <!--Imagen del usuario-->
                                <li class="user-header">
                                    <img src="../Public/img/freddy.jpg" alt="Imagen de Usuario" class="img-circle">
                                    <p>Dave Quintero</p>
                                </li>
                                <!--Menu footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">SALIR</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav><!--Fin del navbar-->
        </header><!--Fin del header-->

        <!--Menu izq en columna contiene un logo y el sidebar-->
        <aside class="main-sidebar">
            <section class="sidebar">
                <!--Ponemos cadaa uno de los menus-->
                <ul class="sidebar-menu">

                    <li class="header">Sistema Ventas</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span>Configuracion</span>
                        </a>
                    </li>
                    <!--Lista escritorio-->
                    <li>
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Escritorio</span>
                        </a>
                    </li>
                    <!--Lista Almacén-->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-laptop"></i>
                            <span>Almacén</span>
                            <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="articulo.php"> <i class="fa fa-circle-o"></i>Articulos
                                </a></li>
                            <li><a href="Categoria.php"> <i class="fa fa-circle-o"></i>Categorías
                                </a></li>
                        </ul>
                    </li><!--Fin de lista de almacén-->
                    <!--Lista de Personas-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Ventas</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="veta.php"><i class="fa fa-circle-o"></i>Ventas</a></li>
                            <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
                        </ul>
                    </li><!--Fin de lista de Personas-->
                    <!--Lista Acceso-->
                    <li class="class treeview">
                        <a href="#"><i class="class fa fa-folder"></i>
                            <span>Acceso</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                            <li><a href="permiso.php"><i class="fa fa-circle-o"></i>Permisos</a></li>
                        </ul>
                    </li>
                </ul>
            </section>


        </aside><!--Fin del sidebar-->