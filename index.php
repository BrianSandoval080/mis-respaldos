<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-oNUfhFpLQzWSiK0v7yoWsbwYAy6AmU1s/Ut1BTJzDKlSRzjHK9/7imVRVNOOYi/u" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>SGAF Prueba</title>
    <style>
      body {
            background-image: url('https://smartgs.com.mx/wp-content/uploads/2021/05/Cumplimiento-de-la-LGA-1080x675.jpg'); /* Cambia la ruta a la ubicación de tu imagen */
            background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
        }

    </style>

<style>
    .titulo-bienvenido{
        color:black
    }
        .navbar-nav .nav-link {
            margin-right: 120px; /* Agrega espacio entre los elementos */
        }
        
         /* Color del menu */
        .navbar-custom {
    background-color: #007bff; /* Azul */
    /* Otros estilos opcionales */
    border-color: #007bff; /* Color del borde */
    color: #fff; /* Color del texto */
}

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: absolute;
            
            transform: translateX(-50%);
        }
        .logo-text {
            color: white;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
     <!-- Menú de Navegación -->
     <nav class="navbar navbar-expand-lg navbar-light bg-info ">
          <!-- Logo centrado -->
          <a class="navbar-brand mx-auto" href="#">
            <!-- Aquí puedes insertar tu logo -->
            <img src="https://cdn.pixabay.com/photo/2017/03/16/21/18/logo-2150297_1280.png" alt="Logo" class="d-block mx-auto" style="max-height: 90px;">
            </a>
       <!-- Barra de opciones-->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">INICIO <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FUNCIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">AYUDA</a>
                </li>
            </ul>
        </div>

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
    </nav>
    <div class="container">

    <h1 class="titulo-bienvenido">Bienvenido administrador</h1>

      <!-- Logo fuera del área de navegación -->
      <div class="logo-container">
        <!-- Logo como botón -->
        <a href="https://www.ejemplo.com">
            <img src="https://cdn.pixabay.com/photo/2017/03/16/21/18/logo-2150297_1280.png" alt="Logo" class="d-block mx-auto" style="max-height: 90px;">
        </a>
        <!-- Texto debajo del logo -->
        <span class="logo-text">Nombre de la empresa</span>

        <div class="logo-container">
        <!-- Logo como botón -->
        <a href="https://www.ejemplo.com">
            <img src="https://cdn.pixabay.com/photo/2017/03/16/21/18/logo-2150297_1280.png" alt="Logo" class="d-block mx-auto" style="max-height: 90px;">
        </a>
        <!-- Texto debajo del logo -->
        <span class="logo-text">Nombre de la empresa</span>
    </div> 
    </div>
    <!-- Fin del logo fuera del área de navegación -->

    
</body>
</html>