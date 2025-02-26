<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina online</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/al-valenciaga-personaluseonly" rel="stylesheet">
                

    
    
<body>
<nav class="navbar navbar-light" style="background-color:rgb(178, 240, 255)">
        <div class="container">
            <a class="navbar-brand" href="index.html">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/basedata/carlos1.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/basedata/carlos2.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="/basedata/carlos3.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/basedata/carlos4.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/basedata/carlos5.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/basedata/carlos6.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/basedata/carlos7.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/basedata/carlos8.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/basedata/carlos9.php">Meter datos</a><br>
                            <a class="dropdown-item" href="/basedata/carlos10.php">Meter datos</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color: rgb(64, 28, 196);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent; font-family: 'Al Valenciaga PersonalUseOnly', sans-serif;">Cuarto Semestre Programacion</h1>
        <p class="lead"  style="text-align: center;">Esta es una pagina</p>
        <hr class="my-4">
        <p style="text-align: center;">Carlos Perez Hernandez
        </p>
        <p class="lead">

        </p>
    </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color:rgb(28, 39, 196);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">MOSTRAR DATOS </h1>

        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(168, 181, 255);
            }
            
            tr:nth-child(even) {
                background-color: rgb(92, 146, 247);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(34, 0, 187);
                color: white;
            }


        
        </style>

<h1 class="display-4 font" style="text-align: center;
        background: linear-gradient(to right, rgb(12, 0, 121), orange, red);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">METER DATOS</h1>

        <laber for="Nombre">Nombre:> </label>
        <input type="text" id="Nombre" name="Nombre" requiered> <br>
        <laber for="Alias">Alias:> </label>
        <input type="text" id="Alias" name="Alias" requiered> <br>
        <laber for="FechaDeCreacion">FechaDeCreacion:> </label>
        <input type="text" id="FechaDeCreacion" name="FechaDeCreacion" requiered> <br>
        <laber for="Descripcion">Descripcion:> </label>
        <input type="text" id="Descripcion" name="Descripcion" requiered> <br>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "database";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM `lista`";
        $resultado = $conexion->query($sql);
        if($resultado->num_rows >0){
            echo "<table>";
            echo "<tr><th>id</th><th>Nombre</th><th>Apodo</th><th>Apodo</th><th>Posicion</th><th>Altura</th>
            <th>Peso</th><th>Numero</th><th>Edad</th><th>Nacionalidad</th><th>Puntos</th></tr>";
            while($row = $resultado->fetch_:assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apodo"] . "</td><td>" . 
                 $row["equipo"] . "</td><td>" . $row["posicion"] . "</td><td>" . $row["altura"] . "</td><td>" 
                  . $row["peso"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["edad"] . "</td><td>"
                   . $row["nacionalidad"] . "</td><td>" . $row["puntos"] . "</td></tr>";
            }
            echo "</table>";
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();


        
        ?>




    </div>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>