<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'YOGUI3103';
    $bd = 'portafolio';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);   
  
} catch (\Throwable $th) {
    var_dump($th);
}       