<?php

error_reporting(0);
include ("db.php");
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "SELECT * FROM cliente WHERE IDCLIENTE=$id";
    $resultEdit=mysqli_query($conn, $query);
    if (mysqli_num_rows($resultEdit)==1){
        $row=mysqli_fetch_array($resultEdit);
        $names=$row['names'];
        $lastnames=$row['lastnames'];
        $ci=$row['CI'];
        $direction=$row['direction'];
        $city=$row['city'];
        $country=$row['country'];
        $email=$row['email'];
        $phone=$row['phone'];
    }
}

if(isset($_POST['update'])){
    //echo'actualizando';
    $id=$_GET['id'];
    $names=$_POST['names'];
    $lastnames=$_POST['lastnames'];
    $ci=$_POST['CI'];
    $direction=$_POST['direction'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $query="UPDATE cliente set NOMBRE='$names', APELLIDO='$lastnames', CI='$ci', DIRECCION='$direction', CIUDAD='$city', PAIS='$country', E_MAIL='$email', TELEFONO='$phone'  WHERE IDCLIENTE=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Registro actualizado exitosamente';
    $_SESSION['message_type']='warning';
    header("Location: index.php");

    
} 

?>
<?php include("includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="names" value="<?php echo $names;  ?>" class="form-control" placeholder="actualizar nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastnames" value="<?php echo $lastnames;  ?>" class="form-control" placeholder="actualizar apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" name="CI" value="<?php echo $CI;  ?>" class="form-control" placeholder="actualizar CI">
                    </div>
                    <div class="form-group">
                        <input type="text" name="direction" value="<?php echo $direction;  ?>" class="form-control" placeholder="actualizar direcci??n">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" value="<?php echo $city;  ?>" class="form-control" placeholder="actualizar ciudad">
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" value="<?php echo $country;  ?>" class="form-control" placeholder="actualizar pais">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="<?php echo $email;  ?>" class="form-control" placeholder="actualizar e-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="<?php echo $phone;  ?>" class="form-control" placeholder="actualizar tel??fono">
                    </div>
                    <button class="btn btn-success" name="update"> 
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
//include("includes/header.php")?>