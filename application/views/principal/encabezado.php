<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/principal.css">
  <?php if(isset($linkCSS)) echo '<link rel="stylesheet" type="text/css" href="'. base_url() .'static/css/'.$linkCSS.'.css">'; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css"
  
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top bg-primary">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="/"><?php echo $companyName; ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">                      
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventario <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <?php if($permisos['bodega_v'] == '1') { ?><li><a href="/bodegas">Bodegas</a></li><?php }?>
                        <?php if($permisos['marca_v'] == '1') { ?> <li><a href="/marcas">Marcas</a></li><?php }?>
                        <?php if($permisos['categoria_v'] == '1') { ?><li><a href="/categorias">Categorias</a></li><?php }?>
                        <?php if($permisos['producto_v'] == '1') { ?><li><a href="/productos">Productos</a></li><?php }?>                                   
                        <!--<li><a href="#">Nueva Entrada</a></li>
                        <li><a href="#">Salidas</a></li>-->
                      </ul>
                    </li>
                    <li class="dropdown">                      
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ventas <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <?php if($permisos['categoria_cliente_v'] == '1') { ?><li><a href="/empresa">Categoria cliente</a></li><?php }?>
                        <?php if($permisos['cliente_v'] == '1') { ?><li><a href="/clientes">Clientes</a></li><?php }?>
                        <?php if($permisos['factura_n'] == '1') { ?><li><a href="/caja">Caja</a></li><?php }?>              
                      </ul>
                    </li>
                     <li class="dropdown">                      
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/reportes">Ventas</a></li>                                               
                        <li><a href="#">Productos</a></li>                        
                      </ul>
                    </li>
                    <li class="dropdown">                      
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sistema <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <?php if($administrator == '1') { ?><li><a href="/usuarios">Usuarios</a></li><?php } ?>
                        <?php if($administrator == '1') { ?><li><a href="/configuracion">Configuración</a></li><?php } ?>
                        <li><a href="/login/logout">Salir</a></li>                                               
                      </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">