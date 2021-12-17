<?phpinclude ("db.php")?>
<form action="cliente.php" method="POST">
<h3>Datos del Cliente</h3>
<div class="container p-4">
<div class="datosCliente">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Orden No.- 
                    <input type="text" name="names" autofocus>
                </label>
            </div>
            <!-- consulta a la base de datos-->
              
            <div class="form-group">
                <label>Nombre: 
                    <input type="text" name="names" >
                    <a href="/cliente/cliente.php" class="btn btn-secondary"><i class="fas fa-plus"></i></a>
                </label>
            </div>
            <div class="form-group">
                <label>Apellido: 
                    <input type="text" name="names" >
                </label>
            </div>
            <div class="form-group">
                <label>Cédula: 
                    <input type="text" name="names" >
                </label>
            </div>
            <div class="form-group">
                <label>Dirección: 
                    <input type="text" name="names" >
                </label>
            </div>
        </div>
        <div class="col-6">
        <!--<input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">-->
        
        
        
        <div class="form-group">
                <label>Fecha de ingreso: 
                    <input type="text" name="names" >
                </label>
            </div>
            <div class="form-group">
                <label>Fecha posible entrega: 
                    <input type="text" name="names" >
                </label>
            </div>
        </div>
    </div>
</div>
<div class="datosEquipo">
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6"></div>
    </div>
    </div>
</div>
</form>
<?php

?>