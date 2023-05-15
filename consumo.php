<?php session_start();

if(!isset($_SESSION['usuario']) || ($_SESSION['usuario'] == '')){
	header('Location: login.php');
}

require('views/consumo.view.php');

?>