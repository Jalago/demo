<?php
session_start();
if($_SESSION['UsuNom']){
   // include_once './login.php';
}
?>
<!DOCTYPE HTML>
<html lang="es">
    <head profile="http://www.w3.org/2005/10/profile">
        <meta http-equiv="content-type" content="text/html; charser=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../../recursos/css/materialize.min.css" media="screen,projection">
        <title>Prueba | Bienvenido</title>
    </head>
    <body>
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper blue" id="opts">
                        <a href="#!" name="menu" class="brand-logo center">Prueba</a>
                        <ul class="right hide-on-med-and-down">                            
                            <li><a name="cerrar_sesion" onclick="cerrar_sesion()"><i class="material-icons">login</i></a></li>
                        </ul>
                    </div>
                </nav>
                <ul id="slide-out" class="sidenav sidenav-fixed">
                    <li><div class="user-view">
                            <div class="background">
                                <img src="../../recursos/imagen/fondo.png">
                            </div>
                            <a href="#user"><img class="circle" src="../../recursos/imagen/myavatar.jpg"></a>
                            <a href="#name"><span class="white-text name"><?php echo $_SESSION['UsuNom']; ?></span></a>
                            <a href="#email"><span class="white-text email"><?php echo $_SESSION['UsuEma']; ?></span></a>
                        </div></li>
                    <li><a onclick="usuarios()">Usuarios</a></li>
                </ul>
            </div>
        </header>
        <main>            
            <!-- loader -->
            <div class="container" id="div_carga" style="display: none">
                <div class="row">      
                    <div class="col s4"><p></p></div>
                    <div class="col s4">
                        <div >
                            <div class="preloader-wrapper big active" id="cargador">
                                <div class="spinner-layer spinner-blue-only">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div><div class="gap-patch">
                                        <div class="circle"></div>
                                    </div><div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s4"><p></p></div>
                </div>
            </div>
            <!-- aqui carga el contenido -->
            <div id="cargar_contenido"></div>
            <script type="text/javascript" src="../../js/core/menu.js"></script> 
            <script type="text/javascript" src="../../recursos/js/jquery.js"></script> 
            <script type="text/javascript" src="../../recursos/js/materialize.min.js"></script>
        </main>                     
    </body>
</html>