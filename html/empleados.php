
<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../html/index.php"> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
                        <img src="../img/ShopExpress.png" alt="Logotipo Bienes Raices">
                    </a>
                </div>

                <nav class="navegacion">
                <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="empleados.php">Empleados</a>
                    <a href="articulos.php">Articulos</a>
                    <a href="inventario.php">Inventario</a>
                    <a href="logout.php">Salir</a>
                </nav>
            </div>
        </div>
    </header>    
        
    <h1 class="fw-300 centrar-texto">Empleado</h1>
    <img src="../img/empleados.jpg" alt="Imagen Principal" style="width: 100%;">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de Empleado</h2>

        <form action="php/empleados/add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Documento</td>
				<td><input type="text" name="DocEmpleado"></td>
			</tr>
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="Nombre"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="Apellido"></td>
			</tr>
			<tr> 
				<td>Direccion</td>
				<td><input type="text" name="Direccion"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="AGREGAR"></td>
			</tr>
		</table>
	</form>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
            <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="empleados.php">Empleados</a>
                    <a href="articulos.php">Articulos</a>
                    <a href="inventario.php">Inventario</a>
                    <a href="logout.php">Salir</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &COPY;</p>
        </div>
    </footer>
</body>
</html>