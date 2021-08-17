function consultar_usuario() {
    $.post('../../controlador/core/LoginC.php', {
        modo: 'cns',
        UsuNom: $('#name').val(),
        UsuPas: $('#pass').val(),
    }, function (data) {
        var contador = 0;
        for (var i in data) {
            console.log(data[i].UsuNom);
            if (data[i].UsuNom) {
                contador += 1;
            }
        };
        if (contador > 0) {
            location.href = 'menu.php'
        } else {
            var toastHTML = '<span>Error el usuario o contraseña no son validos</span>';
            M.toast({html: toastHTML});
        }
    }, 'json');
};