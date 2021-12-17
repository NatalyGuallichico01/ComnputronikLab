<?php
include ("db.php");
if (isset($_POST['save'])){
    $names=$_POST['names'];
    $lastnames=$_POST['lastnames'];
    $ci=$_POST['CI'];
    $direction=$_POST['direction'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    /*echo $names;
    echo "<br>";
    echo $lastnames;*/
    $query="INSERT INTO cliente (nombre, apellido, ci, direccion, ciudad, pais, e_mail, telefono) VALUES ('$names', '$lastnames', '$ci', '$direction', '$city', '$country', '$email', '$phone')";
    $result=mysqli_query($conn, $query);
    if(!$result){
        die("Ingreso de datos fallido");
    }
    //echo "Datos guardados exitosamente";
    $_SESSION['message']="Datos guardados exitosamente";
    $_SESSION['message_type']='success';
    header("Location: index.php");
}
?>