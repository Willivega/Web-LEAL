<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="validar.js"></script>
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="">
    
   

</head> 
<body>

        <main>

        

<form action="registrar2.php" method="post" onsubmit="return validar();"> 

<label for="Nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" placeholder="tu nombre">

<label for="Apellido">Apellido:</label>
<input type="text" name="apellido" id="apellido" placeholder="tu apellido">

<label for="Telefono">Telefono:</label>
<input type="text" name="telefono" id="telefono" placeholder="tu telefono">

<label for="Email">Email:</label>
<input type="text" name="email" id="email" placeholder="tu email">

<label for="Sexo">Sexo:</label>
<input type="radio" name="sexo" id="sexo" value="Femenino">Femenino
<input type="radio" name="sexo" id="sexo" value="Masculino">Masculino


<input type="submit" value="Registrar" name="registrar" id="registrar">

    </form>

    </main>
    
       
</body>
</html>
