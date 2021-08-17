function nuevo() {
    $.post("../../controlador/usuarios/UsuariosC.php", {
        modo: 'nuevo'
    }, function (respuesta) {
        $("#cargar_contenido").html(respuesta);
    }, 'html');
}

function regresar() {
    $.post("../../controlador/usuarios/UsuariosC.php", {
        modo: 'ver'
    }, function (respuesta) {
        $("#cargar_contenido").html(respuesta);
    }, 'html');
}

function guardar() {
    var data_form = {
        usu_nom: $('#NomUsu').val(),
        usu_pas: $('#PasUsu').val(),
        usu_ema: $('#EmaUsu').val()
    };

    $.post("../../controlador/usuarios/UsuariosC.php", {
        modo: 'guardar',
        data: data_form
    }, function (respuesta) {
        $("#cargar_contenido").html(respuesta);
    }, 'html');
}

function eliminar(UsuCod) {
    $.post("../../controlador/usuarios/UsuariosC.php", {
        modo: 'eliminar',
        usu_cod: UsuCod
    }, function (respuesta) {
        $("#cargar_contenido").html(respuesta);
    }, 'html');
}

function consultar(UsuCod) {
    $.post("../../controlador/usuarios/UsuariosC.php", {
        modo: 'consultar',
        usu_cod: UsuCod
    }, function (respuesta) {
        $("#cargar_contenido").html(respuesta);
    }, 'html');
}

function editar() {
    var data_form = {
        usu_cod: $('#CodUsu').val(),
        usu_nom: $('#NomUsu').val(),
        usu_pas: $('#PasUsu').val(),
        usu_ema: $('#EmaUsu').val()
    };

    $.post("../../controlador/usuarios/UsuariosC.php", {
        modo: 'editar',
        data: data_form
    }, function (respuesta) {
        $("#cargar_contenido").html(respuesta);
    }, 'html');
}