<DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="principal">
<div class="row">
<div class="col-1"></div>
<div class="col-10">
<h2 class="text-center">Ejemplo Formulario</h2>
<form action="procesar.php" method="GET">
<h5>******Text Box******</h5>
<div> 
<label class="email">Email</label>
<input class="form-control" type="text" name="email" placeholder="Email">
</div>
<div>
<label class="form-label">Password</label>
<input class="form-control" type="password" name="password" placeholder="Password">
</div>
<div>
<input class="form-control" type="hidden" name="oculto" value="1234"></input> 
</div>


<hr>
<h5>******Check Box******</h5>
<div >
<input class="form-check-input" type="checkbox" name="genero" value="Mujer">Mujer</input>
<input class="form-check-input" type="checkbox" name="genero" value="Hombre">Hombre</input>
</div>
<p>Lenguajes de progrmacion</p>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="PHP">PHP</input>
<label class="form-check form-check-inline">PHP</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="Java">Java</input>
<label class="form-check form-check-inline">Java</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="Python">Python</input>
<label class="form-check form-check-inline">Python</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="C#">C#</input>
<label class="form-check form-check-inline">C#</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="JavaScript">JavaScript</input>
<label class="form-check form-check-inline">JavaScript</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="C++">C++</input>
<label class="form-check form-check-inline">C++</label>
<input type="submit" name="submit" value="procesar" class="btn btn-primary">
</div>
<hr>
<p>Construccion dinamica de checkbox</p>
<?php
$lenguajes = array('PHP','Java','Python','C#','JavaScript','C++');
foreach($lenguajes as $lenguaje){
?>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="lenguajes[]" value="<?php echo $lenguaje;?>"><?php echo $lenguaje;?></input>
<label class="form-check form-check-inline"><?php echo $lenguaje;?></label>
</div>
<?php
}   
?>

</form>







</div>
<div class="col-1"></div>


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
