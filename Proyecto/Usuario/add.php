<?php
include('../config/config.php');
include('Usuario.php');
if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new recetas(); /* LLAMO A MI LIBRO DE RECETAS */

 
  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../StylesI.CSS">
</head>
<body>
<style>
    body { background: linear-gradient(to bottom, #f9eb99,#f8a0cc, #fb91c6);
      font-family: "Times New Roman", Times, serif;
            font-size: 16px;
            max-width: 800px; /* Establece el ancho máximo del formulario */
            margin: 0 auto;

   }
   .logo {
    max-width: 80px; 
    display: block; 
    margin: 0 auto; 
    
}
   </style>
  <!-- Encabezado de la página Inicio -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-title">Contáctanos</h1>
        </div>
    </div>
</div>
 <!-- Contenedor principal -->
 <div class="container">
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <img src="../Imagen/Logo.png" class="logo" alt="Logo de StudentCareerGuide"> <a class="navbar-brand" href="#">StudentCareerGuide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                
                <!-- Enlace a "Inicio" -->
                <li class="nav-item">
                    <a class="nav-link" href="../Index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../evaluaciones.html">Evaluaciones</a>
                <li class="nav-item">   
                    <a class="nav-link" href="../Habilidades.html">Habilidades</a>
                    <li class="nav-item">   
                        <a class="nav-link" href="../Recursos.html">Recursos</a>
                        <li class="nav-item">   
                            <a class="nav-link" href="add.php">Contáctanos</a>
                </li>
            </ul>
        </div>
    </nav>

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<!-- CREAN FORMULARIO -->
<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Edad</label>
    <input type="text" name="Edad" id="Edad"   class="form-control" >
    
  </div>
    <label for="inputEmail4" class="form-label">Correo</label>
    <input type="email" name="Correo" id="Correo"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Telefono</label>
    <input type="text" name="Telefono" id="Telefono"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Expectativas</label>
    <input type="text" name="Expectativas" id="Expectativas" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">¿Tienes alguna pregunta?</label>
    <input type="text" name="Preguntas" id="Preguntas" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">¿Te pareció util?</label>
    <input type="text" name="Utilidad" id="Utilidad" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">¿Qué tan satifecho estás?</label>
    <input type="text" name="Satisfaccion" id="Satisfaccion" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">¿Recomendarias este sitio web?</label>
    <input type="text" name="Recomendacion" id="Recomendacion" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Comentarios</label>
    <input type="text" name="Comentarios" id="Comentarios" class="form-control" >
  </div>
  
  <div class="col-12">
    <button  class="btn btn-primary">Registrar</button>
  </div>
</form>

 <!-- Footer -->
 <footer>
    <div class="container mt-4">
    <div class="footer-container">
        <div class="footer-section">
            <h4>Sobre Nosotros</h4>
            <p class="sn">StudentCareerGuide es una plataforma dedicada a brindar orientación vocacional y apoyo en el desarrollo profesional de estudiantes.</p>
        </div>
        <div class="footer-section">
            <h5>Redes Sociales</h5>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/StudentCareerGuide">Facebook</a></li>
                <li><a href="https://twitter.com/StudentCareerGuide">Twitter</a></li>
                <li><a href="https://www.instagram.com/StudentCareerGuide23">Instagram</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h6>Enlaces de Interés</h6>
            <ul class="interest-links">
                <li><a href="https://blog.up.edu.mx/prepaup/femenil/10-tips-para-elegir-una-carrera-universitaria-ideal-para-ti">Consejos para la Carrera</a></li>
                <li><a href="https://orientacionesvocacion.com/">Material Informativo</a></li>
                <li><a href="http://localhost/Proyecto/Usuario/add.php">Contáctanos</a></li>
            </ul>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>