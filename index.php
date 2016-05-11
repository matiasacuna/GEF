<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<title>Proyecto GEF - Login de prueba</title>

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/animate.css">
<!-- Custom Stylesheet -->
<link rel="stylesheet" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="container">
<div class="top">
<h1 id="title" class="hidden"><span id="logo">Proyecto <span>GEF</span></span></h1>
</div>
<div class="login-box animated fadeInUp">
<div class="box-header">
<h2>Inicia Sesion</h2>
</div>
<label for="username">Usuario</label>
<br/>
<input type="text" id="username">
<br/>
<label for="password">Contrase�a</label>
<br/>
<input type="password" id="password">
<br/>
<button type="submit">Inicia Sesi�n</button>
<br/>

</div>
</div>
</body>

<script>
$(document).ready(function () {
	$('#logo').addClass('animated fadeInDown');
	$("input:text:visible:first").focus();
});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
		$('#username').blur(function() {
			$('label[for="username"]').removeClass('selected');
		});
			$('#password').focus(function() {
				$('label[for="password"]').addClass('selected');
			});
				$('#password').blur(function() {
					$('label[for="password"]').removeClass('selected');
				});
					</script>
					