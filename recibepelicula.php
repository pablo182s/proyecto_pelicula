<?php
echo "estoy probando la conexion";

//que pasa con las funciones con retorno....
$conexion = mysqli_connect("localhost","root","","peliculas");

if(mysqli_connect_errno()){

    echo "ERROR no se conecto: ". mysqli_connect_errno();

}else{
    echo "Se conecto BBDD Insertar...";
}


echo "<pre>";
var_dump($_POST);


if($_POST){

    $nombre = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $calificacion = $_POST['calificacion'];
    $anio = $_POST['anio'];
    $director_id = $_POST['director_id'];

    echo "</pre>";
echo "esta todo en true el usuario es administrador";


$sql="SELECT COUNT(*) FROM pelis";
if ($result=mysqli_query($conexion,$sql))
  {
  // Obtener resultado en array numérico
  $row = mysqli_fetch_row($result);
  // Solo debe tener un elemento, porque solo hay una columna
  $rowcount = $row[0];
  printf("El numero de filas son %d.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

  $id=$rowcount+1;



$insertarDatos =  "insert into pelis(id_movie,titulo,descripcion,genero,calificacion,anio,director_id) values('$id','$nombre','$descripcion','$genero','$calificacion','$anio','$director_id')";

mysqli_query($conexion,$insertarDatos);



header("location:index.html");

}
