
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<div class="w3-container">
<h2>Asignaturas</h2>
<p>Selecciona la asignatura con la cual desees trabajar</p>
</div>

<ul class="w3-navbar w3-black">
  <li><a href="#" onclick="openCity('Lenguaje')">Lenguaje</a></li>
  <li><a href="#" onclick="openCity('Matematicas')">Matematicas</a></li>
  <li><a href="#" onclick="openCity('Ciencias')">Ciencias</a></li>
</ul>

<div id="Lenguaje" class="w3-container city">
  <h2>Lenguaje</h2>
  <p>Material para ejercitar ortografia</p>
</div>

<div id="Matematicas" class="w3-container city">
  <h2>Matematicas</h2>
  <p>Material de algebra</p> 
</div>

<div id="Ciencias" class="w3-container city">
  <h2>Ciencias</h2>
  <p>Material de biologia</p>
</div>

<script>
openCity("London")
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>

</body>
</html> 
