<?php
	include('login_db_prof.php'); // Include Login Script

	if ((isset($_SESSION['mail_prof']) != '')) 
	{	

		header('Location: indexprofe.php');
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
                        <h3 class="panel-title">Iniciar Sesion</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mail" name="mail_prof" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Clave" name="password" type="password" value="">
                                </div>
                                <div class="error" ><?php echo $error;?></div>
                                <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Login" /> 
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                       
                                <a href="recuperarclave.php" class="btn btn-lg btn-success btn-block	">Recuperar contrasena</a>
                                <a href="index.php" class="fa fa-back fa-fw">Volver</a>
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
