<?php

include_once '../../modelo/usuarios/UsuariosM.php';

class UsuariosC extends UsuariosM {

    public $datos = array();

    public function ConsultarUsuariosC() {
        $DataUsuarios = $this->ConsultarUsuariosM();

        if ($DataUsuarios['error']) {
            $this->datos = $DataUsuarios['mensaje'];
        } else {
            $this->datos = $DataUsuarios['data'];
            require_once '../../vista/usuarios/usuarios.php';
        }
    }

    public function NuevoUsuario() {
        require_once '../../vista/usuarios/nuevo.php';
    }

    public function ConsultarUsuarioC($pUsuCod = '') {
        $DataUsuario = $this->consultarUsuarioM($pUsuCod);

        if ($DataUsuario['error']) {
            $this->datos = $DataUsuario['error'];
        } else {
            $this->datos = $DataUsuario['data'];
            require_once '../../vista/usuarios/editar.php';
        }
    }

    public function GuardarUsuarioC($data = array()) {
        $DataUsuarios = $this->GuardarUsuarioM($data);

        if (!$DataUsuarios['error']) {
            $this->ConsultarUsuariosC();
        }
    }

    public function EditarUsuarioC($data = array()) {
        $DataUsuario = $this->EditarUsuarioM($data);

        if (!$DataUsuario['error']) {
            $this->ConsultarUsuariosC();
        }
    }

    public function EliminarUsuarioC($pUsuCod = '') {
        $DataUsuario = $this->EliminarUsuarioM($pUsuCod);

        if (!$DataUsuario['error']) {
            $this->ConsultarUsuariosC();
        }
    }

}

$grupo_pag = new UsuariosC();
if ($_POST) {
    $modo = $_POST['modo'];
    echo $modo;
    switch ($modo) {
        case $modo == 'ver':
            $dat_usu = $grupo_pag->ConsultarUsuariosC();
            break;
        case $modo == 'nuevo':
            $dat_usu = $grupo_pag->NuevoUsuario();
            break;
        case $modo == 'guardar':
            $data = $_POST['data'];
            $dat_usu = $grupo_pag->GuardarUsuarioC($data);
            break;
        case $modo == 'eliminar':
            $UsuCod = $_POST['usu_cod'];
            $dat_usu = $grupo_pag->EliminarUsuarioC($UsuCod);
            break;
        case $modo == 'editar':
            $data = $_POST['data'];
            $dat_usu = $grupo_pag->EditarUsuarioC($data);
            break;
        case $modo == 'consultar':
            $UsuCod = $_POST['usu_cod'];
            $grupo_pag->ConsultarUsuarioC($UsuCod);
            break;
    }
}