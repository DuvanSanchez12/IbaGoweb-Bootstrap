<?php include 'header.php'; ?>    
<?php if (isset($_GET['success'])): ?>
  <div class="alert alert-success alert-dismissible fade show text-center p-5 my-5" role="alert">
    <strong>¡Gracias!</strong> Te has suscrito correctamente a las notificaciones de IbaGO 🎉
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php elseif (isset($_GET['error'])): ?>
  <div class="alert alert-danger alert-dismissible fade show text-center pt-5 my-5" role="alert">
    <strong>¡Error!</strong> Ocurrió un problema al guardar tus datos. Inténtalo nuevamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
<div id="inicio" class="container my-5 pt-4 position-relative">
      <div
        class="bg-dark border-dark rounded h-100 shadow-sm overflow-hidden position-relative"
      >
        <div id="map" class="position-absolute top-0 start-0 w-100 h-100"></div>
        <div
          class="map-overlay position-absolute top-0 start-0 w-100 h-100"
        ></div>
        <div
          class="map-text position-absolute top-50 start-50 translate-middle text-center text-white"
        >
          <h1 class="font-text fw-bold">Bienvenido a IbaGO</h1>
          <h2 class="fw-normal pt-1 fs-6 font-text">
            Explora Ibagué y descubre sus lugares turísticos más importantes.
          </h2>
          <button id="explorarBtn" class="btn btn2 fw-semibold mt-3">
            Explorar mapa
          </button>
        </div>
      </div>
    </div>
    <div class="container-sm pb-5">
      <h1 class="font-text fw-medium text-center mb-4 text-capitalize">
        Lugares destacados
      </h1>
      <div
        class="d-flex justify-content-center align-items-center flex-wrap gap-4"
      >
        <div class="card text-center" style="width: 18rem">
          <img
            src="images/iglesia.jpg"
            class="card-img-top fixed-img"
            alt="Iglesia"
          />
          <div class="card-body">
            <h5 class="card-title font-text fw-bold">Iglesia del Carmen</h5>
            <p class="card-text font-text">
              Uno de los templos más emblemáticos de Ibagué.
            </p>
            <button
              class="btn fw-normal text-black border-black btn-outline-light mt-3"
            >
              Ir al lugar
            </button>
          </div>
        </div>
        <div class="card text-center" style="width: 18rem">
          <img
            src="images/teatro.jpg"
            class="card-img-top fixed-img"
            alt="Teatro Tolima"
          />
          <div class="card-body">
            <h5 class="card-title font-text fw-bold">Teatro Tolima</h5>
            <p class="card-text font-text">
              El principal escenario cultural de la ciudad.
            </p>
            <button
              class="btn fw-normal text-black border-black btn-outline-light mt-3"
            >
              Ir al lugar
            </button>
          </div>
        </div>
        <div class="card text-center" style="width: 18rem">
          <img
            src="images/panoptico.jpg"
            class="card-img-top fixed-img"
            alt="Panóptico de Ibagué"
          />
          <div class="card-body">
            <h5 class="card-title font-text fw-bold">Panóptico de Ibagué</h5>
            <p class="card-text font-text">
              Un ícono arquitectónico y cultural de la ciudad.
            </p>
            <button
              class="btn fw-normal text-black border-black btn-outline-light mt-3"
            >
              Ir al lugar
            </button>
          </div>
        </div>
        <div class="card text-center" style="width: 18rem">
          <img
            src="images/cañon.jpeg"
            class="card-img-top fixed-img"
            alt="Cañón del Combeima"
          />
          <div class="card-body">
            <h5 class="card-title font-text fw-bold">Cañón del Combeima</h5>
            <p class="card-text font-text">
              Un impresionante cañón natural que ofrece vistas espectaculares.
            </p>
            <button
              class="btn fw-normal text-black border-black btn-outline-light mt-3"
            >
              Ir al lugar
            </button>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>