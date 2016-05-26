<?php
	include("check_prof.php");	
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEF</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main-style.css" rel="stylesheet">
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
   <style type="text/css"></style></head>
<body class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <!--  wrapper -->
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Proyecto 1</strong>
                                        <span class="pull-right text-muted">40% Completado</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Proyecto 2</strong>
                                        <span class="pull-right text-muted">70% Completado</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Proyecto 3</strong>
                                        <span class="pull-right text-muted">60% Completado</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Proyecto 4</strong>
                                        <span class="pull-right text-muted">80% Completado</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="proyectoprofe.php">
                                <strong>Ver todos los Proyectos</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">2</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>Comentario nuevo
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>Nuevo avance
                                    <span class="pull-right text-muted small">Hace 43 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todas las notificaciones</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->


        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div> <strong><?php echo $name2;?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="indexprofe.php"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                    </li>
                    
                     <li>
                        <a href="proyectoprofe.php"><i class="fa fa-edit fa-fw"></i>Proyectos</a>
                    </li>
                    <li>
                        <a href="crearproyecto.php"><i class="fa fa-edit fa-fw"></i>Crear Proyectos</a>
                    </li>
                    <li>
                        <a href="materialdocente.php"><i class="fa fa-book fa-fw"></i>Material Docente</a>
                    </li>
                    <li>
                        <a href="subirmaterialdocente.php"><i class="fa fa-edit fa-fw"></i>Subir Material Docente</a>
                    </li>
     
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
       <div id="page-wrapper">
          
            <div class="row">
                 <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">Material Docente</h1>
                </div>
                 <!--end page header-->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--Collapsible Accordion Panel Group   -->
                    
                     <!--End Collapsible Accordion Panel Group   -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                     <!--Basic Tabs   -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ramos
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#mate" data-toggle="tab">Matematicas</a>
                                </li>
                                <li><a href="#leng" data-toggle="tab">Lenguaje</a>
                                </li>
                                <li><a href="#fisica" data-toggle="tab">Fisica</a>
                                </li>
                                <li><a href="#quimica" data-toggle="tab">Quimica</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="mate">
                                    <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Quinto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php
	$sql="SELECT * FROM files_professor_material";
	$result_set=mysqli_query($db,$sql);
	while($row=mysqli_fetch_array($result_set,MYSQLI_ASSOC))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="	ds_professor_material/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Sexto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Septimo Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                </div>
                                <div class="tab-pane fade" id="leng">
                                    <div class="panel-body">
                            <div class="panel-group" id="accordion2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">Quinto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">Sexto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">Septimo Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                                <div class="tab-pane fade" id="fisica">
                                    <div class="panel-body">
                            <div class="panel-group" id="accordion3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">Quinto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne3" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Holanda
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3">Sexto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3">Septimo Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                                <div class="tab-pane fade" id="quimica">
                                    <div class="panel-body">
                            <div class="panel-group" id="accordion4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4">Quinto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne4" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo4">Sexto Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapseThree4">Septimo Basico</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Archivo
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <!--End Basic Tabs   -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
