	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap-checkbox.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap-datetimepicker.min.js"></script>	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.min.js"></script>	
	<?php if(isset($linkScript)) { 
		if ($linkScript == 'caja') 
			echo '<script type="text/javascript" src="'. base_url() .'static/js/jsx/'.$linkScript.'.js"></script>'; 
	} ?>
    <?php if(isset($linkScript)){
		 	if ($linkScript == 'usuario')
		  { ?> 
        <script type="text/javascript">
            $('#administrator').change(function(){
                let chkA = this;
                $('input[type="checkbox"]').map(function(i, o){ 
                    console.log(o.id);
                    if(o.id != 'administrator'){ 
                        if(o.id != 'activo') { 
                            $(o).prop('checked',$(chkA).prop('checked')); 
                        }
                    }
                });
            });
	    </script>
    <?php 
		}
	}  ?>
	<?php if(isset($linkScript)) { 
		if ($linkScript == 'ReporteVenta') 
			echo '<script type="text/javascript" src="'. base_url() .'static/js/jsx/'.$linkScript.'.js"></script>'; 
	} ?>
	<script type="text/javascript">
		$('.selectpicker').selectpicker('render');
		$(':checkbox').checkboxpicker({
			  html: true,
			  offLabel: 'No',
			  onLabel: 'Si'
			});
	</script>    
</body>
</html>