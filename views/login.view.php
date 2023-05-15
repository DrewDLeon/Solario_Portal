<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/e9e0657b0b.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilos.css">
	<title>Solario Clientes - Inicia Sesión</title>
</head>
<body style="background:#0D1F44">
	<!-- HEADER -->
    <header style="padding-bottom: 50px;">
        <!-- LOGO SOLARIO -->
        <div class="header-logo">
            <a href="./index.php"><img src="./img/logo.png" alt="logo.png" title="Energia Solario"></a>
        </div>
        <!-- LINKS -->
        <div class="header-nav">
            <nav>
                
            </nav>
        </div>
    </header>
    <main>
        <div class="login-container">
            <div class="icon">
                <img src="./img/user-regular-240 (1).png" alt="">
            </div>
            <div class="form-container">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario" name="login">
                    <div class="form-box">
                        <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                        <div class="box-input"><input type="text" name="usuario" placeholder="Usuario" id="usuario"></div>
                    </div>
                    <div class="form-box">
                        <i class="fa-sharp fa-solid fa-lock" style="color: #ffffff;"></i>
                        <div class="box-input"><input type="password" name="password" placeholder="Contraseña" id="password"></div>
                    </div>
                    <div class="form-button">
                        <button type="submit">Log In</button>
                    </div>
                    <?php if(!empty($errores)): ?>
                        <div class="error">
                            <ul>
                                <?php echo $errores;?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>