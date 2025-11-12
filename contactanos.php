<?php include 'header.php'; ?>
<div class="my-5 pt-4 position-relative">
    <div class="container flex pt-5 text-center">
        <h1 class="fw-bold pb-4">Mantente en contacto con nosotros</h1>
        <form class="flex" id="formularioPersona">
            <div class="mb-3 mx-auto w-50">
                <input type="text" maxlength="30" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
            </div>
            <div class="mb-3 mx-auto w-50">
                <input type="email" maxlength="30" class="form-control" id="correo" placeholder="Ingresa tu correo">
            </div>
            <button type="submit" class="btn">Guardar</button>
        </form>
        <h1 class="pt-3 fw-bold text-dark">Lista de contactos</h1>
        <div id="personasList" class="p-5"></div>
    </div>
</div>
<script src="js/main.js"></script> 
<?php include 'footer.php'; ?>