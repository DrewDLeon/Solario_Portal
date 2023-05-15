<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/e9e0657b0b.js"></script>
    <link rel="stylesheet" href="./css/home.css?3">
	<script type='module' src='https://10az.online.tableau.com/javascripts/api/tableau.embedding.3.latest.min.js'></script>
	<title>Solario - Reportes</title>
</head>
<body>
	<header>
		<!-- LOGO SOLARIO -->
        <div class="header-logo">
            <img src="./img/logo.png" alt="logo.png" title="Energia Solario">
			<p>Clientes</p>
        </div>
        <!-- LINKS -->
        <div class="header-nav">
            <nav>
				<a class="header-link" href="./home.php">Inicio</a>
				<a class="header-link" href="./consumo.php">Consumo</a>
                <a class="header-link" href="./demanda.php">Demanda</a>
                <a class="header-link" href="./facturas.php">Facturas</a>
                <a class="header-link" href="./precios.php">Precios SPOT</a>
                <a class="header-link" href="./alertas.php">Alertas</a>
                <!-- SOLARIO CLIENTES -->
				
                <div class="header-button">
                    <a href="./cerrar.php">
                        Cerrar Sesión
                    </a>
                </div>
            </nav>
        </div>
	</header>
	<main>
        <div>
            <!-- HABILIDAD DE PROGRAMAR REPORTES (SEMANAL, DIARIO, MENSUAL) -->
            <form class="form" method="post">
                <div class="form-box">
                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email" placeholder="Correo Electronico" required>
                </div>

                <div class="form-box">
                    <label for="reporte">Tipo de Reporte:</label>
                    <select name="reporte" id="reporte">
                        <option value="consumo" selected>Consumo</option>
                        <option value="demanda">Demanda</option>
                    </select>
                </div>

                <div class="form-box">
                    <label for="tipo">Frecuencia:</label>
                    <select name="tipo" id="tipo">
                        <option value="diario" selected>Diario</option>
                        <option value="semanal">Semanal</option>
                        <option value="mensual">Mensual</option>
                    </select>
                </div>

                <div class="form-box">
                    <input type="submit" name="enviar" class="submit">
                </div>
            </form> <!-- Ingresa tu correo, el tipo y rpu's y listo saludos -->

            <?php if(isset($_POST['enviar'])){echo "<div class='message'><h3>El Reporte ha sido solicitado exitosamente!</h3></div>";}?>
        </div>
	</main>
</body>
</html>