<?php
	
	function Conectar()
	{
	
		//$servername = 'localhost';
		$servername = '172.18.161.189';
		$database = 'login';
		$username = 'conexion';
		$password = '123456';

		// Crear conexion

		if (!($conn = mysqli_connect($servername, $username, $password)))
		{
			print("Error al conectarse a la Base de datos. <br>");
			exit();
		}
		else
		{
			print("Conexion exitosa. <br>");
		}

		//Conexion a la Base de Datos

		if (!mysqli_select_db($conn, $database))
		{
			print("Error al seleccionar la base de datos. <br>");
			exit();
		}
		else
		{
			print("Conexion exitosa a la base de datos [$database]. <br>");
		}

		return $conn;

	}
?>