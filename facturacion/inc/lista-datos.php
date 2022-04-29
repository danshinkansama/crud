<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="jquery.js"></script>
    <script src="Sweetalert2.js"></script>
    <style media="screen">
    a{
      margin: 1px;
      }

      .contenedor{
        margin: 1px;
      }

      table{
        margin: 20px;
      }
    </style>
	</head>
	<body>
    <!--sidebar-->
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
      <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
      <a href="../" class="w3-bar-item w3-button">Inicio</a>
      <a href="registro-crerreras.php" class="w3-bar-item w3-button">Registro de carreras</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div class="w3-teal">
      <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
      <div class="w3-container">
        <h1>Bienvenido...</h1>
        <a href="../" class="w3-btn w3-small w3-round w3-padding w3-black">Regresar</a>
      </div>
    </div>
    <div class="w3-container">
      <div class="w3-row w3-padding">
        <br>
        <div class="w3-container w3-pale-red w3-center">
    			<p>Lista De Contacto</p>
    			</div>
          <div class="w3-twothird">

          </div>

          <div class="w3-container">
            <!--contenedor paa otras cosas...!-->
              <img src="" alt="">
              <br>
              <!--CONEXION A LA BASE DE DATOS Y PAGINACIÓN!-->
              <?php

                require '../conexion.php';
                $por_pagina = 5;

                if (isset($_GET['pagina'])) {
                  // lo asignamos a la variable pagina.
                  $pagina = $_GET['pagina'];
                } else{
                  $pagina = 1;
                }

                $rum = ($pagina - 1) * $por_pagina;

                $query = "SELECT * FROM nombres LIMIT $rum, $por_pagina";
                $result_data = mysqli_query($conection,$query);

               ?>
              <table class="w3-table w3-striped w3-responsive w3-half">
                <tr class="w3-teal">
                  <td>#</td>
                  <td>Foto</td>
                  <td>Nombre</td>
                  <td>Correo</td>
                  <td>Teléfono</td>
                  <td>Acciones</td>
                </tr>
                <?php foreach($result_data as $r): ?>
                <tr class="w3-hover-pale-blue">
                  <td><?php echo $r['id']; ?></td>
                  <td><img src="../img/img_avatar3.png" class="w3-round w3-image" width="50px"></td>
                  <td><?php echo $r['nombre']; ?></td>
                  <td><?php echo $r['correo']; ?></td>
                  <td><?php echo $r['telefono']; ?></td>
                  <td>
                    <a href="update-regis.php" class="w3-btn w3-small w3-green w3-round w3-card-4"><i class="fa fa-edit"></i></a>
                    <a href="delete-regis.php" class="w3-btn w3-small w3-red w3-round w3-card-4"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
              </table>
              <div class="contenedor">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <br>
                <img src="https://content.techgig.com/photo/74548080/4-essential-skills-every-net-developer-must-possess.jpg?67629" alt="apt" class="w3-image" width="500px">
              </div>
              <br>
              <div class="w3-container">
                <?php

                  $query = "SELECT * FROM nombres";
                  $result = mysqli_query($conection,$query);
                  $total_regis = mysqli_num_rows($result);

                  $total_pages = ceil($total_regis / $por_pagina);

                  if ($pagina > 1) {
                    // code...
                    echo "<a class='w3-btn w3-border w3-border-blue w3-small w3-round' href='lista-datos.php?pagina=1'><i class='fa fa-fast-backward'></i>Primera</a>";
                    echo "<a class='w3-btn w3-border w3-border-blue w3-small w3-round' href='lista-datos.php?pagina=".($pagina - 1)."'>&laquo;</a>";
                  }

                  for ($i=1; $i <= $total_pages ; $i++) {
                      // code...
                      echo "<a class='w3-btn w3-round w3-border w3-border-blue w3-small' href='lista-datos.php?pagina=".$i."'>".$i."</a>";
                    }

                    if ($pagina < $total_pages) {
                        // code...
                        echo "<a class='w3-btn w3-border w3-border-blue w3-small w3-round' href='lista-datos.php?pagina=".($pagina + 1)."'>&raquo</a>";
                        echo "<a class='w3-btn w3-border w3-border-blue w3-small w3-round' href='lista-datos.php?pagina=".$total_pages."'>Ultima <i class='fa fa-fast-forward'></i></a>";
                      }


                 ?>
              </div>
              <br>
              <div class="w3-container w3-cell">
                <a class="w3-button w3-block" href="../pdf/1.pdf" download>Descargar PDF <i class="fa fa-download"></i></a>
              </div>
              <span>Desarrollado por Rolin</span>
          </div>
      </div>
    </div>
	</body>
</html>
<script type="text/javascript">

function w3_open()
{
  document.getElementById('mySidebar').style.display='block';
}

function w3_close()
{
  document.getElementById('mySidebar').style.display='none';
}

</script>
