<?php session_start();

if(!isset($_SESSION['usuario']) || ($_SESSION['usuario'] == '')){
	header('Location: login.php');
}

if(isset($_POST['enviar'])){
	if(!empty($_POST['email'])){
		$mail = $_POST['email'];
		$frec = $_POST['tipo'];
		$tipo = $_POST['reporte'];
	}
	$usuario = $_SESSION['usuario'];

	try {
		$conexion = new PDO("mysql:host=127.0.0.1;dbname=PruebasDB","root","5rduZ2BT");
	} catch (PDOException $e) {
		echo "Error". $e->getMessage();
	}

	$statement = $conexion->prepare(
		'INSERT INTO tbl_reportes (id_reporte, rpu, correo, usuario, tipo, frecuencia) VALUES (null, :rpu, :correo, :usuario,:tipo,:frecuencia)'
	);
	$statement->execute(array(
		':correo' => $mail,
		':rpu' => 0,
		':usuario' => $usuario,
		':tipo' => $tipo,
		':frecuencia' => $frec
	));
}




require('views/reportes.view.php');

?>

