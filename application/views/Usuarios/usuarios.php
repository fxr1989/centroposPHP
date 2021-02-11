<div class="panel panel-success">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-6 col-md-6 text-left">
                <strogn>Lista de Usuarios</strogn>
            </div>
            <div class="col-xs-6 col-md-6 text-right">
                <a class="blanco cursor-pointer" href="usuarios/nuevo">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-default">
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Administrador</th>
                    <th>Activo</th>
                    <th>Modificar</th>
                </thead>
                <tbody>
                    <?php
                        foreach($query as $fila){
                    ?>
                    <tr>
                        <td><?php echo $fila->firstname; ?></td>
                        <td><?php echo $fila->lastname; ?></td>
                        <td><?php echo $fila->email; ?></td>
                        <td class="center"><input type="checkbox" <?php echo ($fila->administrator == 1)?"checked":""; ?> disabled data-group-cls="btn-group-horizontal"/></td>
                        <td class="center"><input type="checkbox" <?php echo ($fila->activo == 1)?"checked":""; ?> disabled data-group-cls="btn-group-horizontal" /></td>
                        <td class="center">
                            <a class="cursor-pointer" href="<?php echo base_url().'usuarios/modificar/'.$fila->usercompanyID; ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

