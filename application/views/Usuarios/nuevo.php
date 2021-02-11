
<div class="panel panel-success">
	<div class="panel-heading">
		<strong>Nuevo usuario</strong>
	</div>
	<div class="panel-body">
		<form action="/usuarios/guardar" method="post">
			<div class="form-group row">
			  <label for="firstname" class="col-xs-2 col-md-2 col-form-label">Nombres</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese los nombres" name="firstname">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="lastname" class="col-xs-2 col-md-2 col-form-label">Apellidos</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese los apellidos" name="lastname">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="email" class="col-xs-2 col-md-2 col-form-label">Correo</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="email" placeholder="Ingrese el correo electronico" name="email" required>
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
						<input type="checkbox" name="administrator" id="administrator">
					</div>
				</div>			
				<div class="form-group col-xs-6 col-md-6 col-lg-6 col-xl-6">
					<label for="activo" class="col-form-label">Activo</label>
					<div class="">
						<input type="checkbox" name="activo" id="activo">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Bodega</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="bodega_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="bodega_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="bodega_m">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="bodega_e">
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Marcas</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="marca_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="marca_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="marca_m">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="marca_e">
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Categorias</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="categoria_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="categoria_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="categoria_m">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="categoria_e">
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Productos</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="producto_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="producto_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="producto_m">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="producto_e">
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Categoria de Clientes</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_m">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="categoria_cliente_e">
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Clientes</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="cliente_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="cliente_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Modificar</label>
						<div class="">
							<input type="checkbox" name="cliente_m">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Eliminar</label>
						<div class="">
							<input type="checkbox" name="cliente_e">
						</div>
					</div>
				</fieldset>
				<fieldset class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-11">
					<legend>Facturas</legend>
					<div class="form-group">
						<label for="activo" class="col-form-label">Ver</label>
						<div class="">
							<input type="checkbox" name="factura_v">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Nuevo</label>
						<div class="">
							<input type="checkbox" name="factura_n">
						</div>
					</div>
					<div class="form-group">
						<label for="activo" class="col-form-label">Anular</label>
						<div class="">
							<input type="checkbox" name="factura_anular">
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