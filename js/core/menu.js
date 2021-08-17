function cerrar_sesion(){
     location.href = 'login.php'
};

function usuarios() {
    $.post("../../controlador/usuarios/UsuariosC.php",{
        modo:'ver'
    },function( respuesta ){
        $("#cargar_contenido").html(respuesta);
    },'html');
}

