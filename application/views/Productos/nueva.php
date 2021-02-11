
<div class="panel panel-success">
	<div class="panel-heading">
		<strong>Nuevo producto</strong>
	</div>
	<div class="panel-body">
		<form action="/productos/guardar" method="post">
			<div class="form-group row">
			  <label for="codigo" class="col-xs-2 col-md-2 col-form-label">Codigo</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese el codigo" name="codigo">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="descripcion" class="col-xs-2 col-md-2 col-form-label">descripcion</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese la descripcion" name="descripcion">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="codigo_barra" class="col-xs-2 col-md-2 col-form-label">Codigo de Barra</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese el codigo de barra" name="codigo_barra">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="precio" class="col-xs-2 col-md-2 col-form-label">Precios</label>
			  <div class="col-xs-12 col-md-12">
			    <input class="form-control" type="text" placeholder="Ingrese el precio" name="precio">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="brandID" class="col-xs-2 col-md-2 col-form-label">Marca</label>
			  <div class="col-xs-12 col-md-12">
			    <select class="selectpicker form-control" name="brandID">
			    	<?php foreach($brand as $marca){ ?>
			    			<option value="<?php echo $marca->brandID; ?>"><?php echo $marca->brand; ?></option>
			    	<?php }?>
			    </select>
			  </div>
			</div>
			<div class="form-group row">
			  <label for="categoryID" class="col-xs-2 col-md-2 col-form-label">Categoria</label>
			  <div class="col-xs-12 col-md-12">
			    <select class="selectpicker form-control" name="categoryID">
			    	<?php foreach($category as $categoria){ ?>
			    			<option value="<?php echo $categoria->categoryID; ?>"><?php echo $categoria->category; ?></option>
			    	<?php }?>				
			    </select>
			  </div>
			</div>
			<div class="form-group row">
			  <label for="service" class="col-xs-2 col-md-2 col-form-label">Servicio</label>
			  <div class="col-xs-12 col-md-12">
			    <input type="checkbox" name="service">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="taxFree" class="col-xs-2 col-md-2 col-form-label">IVA</label>
			  <div class="col-xs-12 col-md-12">
			    <input type="checkbox" name="taxFree">
			  </div>
			</div>
			<div class="form-group row">				
		      	<div class="center">
		        	<button type="submit" class="btn btn-primary">Guardar</button>
		      	</div>		      
		    </div>
		</form>
	</div>
</div>