<?php 
require 'includes/header.php';

?>
  
    <main class="container">
        <div class="contenido">
            <h1>CLIENTES</h1>
            <form class="formulario" method="POST">
                
                <div class="campo1"><label class="campo__label email" for="email">E-mail</label></div>
                <div class="campo2"><input class="campo__field email-field" type="email" placeholder="Tu email" id="email"></div>
                <div class="campo1"><label class="campo__label contraseña" for="password">Contraseña</label></div>
                <div class="campo2"><input class="campo__field contraseña-field" type="password" placeholder="Tu contraseña" id="password"></div>
                <div class="campo3"><a href="creacuenta.php" class="boton boton--secundario">Crear cuenta</a></div>
                <div class="campo4"><input type="submit" value="INICIAR" class="boton boton--primario"></div>
            </form>

        </div>
        
    </main>
<?php
var_dump($_POST);
require __DIR__.('/includes/conexion_bd.php');
require 'includes/footer.php'
?>