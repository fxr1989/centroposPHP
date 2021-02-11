
	<div class="panel panel-success">
		<div class="panel-heading">
            <div class="row">
                <div class="col-xs-6 col-md-6 text-left">
                    <strong>Lista de Productos</strong>            
                </div>
                <div class="col-xs-6 col-md-6 text-right">
                <?php if($nuevo == '1') { ?>
                    <a class="blanco cursor-pointer" href="<?php echo base_url().'productos/nueva/';?> ">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                <?php } ?>
                </div>
            </div>           
        </div>                    	
        <div class="panel-body">
        <div class="table-responsive">
        	<table class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Codigo de barra</th>
                        <th>Precio</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Servicio</th>
                        <th>IVA</th>
                        <th colspan="2" class="center">Acción</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php
						foreach ($query as $fila) {
					?>		
						<tr>
							<td><?php echo $fila->codigo ?></td>
                            <td><?php echo $fila->descripcion ?></td>
                            <td><?php echo $fila->codigo_barra ?></td>
                            <td><?php echo $fila->precio ?></td>
                            <td><?php echo $fila->brand ?></td>
                            <td><?php echo $fila->category ?></td>
                            <td class="center"><input type="checkbox" <?php echo ($fila->service == 1)?"checked":""; ?> disabled data-group-cls="btn-group-vertical"/></td>
                            <td class="center"><input type="checkbox" <?php echo ($fila->taxFree == 1)?"checked":""; ?> disabled data-group-cls="btn-group-vertical" /></td>
                            <td class="center">
                            <?php if($editar == '1') {?>
                                <a class="cursor-pointer" href="<?php echo base_url().'productos/modificar/'.$fila->productID; ?>">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                            <?php } ?>
                            </td>
                            <td class="center">
                            <?php if($eliminar == '1') {?>
                                <a class="cursor-pointer" href="<?php echo base_url().'productos/eliminar/'.$fila->productID; ?>">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            <?php } ?>
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


   