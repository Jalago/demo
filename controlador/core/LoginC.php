<?php

session_start();
include_once '../../modelo/core/LoginM.php';

class LoginC extends LoginM {

    public $datos = array();

    public function ConsultarLoginC($UsuNom = '', $UsuPas = '') {
        $DataUsuario = $this->ConsultarLoginM($UsuNom, $UsuPas);
        $usu_cod = '';
        
        If ($DataUsuario['error']) {
            $this->datos = $DataUsuario['mensaje'];
        } else {
            foreach ($DataUsuario['data'] as $usuario) {
                $usu_cod = $usuario['UsuCod'];
                $usu_nom = $usuario['UsuNom'];
                $usu_ema = $usuario['UsuEma'];
            }
            if ($usu_cod) {
                $_SESSION['UsuCod'] = $usu_cod;
                $_SESSION['UsuNom'] = $usu_nom;
                $_SESSION['UsuEma'] = $usu_ema;
            }

            $this->datos = $DataUsuario['data'];
        }
    }

}

$usuarioc = new LoginC();
if ($_POST) {
    $modo = $_POST['modo'];
    switch ($modo) {
        case $modo == 'cns':
            $UsuNom = $_POST['UsuNom'];
            $UsuPas = $_POST['UsuPas'];
            $usuarioc->ConsultarLoginC($UsuNom, $UsuPas);
            echo json_encode($usuarioc->datos, JSON_PRETTY_PRINT);
            break;
    }
}
