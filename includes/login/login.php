<?php include_once '../header.php'; ?>
<br/>
<br/>
<br/>
<br/>
<div class="formulario" id="formulario">
    <div class="container">
    <h2>Iniciar sesión</h2>
    <form action="proc_login.php" method="post">
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input class="btn mb-3" style="background-color: #98ca50; color: white" type="submit" value="Iniciar sesión">
    </form>
    <p>Si no tienes una cuenta primero debes <a href="../register/form_registro.php">Registrarte</a></p>

    </div></div>
    <br/>
    <?php include_once '../footer.php'; ?>
