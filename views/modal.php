<div class="modal" id="modal">
    <div class="form-container sesion sesion-active" id="inicioSesion">
        <div class="form-title">
            <h2>Iniciar Sesión</h2>
            <button class="btn" onclick="cerrarModal()">X</button>
        </div>
        <form action="router/iniciarSesion.php" method="POST">
            <div class="input-container">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div class="input-container">
                <label for="">Contraseña</label>
                <input type="password" name="password">
            </div>

            <div class="input-container">
                <input type="submit" value="Ingresar" class="btn">
            </div>
        </form>
        <div class="input-container">
            <button class="btn" onclick="cambioDeFormulario()">Registrarme</button>
        </div>
    </div>

    <div class="form-container sesion" id="registro">
        <div class="form-title">
            <h2>Registrarme</h2>
            <button class="btn" onclick="cerrarModal()">X</button>
        </div>
        <form action="router/cargaUsuario.php" method="POST">
            <div class="input-container">
                <label for="">Nombre</label>
                <input type="text" name="nombre">
            </div>
            <div class="input-container">
                <label for="">Apellido</label>
                <input type="text" name="apellido">
            </div>
            <div class="input-container">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div class="input-container">
                <label for="">Contraseña</label>
                <input type="password" name="password">
            </div>

            <div class="input-container">
                <input type="submit" value="Registrarme" class="btn">
            </div>
        </form>
        <div class="input-container">
            <button class="btn" onclick="cambioDeFormulario()">Iniciar Sesión</button>
        </div>
    </div>
</div>