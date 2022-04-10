<?php

 $host="localhost";
 $user="root";
 $password="Sebastian13";
 $dbname="BDSistemaIntegrado";
 
 $con = new mysqli($host, $user, $password, $dbname)
    or die ('Could not connect to the database server' . mysqli_connect_error());
   
   $sql = "INSERT INTO Productos (Descripcion, Nombre, Codigo)
    VALUES ('". $_POST['Descripcion'] . " ' , ' " . $_POST['Nombre'] . 
    " '  ,  " . $_POST['Codigo'] .")";
   
    mysqli_query($con, $sql);

    echo "<h3>Registro exitoso de producto, detalles:</h3>
          
    <style>
   * {
     font-family: 'Poppins', 'Questrial', sans-serif;
      text-align: center;
      font-weight: 400;
      font-size: 0.5rem;
     }
    </style>
    ";

   $sql2 = "SELECT * FROM Productos";

   $resultado = mysqli_query($con, $sql2);

   $listadoProductos = mysqli_fetch_all($resultado);

  // var_dump($listadoProductos);

  foreach($listadoProductos as $producto){
    echo "Codigo: " . $producto[1] . " | Nombre: " . 
         $producto[2] . "| Descripcion: " . 
         $producto[3] . "<br>";
  };

