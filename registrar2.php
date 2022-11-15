<?php
include ("conectar2.php");
if(isset($_POST["registrar"])){

       
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];


 
echo $nombre . "<br>";
echo $apellido . "<br>";
echo $telefono . "<br>";
echo $sexo . "<br>";
echo $email . "<br>";




$link = mysqli_connect ($host,$user,$pass,$db) or die ("problemas para conectar con la base de datos");

        if ($link){

        echo "Conexion exitosa, ";

        }else{

        echo "No hemos podido conectar con la base de datos";

        }
    
    $sql= "INSERT INTO vega (nombre,apellido,telefono,sexo,email) VALUES ('$nombre','$apellido','$telefono','$sexo','$email')";

    $result = mysqli_query ($link, $sql);

    if($result){

        echo "datos ingresados en la base de datos correctamente.";

        }else{

        echo "problemas para enviar los datos del formulario";
        }
}
?>