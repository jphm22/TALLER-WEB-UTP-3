<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos )

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FORMULARIO</title>
    <link rel="icon" type="image/png" href="intec.png"> 
    <style>
        body {
            background-color: #003366; /* Azul marino */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        form input[type="text"],
        form input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"],
        form input[type="reset"] {
            padding: 10px 20px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            background-color: #003366;
            color: #fff;
            cursor: pointer;
        }

        form input[type="submit"]:hover,
        form input[type="reset"]:hover {
            background-color: #002244;
        }

        .image-container {
            margin-bottom: 20px;
        }

        .image-container img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>
<form method="post">
        <div class="image-container">
            <img src="brand.PNG" alt="Imagen"> 
        </div>
<input type="text" name="nombre" placeholder="nombre">
<input type="email" name="correo" placeholder="correo">
<input type="text" name="telefono" placeholder="telefono">
    
<input type= "submit" name="registro">
<input type= "reset">

</form>   
</body>
</html>


<?php

  if(isset($_POST['registro'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      
      $insertarDatos = "INSERT INTO datos Values ('$nombre','$correo','$telefono','')";
      $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
  }
?>
