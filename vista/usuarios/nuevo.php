<div class="container">
    <div class="row">
        <div class="col s12">
            <h5 class="blue-grey-text text-lighten-2">Nuevo usuario</h5>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="NomUsu" type="text" class="validate">
            <label for="NomUsu">Usuario</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input id="PasUsu" type="password" class="valid">
            <label for="PasUSu">Contraseña</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">mail</i>
            <input id="EmaUsu" type="email" class="validate">
            <label for="EmaUsu">Mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12" >           
            <button onclick="guardar()" class="waves-effect waves-light btn blue">
                Guardar
                <i class="material-icons right">save</i>
            </button>
            <button onclick="regresar()" class="btn waves-effect waves-light blue">
                Regresar
                <i class="material-icons right">clear</i>
            </button>             
        </div>        
    </div>  
</div>
<script type="text/javascript" src="../../js/usuarios/usuarios.js"></script>
<script type="text/javascript" src="../../recursos/js/materialize.min.js"></script>
