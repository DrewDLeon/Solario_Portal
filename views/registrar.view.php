<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/e9e0657b0b.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/registrar.css">
	<title>Registrar Usuario</title>
</head>
<body>
	<header>
		<!-- LOGO SOLARIO -->
        <div class="header-logo">
            <a href="./index.php"><img src="./img/logo.png" alt="logo.png" title="Energia Solario"></a>
        </div>
        <!-- LINKS -->
        <div class="header-nav">
            <nav>
                <!-- Login TEST USERS -->
                <div class="header-button">
                    <a href="home.php">
                        Inicio
                    </a>
                </div>
            </nav>
        </div>
	</header>
	<main class="login-container">
		<h1 class="titulo">Registrar Usuario</h1>
        
        <?php if($_SESSION['usuario']=='admin'):?>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form-container" name="login">
                <div class="form-box">
                    <i class="icon izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
                </div>

                <div class="form-box">
                    <i class="icon izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
                </div>

                <div class="form-box">
                    <i class="icon izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña">
                </div>

                <div class="form-button">
                    <button type="submit">Registrar</button>
                </div>

                <?php if(!empty($errores)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores;?>
                        </ul>
                    </div>
                <?php endif; ?>

            </form>
		<?php endif; ?>

        

	</main>
</body>
</html>