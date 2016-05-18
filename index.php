<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
</script>
<?php

	include ("connection.php");	

	$msg = "";
	if($_POST["type"] == "professor")
	{
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["mail"];
		$password = $_POST["password"];

		$name = mysqli_real_escape_string($db, $name);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		$password = md5($password);
		
		
		$sql="SELECT mail FROM users_professor WHERE mail='$email'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$msg = "Lo lamentamos, este correo ya existe";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO users_professor (name, mail, password)VALUES ('$name', '$email', '$password')");
			if($query)
			{
				$msg = "Tu cuenta ha sido registrada con exito";
			}
		}
	}
	}else if($_POST["type"] == "student")
	{
		if(isset($_POST["submit"]))
		{
			$name = $_POST["name"];
			$email = $_POST["mail"];
			$password = $_POST["password"];
			$type = $_POST["level"];
		
			$name = mysqli_real_escape_string($db, $name);
			$email = mysqli_real_escape_string($db, $email);
			$type = mysqli_real_escape_string($db, $type);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);
		
		
			$sql="SELECT mail FROM users_student WHERE mail='$email'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			if(mysqli_num_rows($result) == 1)
			{
				$msg = "Lo lamentamos, este correo ya existe";
			}
			else
			{
				$query = mysqli_query($db, "INSERT INTO users_student (name, mail, password, type)VALUES ('$name', '$email', '$password')");
				if($query)
				{
					$msg = "Tu cuenta ha sido registrada con exito";
				}
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
<div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
            <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!-- <a class="navbar-brand" href="indexprofe.php">
                    <img src="assets/img/logo.png" alt="">
                </a> -->
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <!-- dropdown alerts-->
                    <a href="loginprofe.php" class="btn btn-lg btn-success btn-block">Entrar como profesor</a>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <!-- dropdown user-->
                    <a href="loginalumno.php" class="btn btn-lg btn-success btn-block">Entrar como alumno</a>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
</div>
    <div class="container">
       
        <div class="row">
            <!-- <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div> -->
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Crear Cuenta</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nombre" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mail" name="mail" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Clave" name="password" type="password" value="" maxlength="10">
                                </div>
  								Alumno <input type="radio" onclick="javascript:yesnoCheck();" name="type" id="yesCheck" value="student"> Profesor <input type="radio" onclick="javascript:yesnoCheck();" name="type" id="noCheck" checked value="professor"><br>
    							<div id="ifYes" style="display:none">
        						Curso: 
                                        <div class="form-group">
                                            <select class="form-control" name="level">
                                                <option value="1">Quinto Basico A</option>
                                                <option value="2">Quinto Basico B</option>
                                                <option value="3">Sexto Basico</option>
                                                <option value="4">Septimo Basico</option>
                                                <option value="5">Octavo Basico</option>
                                            </select>
                                        </div>
    									</div>
  								<input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Registrarse!" />	
                                <!-- Change this to a button or input when using this as a form -->
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
