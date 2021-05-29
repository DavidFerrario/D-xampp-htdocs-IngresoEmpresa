<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h1>Usuarios</h1>

 

        <?php
        
            require_once(__DIR__.'/conexion.php');
            $sql = " SELECT NOMBRE, EDAD, SEXO, usuarios.ROLID ";
            $sql .=" FROM usuarios ";
            $sql .=" INNER JOIN roles ";
            $sql .=" ON usuarios.ROLID = roles.ROLID ";
            $resultado = $conn->query($sql);
            
        
        ?>
    <div class="campo">

        <?php
        
         while ($usuarios = $resultado->fetch_assoc()){ ?>

                <pre>
                  <?php  var_dump($usuarios); ?>
                </pre>

        <?php }; ?> 
        
        <?php 
        
            $conn->close();
        
        ?>
    </div>
    
</body>
</html>