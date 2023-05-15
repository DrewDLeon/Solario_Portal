<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/e9e0657b0b.js"></script>
    <link rel="stylesheet" href="./css/home.css">
	<title>Home</title>
</head>
<body>
	<!-- HEADER -->
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
                	<a class="header-link" href="./facturas.php">Facturas</a>
				<?php endif; ?>
                <!-- SOLARIO CLIENTES -->
				
                <div class="header-button">
                    <a href="./cerrar.php">
                        Cerrar Sesión
                    </a>
                </div>
				<!-- ADMIN REGISTER USERS -->
                <?php if($_SESSION['usuario'] == 'admin'): ?>
					<div class="header-button-special">
						<a href="./registrar.php">
							Registrar Clientes
						</a>
                	</div>
				<?php endif; ?>
            </nav>
        </div>
    </header>
	<!-- MAIN -->
    <main>
		<div class="fecha-title">
			<?php 
				date_default_timezone_set("America/Mexico_City");
				echo '<h1 class="fecha">'.date("d M Y").'</h1>';
				echo '<h2 class="hora">'.date("h:ia");
			?>
		</div>

		<?php if($_SESSION['usuario']!='admin'):?>
			<div class="container">
				<div><h3>Consumo</h3></div>
				<div><h3>Ahorros</h3></div>
				<div><h3>Chingo de MWh</h3></div>
				<div><h3>Un Chingo y 2 Costales</h3></div>
			</div>
		<?php endif; ?>

		<?php if($_SESSION['usuario'] == 'admin'):?>
			<div class="ahorros">
				<form class="form" method="post">
					<div class="form-box">
						<label for="cliente"><h3>Ahorros del Cliente:</h3></label>
					</div>
					<div class="form-box">
						<select name="cliente" id="cliente">
							<option value="PEQUENO CESARMEX" selected>Little Caesars</option>
							<option value="Tododren Monterrey">Tododren Mty</option>
							<option value="Tododren Queretaro">Tododren Qro</option>
							<option value="GU Plumbing">Gumex</option>
							<option value="RiiSA">RiiSA</option>
							<option value="Aceromex">Aceromex</option>
							<option value="Autotransporte PGD">Autotransporte PGD</option>
							<option value="BEMIS DE MEXICO S A DE C V Respaldo">Bemis</option>
							<option value="IND FERROPLASTICAS SA DE CV">Ferroplasticas SA de CV</option>
							<option value="ACEROS Y LAMINADOS LEAL, S.A. DE C.V.">Aceros Leal</option>
							<option value="ADS MEXICANA SA DE CV">ADS</option>
							<option value="PROM Y ADM DEL NOROESTE SA CV">Martin Guitar</option>
						</select>
					</div>
					<div class="form-box">
						<input type="text">
					</div>
					<div class="form-box">
						<input type="submit" value="submit">
					</div>
				</form>
			</div>
		<?php endif; ?>
	</main>
</body>
</html>