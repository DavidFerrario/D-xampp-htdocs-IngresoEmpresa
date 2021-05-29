<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="../styles.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Crear Usuario</h1>

        <div class="contenido">

          <form class="" action="respuesta.php" method="post">

            <div class="informacion">

                  <div class="campo">
                      <label for="nombre">Nombre
                          <input type="text" name="nombre" id="nombre">
                      </label>
                  </div>
                  <div class="campo">
                      <label for="edad">Edad
                          <input type="text" name="edad" id="edad">
                      </label>
                  </div>
                  <div class="campo">
                  <select name="area" value="-Any-">
                            <option>- Sexo -</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="fs">Otro</option>
                        </select>
                  </div>
                  <div class="campo">
                  <select name="area" value="-Any-">
                            <option>- Rol -</option>
                            <option value="1">Alumno</option>
                            <option value="2">Docente</option>
                            <option value="3">Director</option>
                        </select>
                  </div>

    
          </div> 


            
          <div class="campo">
        
            <input type="submit">
          
          </div>
       
          </form>


        </div>
    </div>




  </body>
</html>
