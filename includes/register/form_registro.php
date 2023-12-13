<?php include_once '../header.php'; ?>

    <script>
        function validarPassword() {
            let password = document.getElementById("password").value;

            // Validar longitud mínima de 6 caracteres
            let longitudValida = password.length >= 6;
            document.getElementById("longitud").style.display = longitudValida ? "none" : "block";

            // Validar presencia de números y letras en mayúsculas y minúsculas
            let tieneNumeros = /[0-9]/.test(password);
            let tieneMayuscula = /[A-Z]/.test(password);
            let tieneMinuscula = /[a-z]/.test(password);
            let tieneCaracterEspecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password);

            document.getElementById("numeros").style.display = tieneNumeros ? "none" : "block";
            document.getElementById("mayuscula").style.display = tieneMayuscula ? "none" : "block";
            document.getElementById("minuscula").style.display = tieneMinuscula ? "none" : "block";
            document.getElementById("especial").style.display = tieneCaracterEspecial ? "none" : "block";

            return true;
        }

        function mostrarMensajes() {
            document.getElementById("requisitos").style.display = "block";
        }
    </script>
    <br/>
<br/>
<br/>
<br/>
    <h2>Registro de Usuario</h2>
    <form action="proc_registro.php" method="post" onsubmit="return validarPassword()">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required onkeyup="validarPassword(); mostrarMensajes();">
        <ul id="requisitos" style="display: none;">
            <li id="longitud">❌ Debe tener al menos 6 caracteres</li>
            <li id="numeros">❌ Debe contener al menos un número</li>
            <li id="mayuscula">❌ Debe contener al menos una letra mayúscula</li>
            <li id="minuscula">❌ Debe contener al menos una letra minúscula</li>
            <li id="especial">❌ Debe contener un carácter especial</li>
        </ul>
        <br>

        <label for="confirmar_password">Confirmar Contraseña:</label>
        <input type="password" id="confirmar_password" name="confirmar_password" required>
        <span id="mensaje_error_confirmar" style="color: red;"></span><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento (DD/MM/YYYY):</label>
        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="DD/MM/YYYY" required><br><br>

        <input type="submit" value="Registrarse">
    </form>
    <br/>
    <?php include_once '../footer.php'; ?>
