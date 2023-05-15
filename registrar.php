<?php session_start();

if($_SESSION['usuario'] != 'admin'){
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
	$adminpass = $_POST['adminpass'];

    $errores = '';
    //          Si no se ingreso alguno o ningun campo
    if(empty($usuario) or empty($password) or empty($password2)){
        $errores .= '<li>Favor de rellenar los datos correctamente</li>';
    }
    else {

        //Conectamos a base de datos
        try{//                              no usar localhost
            $conexion = new PDO('mysql:host=127.0.0.1;dbname=PruebasDB','root','5rduZ2BT');
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error" . $e->getMessage();
        }
        
        //Revisamos si el usuario ya existe para poder ser registrado
        $statement = $conexion->prepare('SELECT * FROM tbl_usuarios WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario'=>$usuario));
        $resultado = $statement->fetch();

        //Como resultado arroja False si no existe y True si ya existe
        if($resultado != false){
            $errores .= '<li>El usuario ya existe</li>';
        }


        //Encriptamos las contraseñas
        //$password = hash('sha512', $password);
        //$password2 = hash('sha512', $password2);

        //Revisamos si ambas son identicas
        if($password != $password2){
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }

    }

    if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO tbl_usuarios (id_usuario, rpu, usuario, password, alias) VALUES (null, :usuario, :pass, :alias)');
		$statement->execute(array(
				':usuario' => $usuario,
				':pass' => $password,
				':alias' => 'undef'
			));

		// Despues de registrar al usuario redirigimos para que inicie sesion.
	}
}


require('views/registrar.view.php');
?>