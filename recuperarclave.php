<?php
include ("connection.php");
include ("mailer.php");
include ("random_string.php");
$msg = "";
if(isset($_POST["submit2"]))
{
	header('Location: index.php');
}
if(isset($_POST["submit"]))
{
	if($_POST["type"] == "student")
	{
	$email = $_POST["mail"];
	$email = mysqli_real_escape_string($db, $email);
	//$name = $_POST["name"];
	$sql="SELECT name FROM users_student WHERE mail='$email'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_row($result);
	$name = $row[0];
	if(mysqli_num_rows($result) == 1)
	{
		$new_password = generate_random_string();
		$password = md5($new_password);
		$sql2="UPDATE users_student SET password='$password' WHERE mail='$email'";
		mysqli_query($db,$sql2);
		$to = $_POST["mail"];
		$body = "Estimad@ ".$name." tu contraseña es: ".$new_password."
				Te recordamos que puedes cambiar tu contraseña en tu perfil";
		$subject = "Recuperacion de contraseña-GEF";
		send_mail($to, $body, $subject);
		$msg = "El correo fue enviado con exito";
	}
	else
	{
		$msg = "El correo es incorrecto";
	}
	}else if($_POST["type"] == "professor")
	{
		$email = $_POST["mail"];
		$email = mysqli_real_escape_string($db, $email);
		//$name = $_POST["name"];
		$sql="SELECT name FROM users_professor WHERE mail='$email'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_row($result);
		$name = $row[0];
		if(mysqli_num_rows($result) == 1)
		{
			$new_password = generate_random_string();
			$password = md5($new_password);
			$sql2="UPDATE users_professor SET password='$password' WHERE mail='$email'";
			mysqli_query($db,$sql2);
			$to = $_POST["mail"];
			$body = "Estimad@ ".$name." tu contraseña es: ".$new_password."
				Te recordamos que puedes cambiar tu contraseña en tu perfil";
			$subject = "Recuperacion de contraseña-GEF";
			send_mail($to, $body, $subject);
			$msg = "El correo fue enviado con exito";
		}
		else
		{
			$msg = "El correo es incorrecto";
		}
	}

}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEF</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <!-- <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div> -->
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Recuperar Contrasena</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                            	<b>Escriba su Mail para recuperar su contrasena</b></br>                            	  
                                <div class="form-group">
                             <b> Mail: </b><input class="form-control" placeholder="Mail" name="mail" type="email" autofocus>
                                </div>
                                <div class="form-group">
                        Alumno: <input type="radio" name="type" value="student"> 
                      Profesor: <input type="radio" name="type" value="professor">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Recuperar Contrasena" />
								<input type="submit" name="submit2" class="btn btn-lg btn-success btn-block" value="Volver al Inicio" />
                                <?php echo $msg;?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
