<?php
session_start();

			// conexion
			include 'conn.php';	
			
			// variables conexion
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// comprobar conexion
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// datos enviados desde index.html
			$name = $_POST['usuario']; 
			$password = $_POST['password'];
			
			// Query enviado a la base de datos
			$result = mysqli_query($conn, "SELECT Id, Email, Password, Rol, Name FROM usuarios WHERE Name = '$name'");
			
			// Array que guarda el resultado del query
			$row = mysqli_fetch_assoc($result);
			
			// Variable que guarda la contraseña hash de la base de datos
			$hash = $row['Password'];
			
			$id=$row['Id'];
			/* 
			password_Verify() es una funcion que verifica si la contraseña puesta por el usuario se
            corresponde al has de la base de datos.
            Si es asi crea una sesion de 'n' minutos.
			*/
			//SESION ADMIN
            if (password_verify($_POST['password'], $hash) && $row['Rol'] == 'admin') {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; // este '1' es 'n'					
				
				header('Location: ./zonaadmin.php?id='. $id);
			} 
    
            //SESION cliente
            else if (password_verify($_POST['password'], $hash) && $row['Rol'] == 'cliente') {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; // este '1' es 'n'					
				
				
				header('Location: ./zonacliente.php?id='. $id);	
			
			} else {				
				header("Location: ./index.php?loginInvalido=true");			
			}
			?>


