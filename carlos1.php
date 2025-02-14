<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <title>Carlos Perez </title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#970101;">
    <div class="container">
        <a href="" class="navbar-brand" style="color:white;">Inicio</a>
        <div class="collase nabvar-collapse" id="navbarNavDropdown">
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toogle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
 style="color: white;">Pagina 1 </a>

    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<class="dropdown-item a href="/nada/carlos1.php" >Practica 1</a><br>
<class="dropdown-item a href="/nada/carlos2.php" >Practica 2</a><br>
<class="dropdown-item a href="/nada/carlos3.php" >Practica 3</a><br>
    </div>
</li>
<li class="nav-item dropdown">
    <a href="" class="nav-link dropdown-toogle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
     style="color: white;">Pagina 2</a>
    
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <class="dropdown-item a href="/nada/carlos4.php" >Practica 1</a><br>
    <class="dropdown-item href="/nada/carlos5.php" >Practica 2</a><br>
    <class="dropdown-item a href="/nada/carlos6.php" >Practica 3</a><br>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a href="" class="nav-link dropdown-toogle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
         style="color: white;">Pagina 3 </a>
        
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <class="dropdown-item a href="/nada/carlos7.php" >Practica 1</a><br>
        <class="dropdown-item a href="/nada/carlos8.php" >Practica 2</a><br>
        <class="dropdown-item a href="nada/carlos9.php" >Practica 3</a><br>
            </div>
        </li>
</ul>
</div>
    </div>
    </nav>
    <div class="jumbotron">
        <h1 class="display-4" style="text-align:center;">Mi Pagina Web</h1>
        <p class="lead" style="text-align:center;"></p>
        <hr class="my-4">
        <p style="text-align:center;">Nada que poner </p>
      </div>

      <div class="row">
        <div class="col-sm-2">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">TARJETA 1</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

      
      <div class="row">
        <div class="col-sm-2">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
  
    <div class="jumbotron">
        <h1  class="display-4" style="text-align:center; font-family: Millenial Script, sans serif;">Carlos Perez Hernandez </h1>       
        <?php 
        $username = "root";
        $password = ""; 
        $servername = "localhost";
        $database = "practica1";

        $conexion = new mysqli($servername, $usernme, $password,  $database);
        if ($conexion->connect_error){
            die ("conexion fallida: " . $conexion->connect_error); 

        }
        $sql  = "SELECT * FROM `practica1parte2`"; //aqui agregan el nombre de la tabla que estan usando, en mi  caso fue nfleast //
        $resultado = $conexion->query($sql);

        ?> 

        <div class="container">
            <h1> Datos de la tabla de personajes </h1>
        <style> 
        h1{
            text-align: center;
            color: #970101;
            margin-bottom: 20px;
        }

        table{
            width: 100%; 
            horder-collapse: collapse; 
            margin-top: 50px; 
            border-radius: 50px; 
        }
          th, td {
            padding: 10px;
            text-align: left; 
            border-bottom: 1px solid #ddd; 
          }

          trinth-child(even){
            background-color: pink;
            color: black;
          }

          trinth-child(add){
            background-color: white;
            corlor: black; 
          }

          th{ 
            background-color: #970101;
            color:white;
          }



            <?php if ($resultados->num_rows >0 ):?>
                <table> 
                    <tr>
                        <th>id</th>
                        <th> Nombre</th>
                        <th>P.apellido</th>
                        <th>S.apellido</th>
                    </tr>

                    <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
            <td><?php echo $fila ["id"]; ?> </td>
            <td><?php echo $fila ["nombre"]; ?> </td>
            <td><?php echo $fila ["P.apelido"]; ?> </td>
            <td><?php echo $fila ["S.apellido"]; ?> </td>
            </tr>



            <?php endwhile; ?>
            </table> 
            <?php else: ?>
                <p> No se encontraron los personajes </p> 
            <?php endif; ?>
        </div>
    </div>


</body>
</html>