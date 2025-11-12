<?php include 'header.php'; ?>
        <div class="container">
            <h1>FORMULARIO</h1>
            <form action="" id="formularioPersona">
                <div class="mb-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo">
                </div>
                <button type="submit" class="btn btn-dark">Guardar</button>
            </form>
            <div class="ListaPersonas">
                <h2>Lista de Contactos</h2>
                <ul id="personasList">
                </ul>
            </div>
        </div>
        <script src="js/main2.js" async defer></script>
