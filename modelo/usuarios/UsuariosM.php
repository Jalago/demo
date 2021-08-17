<?php

include_once '../../sistema/Conexion.php';

class UsuariosM extends Conexion {

    public $datos = array();

    protected function GuardarUsuarioM($data = array()) {
        print_r($data);
        $pUsuNom = $data['usu_nom'];
        $pUsuPas = $data['usu_pas'];
        $pUsuEma = $data['usu_ema'];

        $cns_guardar = "insert into usuarios (UsuNom, UsuPas, UsuEma)" .
                "values('$pUsuNom','$pUsuPas','$pUsuEma');";

        return $this->ejecutar($cns_guardar);
    }

    protected function ConsultarUsuariosM() {
        $cns_consultar_usuarios = "select * from usuarios";

        return $this->consultar($cns_consultar_usuarios);
    }

    protected function consultarUsuarioM($UsuCod = '') {
        $cns_consultar_usuario = "select * from usuarios " .
                "where UsuCod = '$UsuCod';";

        return $this->consultar($cns_consultar_usuario);
    }

    protected function EditarUsuarioM($data = array()) {
        $pUsuCod = $data['usu_cod'];
        $pUsuNom = $data['usu_nom'];
        $pUsuPas = $data['usu_pas'];
        $pUsuEma = $data['usu_ema'];

        $cns_editar_usuarios = "update usuarios " .
                "set UsuNom = '$pUsuNom', UsuPas = '$pUsuPas', UsuEma = '$pUsuEma' " .
                "where UsuCod = '$pUsuCod'";

        return $this->ejecutar($cns_editar_usuarios);
    }

    protected function EliminarUsuarioM($pUsuCod = '') {
        $cns_eliminar_usuario = "delete from usuarios " .
                "where UsuCod = '$pUsuCod'";

        return $this->ejecutar($cns_eliminar_usuario);
    }
}
