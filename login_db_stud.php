<?php
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["mail_stud"]) || empty($_POST["password"]))
		{
			$error = "Ambos campos son requeridos.";
		}else
		{
			// Define $username and $password
			$username=$_POST['mail_stud'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT usid FROM users_student WHERE mail='$username' and password='$password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['mail_stud'] = $username; // Initializing Session
				header("location: indexalumno.php"); // Redirecting To Other Page
			}else
			{
				$error = "Usuario o contrasena incorrectos.";
			}

		}
	}

?>