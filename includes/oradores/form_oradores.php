<div class="formulario" id="formulario">
    <div class="container">
        <div style="text-align: center">
            <span>CONVIÉRTETE EN UN</span>
            <h1>ORADOR</h1>
            <p>
                Anótate como orador para dar una charla ignite. Cuéntanos de qué
                quieres hablar!
            </p>
        </div>
        <form action="includes/proc_form_oradores.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col">

                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre"
                        aria-label="Nombre" required><br><br>
                </div>
                <div class="col">
                    <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido"
                        aria-label="Apellido" required><br><br>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input class="form-control" type="text" id="tema" name="tema" placeholder="Tema" aria-label="Tema"
                        required><br><br>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <textarea id="descripcion_tema" name="descripcion_tema" class="form-control"
                        placeholder="Sobre qué quieres hablar?" aria-label="Sobre qué quieres hablar?" cols="30"
                        rows="10" required></textarea><br><br>
                </div>
            </div>
            <label for="foto">Subir Foto (menos de 500KB):</label>
            <input type="file" id="foto" name="foto" accept="image/jpeg, image/png" required><br><br>

            <input type="submit" class="btn mb-3" style="width: 100%; background-color: #98ca50; color: white"
                value="Enviar">
        </form>
    </div>
</div>