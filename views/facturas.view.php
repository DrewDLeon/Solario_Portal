<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/e9e0657b0b.js"></script>
    <link rel="stylesheet" href="./css/home.css">
	<script type='module' src='https://10az.online.tableau.com/javascripts/api/tableau.embedding.3.latest.min.js'></script>
	<title>Solario - Facturas</title>
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
                <?php if($_SESSION['usuario'] != 'admin'):?>
					<a class="header-link" href="./consumo.php">Consumo</a>
					<a class="header-link" href="./demanda.php">Demanda</a>
                	<a class="header-link" href="./reportes.php">Reportes</a>
                	<a class="header-link" href="./facturas.php">Facturas</a>
                	<a class="header-link" href="./precios.php">Precios SPOT</a>
                	<a class="header-link" href="./alertas.php">Alertas</a>
				<?php endif; ?>

                <?php if($_SESSION['usuario'] == 'admin'):?>
                	<a class="header-link" href="./home.php">Inicio</a>
				<?php endif; ?>

                <?php if($_SESSION['usuario'] == 'admin'): ?>
					<div class="header-button-special">
						<a href="./registrar.php">
							Registrar Clientes
						</a>
                	</div>
				<?php endif; ?>
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
        <table>
            <tr>
                <td>Tipo Archivo</td>
                <td>Nombre Archivo</td>
                <td>Ver / Descargar</td>
            </tr>
            <tr>
                <td>Factura</td>
                <td>Factura 2023-01-01</td>
                <td>
                    <a href="#">Ver PDF</a>
                    <a href="#">Descargar PDF</a>
                </td> 
            </tr>
        </table>
	</main>
</body>
</html>