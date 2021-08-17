<div class="container">
    <div class="row">
        <div class="col s12">
            <h5 class="blue-grey-text text-lighten-2">Usuarios</h5>
        </div>
    </div>
    <!-- filtros -->
    <div class="row"></div>
    <div class="row">
        <div class="col s12">
            <table class="responsive-table striped">
                <thead>
                    <tr>
                        <th>Codigó</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($this->datos) > 0):
                        foreach ($this->datos as $usuarios):
                            ?>
                            <tr>
                                <td><?php echo $usuarios['UsuCod']; ?></td>
                                <td><?php echo $usuarios['UsuNom']; ?></td>
                                <td>
                                    <button onclick="consultar('<?php echo $usuarios['UsuCod']; ?>', 'editar');" class="btn-floating waves-effect waves-light blue">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </td>
                                <td>
                                    <button  onclick="eliminar('<?php echo $usuarios['UsuCod']; ?>', 'eliminar');" class="btn-floating waves-effect waves-light modal-trigger red">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </td>  
                            </tr>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue" onclick="nuevo()">
            <i class="large material-icons">add</i>
        </a>
    </div>
</div>
<script type="text/javascript" src="../../js/usuarios/usuarios.js"></script>