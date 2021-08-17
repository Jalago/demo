<?php

include_once '../../sistema/Conexion.php';

class LoginM extends Conexion{
    protected function ConsultarLoginM($UsuCod = '',$UsuPas = '') {
        $cns_usuario = "select * from usuarios "
                . "Where UsuNom = '$UsuCod' and UsuPas = '$UsuPas'";
        
        return $this->consultar($cns_usuario);
    }
}
