<?php session_start();

	if(isset($_SESSION['usuario'])){
		header('Location: home.php');
	}

	$errores = '';

	if($_SERVER['REQUEST_METHOD']== 'POST'){
		$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
		$password = $_POST['password'];

		try {
			$conexion = new PDO('mysql:host=127.0.0.1;dbname=PruebasDB','root','5rduZ2BT');

		} catch (PDOException $e) {
			# code...
			echo "Error" . $e->getMessage();
		}

		$statement = $conexion->prepare(
			'SELECT * FROM tbl_usuarios WHERE usuario = :usuario AND password = :password'
		);

		$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

		$resultado = $statement->fetch();
		if($resultado != false){
			$_SESSION['usuario'] = $usuario;
			header('Location: home.php');
		}
		else{
			$errores .= '<li>El usuario o la contraseña son incorrectos</li>';
			session_destroy();
		}
	}
	
	require('views/login.view.php');
?>