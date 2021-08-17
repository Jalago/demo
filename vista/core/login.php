<!DOCTYPE HTML>
<html lang="es">
    <head profile="http://www.w3.org/2005/10/profile">
        <meta http-equiv="content-type" content="text/html; charser=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../../recursos/css/materialize.min.css" media="screen,projection">
        <title>Demo | Bienvenido</title>
    </head>
    <body>
        <header>
            <style>
                body::before {
                background-image: url('../..//recursos/imagen/fondo.png');
                background-size: cover;
                background-attachment: fixed;
                content: '';
                will-change: transform;
                z-index: -1;
                left: 0;
                right: 0;
                bottom: 0;
                top: 0;
                position: fixed;
            }
            </style>
        </header>
        <main>           
            <div class="container" style="margin-top: 6em;">
                <div class="row valign-wrapper">
                    <div class="col l3"><p></p></div>
                    <div class="col s12 m12 l6">
                        <div class="card-panel valign center">
                            <div class="row">
                                <div class="input-field col l1"></div>
                                <div class="input-field col s12 m12 l10">
                                    <img src="../../recursos/imagen/myavatar.jpg" alt="" height="50"  width="200"class="circle responsive-img">
                                </div>
                                <div class="input-field col l1"></div>
                            </div>                            
                            <div class="row">
                                <div class="input-field col l1"></div>
                                <div class="input-field col s12 m12 l10">
                                    <h4>Bienvenido</h4>
                                    <h6>Esto es una prueba</h6>
                                    <small>Prueba</small>
                                </div>
                                <div class="input-field col l1"></div>
                            </div>
                            <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                            <div class="row">
                                <div class="input-field col s1"></div>
                                <div class="input-field col s10">
                                    <input id="name" type="text">
                                    <label for="name">Usuario</label>
                                </div>
                                <div class="input-field col s1"></div>
                            </div>
                            <div class="row">
                                <div class="input-field col s1"></div>
                                <div class="input-field col s10">
                                    <input id="pass" type="password">
                                    <label for="pass">Contraseña</label>
                                </div>
                                <div class="input-field col s1"></div>
                            </div> 
                            <div class="row valign-wrapper">
                                <div class="col s12 valign center">
                                    <button class="btn waves-effect waves-light" onclick="consultar_usuario()">
                                        Login
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 0.5em; margin-bottom: 2.5em;"></div>      
                            <div class="row">
                                <div class="col s12">
                                    <a href="#!">¿ Olvidaste tu contraseña ?</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col l3"><p></p></div>
                </div>
            </div>
            <script type="text/javascript" src="../../js/core/login.js"></script> 
            <script type="text/javascript" src="../../recursos/js/jquery.js"></script> 
            <script type="text/javascript" src="../../recursos/js/materialize.min.js"></script>
        </main>        
    </body>
</html>