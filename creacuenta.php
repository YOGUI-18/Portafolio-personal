<?php 
require 'includes/header.php';
?>
    <main class="container">
        <div class="contenido">
            <h1>REGISTRATE COMO CLIENTE</h1>
            <form class="formulario-registro" method="POST">
                <div class="campoIzq nombre">
                    <input class="registro__field nombre-field" name="nombre" type="name" placeholder="Nombre" id="name">
                </div>
                <div class="campoDer apellido">
                    <input class="registro__field apellido-field" name="apellido" type="name" placeholder="Apellido" id="lastname">
                </div>
                <div class="campoDer apellido">
                    <input class="registro__field Telefono-field" name="celular" type="name" placeholder="Telefono" id="telef">
                </div>
                <div class="campoIzq email1">
                    <input class="registro__field email-field" name="email" type="email" placeholder="Correo Electronico" id="email">
                </div>
                <div class="campoDer email2">
                    <input class="registro__field email-field" name="email" type="email" placeholder="Confirma el correo electronico" id="email">
                </div>
                <div class="campoIzq contraseña1">
                    <input class="registro__field contraseña-field" name="password" type="password" placeholder="Contraseña" id="password">
                </div>
                <div class="campoDer contraseña2">
                    <input class="registro__field contraseña-field" name="password" type="password" placeholder="Confirma la contraseña" id="password">
                </div>
                <div class="campoIzq boton1">
                    <input type="submit" value="Login" id="Login" >
                </div>
          
            </form>
        </div>
         
</main>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre =$_POST['nombre'];    
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $contraseña =$_POST['password'];
}
try {
    require __DIR__.('/includes/conexion_bd.php');
    $sql= "INSERT INTO formulario (nombre, apellido, celular, email, contraseña) VALUES ('$nombre', '$apellido', '$celular', '$email', '$contraseña');";
    $query = mysqli_query($coneccion, $sql);
    echo('se ha resivido su mensaje');
} catch (\Throwable $th) {
    var_dump($th);
}


require 'includes/footer.php'
?>