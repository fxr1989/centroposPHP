<?php 
	$usuario = $query[0]; 
?>
<div class="panel panel-success">
	<div class="panel-heading">
		<strong>Modificar usuario</strong>
	</div>
	<div class="panel-body">
		<div class="panel-body">
		<form action="/usuarios/editar" method="post">
			<input type="hidden" value="<?php echo $usuario->usercompanyID; ?>" name="usercompanyID" />
			<div class="form-group row">
			  <label for="firstname" class="col-xs-2 col-md-2 col-form-label">Nombres</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese los nombres" name="firstname" value="<?php echo $usuario->firstname; ?>">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="lastname" class="col-xs-2 col-md-2 col-form-label">Apellidos</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese los apellidos" name="lastname" value="<?php echo $usuario->lastname; ?>">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="email" class="col-xs-2 col-md-2 col-form-label">Correo</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="email" placeholder="Ingrese el correo electronico" name="email" value="<?php echo $usuario->email; ?>" required>
			  </div>
			</div>
			<div class="form-group row">
			  <label for="password" class="col-xs-2 col-md-2 col-form-label">Contraseña</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="password" placeholder="Ingrese la contraseña" name="password">
			  </div>
			</div>			
			<div class="row">
				<div class="form-group col-xs-6 col-md-6 col-lg-6 col-xl-6">
					<label for="administrator" class="col-form-label">Administrador</label>
					<div class="">
						<input type="checkbox" name="administrator" <?php echo ($usuario->administrator == 1)?"checked":""; ?>>
					</div>
				</div>			
				<div class="form-group col-xs-6 col-md-6 col-lg-6 col-xl-6">
					<label for="activo" class="col-form-label">Activo</label>
					<div class="">
						<input type="checkbox" name="activo" <?php echo ($usuario->activo == 1)?"checked":""; ?>>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Bodega</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="bodega_v" <?php echo ($usuario->bodega_v == 1)?"checked":"";?>/>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="bodega_n" <?php echo ($usuario->bodega_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="bodega_m" <?php echo ($usuario->bodega_m == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="bodega_e" <?php echo ($usuario->bodega_e == 1)?"checked":"";?>>
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Marcas</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="marca_v" <?php echo ($usuario->marca_v == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="marca_n" <?php echo ($usuario->marca_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="marca_m" <?php echo ($usuario->marca_m == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="marca_e" <?php echo ($usuario->marca_e == 1)?"checked":"";?>>
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Categorias</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="categoria_v" <?php echo ($usuario->categoria_v == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="categoria_n" <?php echo ($usuario->categoria_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="categoria_m" <?php echo ($usuario->categoria_m == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="categoria_e" <?php echo ($usuario->categoria_e == 1)?"checked":"";?>>
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Productos</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="producto_v" <?php echo ($usuario->producto_v == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="producto_n" <?php echo ($usuario->producto_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="producto_m" <?php echo ($usuario->producto_m == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="producto_e" <?php echo ($usuario->producto_e == 1)?"checked":"";?>>
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Categoria de Clientes</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_v" <?php echo ($usuario->categoria_cliente_v == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_n" <?php echo ($usuario->categoria_cliente_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_m" <?php echo ($usuario->categoria_cliente_m == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_e" <?php echo ($usuario->categoria_cliente_e == 1)?"checked":"";?>>
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Clientes</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="cliente_v" <?php echo ($usuario->cliente_v == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="cliente_n" <?php echo ($usuario->cliente_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="cliente_m" <?php echo ($usuario->cliente_m == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="cliente_e" <?php echo ($usuario->cliente_e == 1)?"checked":"";?>>
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Facturas</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="factura_v" <?php echo ($usuario->factura_v == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="factura_n" <?php echo ($usuario->factura_n == 1)?"checked":"";?>>
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Anular</label>
						<div class="">
							<input type="checkbox" name="factura_anular" <?php echo ($usuario->factura_anular == 1)?"checked":"";?>>
						</div>
					</div>				
				</fieldset>
			</div>
			<div class="form-group row">				
		      	<div class="center">
		        	<button type="submit" class="btn btn-primary">Guardar</button>
		      	</div>		      
		  </div>
		</form>
	</div>
</div>