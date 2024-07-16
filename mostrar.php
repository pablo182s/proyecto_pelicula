<?php
$conexion = mysqli_connect("localhost","root","","peliculas");

if(mysqli_connect_errno()){

    echo "ERROR no se conecto: ". mysqli_connect_errno();

}else{
    //echo "Se conecto BBDD Mostrar...";
}

$consultas = mysqli_query($conexion,"select * from pelis");

//var_dump($consultas);


// while($filaTD = mysqli_fetch_array($consultas)){
//     echo $filaTD['nombre'];
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navencabezado">
            <a href="index.html"><img src="img/logo.png" alt="Logo" class="logo-img"></a>
        </nav>
    </header>
    <main>
        <section class="registro">
            
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th colspan="4">Peliculas</th>
                    </tr>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Año</th>
                        <th scope="col">Director</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($filaTD = mysqli_fetch_array($consultas)){ ?>
                    <tr>
                    
                    <td> <?php  echo $filaTD['titulo']; ?></td>
                    <td> <?php  echo $filaTD['descripcion']; ?></td>
                    <td> <?php  echo $filaTD['anio']; ?></td>
                    <td> <?php  echo $filaTD['director_id']; ?></td>
                    </tr>
                    <?php      
                        }
                    ?>
                </tbody>
            </table>
        </section>
        
    </main>
    <script src="registrarse.js"></script>
    
</body>
</html>