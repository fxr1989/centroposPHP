<?php
    $ventaDia = $totalDia[0];
    $ventaSemana = $totalSemana[0];
    $ventaMes = $totalMes[0];
?>
<div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <strong>Ventas del Día</strong>                          
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-resumen-ventas">
                                    <tbody>
                                        <tr>
                                            <td><h4>Contado : </h4></td>
                                            <td><h4>C$ <?php echo isset($ventaDia->Contado)?number_format($ventaDia->Contado,2):"0.00"; ?> </h4></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Credito : </h4></td>
                                            <td><h4>C$ <?php echo isset($ventaDia->Credito)?number_format($ventaDia->Credito,2):"0.00"; ?> </h4></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Total : </h4></td>
                                            <td><h4>C$ <?php 
                                                            $dia = (isset($ventaDia->Contado)?$ventaDia->Contado:0.00 ) + (isset($ventaDia->Credito)?$ventaDia->Credito:0.00);
                                                            echo number_format($dia,2);
                                                        ?> 
                                            </h4></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="/home/detalle/dia">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
<div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="panel panel-success">
                         <div class="panel-heading">
                            <strong>Ventas la semana</strong>                          
                        </div>
                         <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-resumen-ventas">
                                    <tbody>
                                        <tr>
                                            <td><h4>Contado : </h4></td>
                                            <td><h4>C$ <?php echo isset($ventaSemana->Contado)?number_format($ventaSemana->Contado,2):"0.00"; ?> </h4></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Credito : </h4></td>
                                            <td><h4>C$ <?php echo isset($ventaSemana->Credito)?number_format($ventaSemana->Credito,2):"0.00"; ?> </h4></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Total : </h4></td>
                                            <td><h4>C$ <?php 
                                                            $semana = (isset($ventaSemana->Contado)?$ventaSemana->Contado:0 ) + (isset($ventaSemana->Credito)?$ventaSemana->Credito:0);
                                                            echo number_format($semana,2);
                                                        ?> 
                                            </h4></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="/home/detalle/semana">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
<div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="panel panel-success">
                         <div class="panel-heading">
                            <strong>Ventas del mes</strong>                          
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-resumen-ventas">
                                    <tbody>
                                        <tr>
                                            <td><h4>Contado : </h4></td>
                                            <td><h4>C$ <?php echo isset($ventaMes->Contado)?number_format($ventaMes->Contado,2):"0.00"; ?> </h4></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Credito : </h4></td>
                                            <td><h4>C$ <?php echo isset($ventaMes->Credito)?number_format($ventaMes->Credito,2):"0.00"; ?> </h4></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Total : </h4></td>
                                            <td><h4>C$ <?php 
                                                            $mes = (isset($ventaMes->Contado)?$ventaMes->Contado:0 ) + (isset($ventaMes->Credito)?$ventaMes->Credito:0);
                                                            echo number_format($mes,2);
                                                        ?> 
                                            </h4></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="/home/detalle/mes">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
<div class="col-xl-6 col-lg-6 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <strong>Top productos del mes por monto</strong>                          
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Descripción</th>
                            <th>Monto</th>
                        <tr>
                    </thead>
                    <tbody>
                        <?php 
                            $numero = 1;
                            foreach($topProductosMonto as $fila){
                        ?>
                        <tr>
                            <td><?php echo $numero; ?></td>
                            <td><?php echo $fila->descripcion; ?></td>
                            <td>C$ <?php echo number_format($fila->monto, 2); ?></td>
                        </tr>
                        <?php
                                $numero++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <strong>Top productos del mes por cantidad</strong>                          
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                        <tr>
                    </thead>
                    <tbody>
                        <?php 
                            $numero = 1;
                            foreach($topProductosCantidad as $fila){
                        ?>
                        <tr>
                            <td><?php echo $numero; ?></td>
                            <td><?php echo $fila->descripcion; ?></td>
                            <td><?php echo number_format($fila->cantidad); ?></td>
                        </tr>
                        <?php
                                $numero++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

