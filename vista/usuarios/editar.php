<?php 
    foreach($this->datos as $info_usuarios){
        $usu_cod = $info_usuarios['UsuCod'];
        $usu_nom = $info_usuarios['UsuNom'];
        $usu_pas = $info_usuarios['UsuPas'];
        $usu_ema = $info_usuarios['UsuEma'];
    }
?>
<div class="container">
    <input id="CodUsu" type="hidden" class="validate" value="<?php echo $usu_cod;?>">
    <div class="row">
        <div class="col s12">
            <h5 class="blue-grey-text text-lighten-2">Editar usuario</h5>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="NomUsu" type="text" class="validate" value="<?php echo $usu_nom;?>">
            <label for="NomUsu">Usuario</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input id="PasUsu" type="password" class="valid"value="<?php echo  $usu_pas;?>">
            <label for="PasUSu">Contraseña</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">mail</i>
            <input id="EmaUsu" type="email" class="validate" value="<?php echo $usu_ema;?>">
            <label for="EmaUsu">Mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12" >           
            <button onclick="editar()" class="waves-effect waves-light btn blue">
                Editar
                <i class="material-icons right">edit</i>
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