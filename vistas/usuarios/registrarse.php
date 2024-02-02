<?php include('../header.php'); include('../../css/php/login-style.php');?>

<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form id="registrar_usuario" action="../../controllers/Registrar.php" method="POST">
                <h4>REGISTRAR NUEVO USUARIO</h4>
                <h6>Llene los campos requeridos para su registro</h6>
                <div class="row mb-4">
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nombres" name="nombres" class="form-control" />
                        <label class="form-label" for="nombres">Nombres</label>
                    </div><br>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="DNI" name="DNI" class="form-control" />
                        <label class="form-label" for="DNI">DNI</label>
                    </div>
                    </div>
                    <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="apellidos" name="apellidos" class="form-control" />
                        <label class="form-label" for="apellidos">Apellidos</label>
                    </div><br>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" style="background-color: #3B71CA; border: 0px;" class="form-control" disabled/>
                        <label class="form-label" style="color: white;">Recuede verificar sus datos</label>
                    </div>
                    </div>
                </div>

                <!-- Correo -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="correo" name="correo" class="form-control" />
                    <label class="form-label" for="correo">Correo electronico</label>
                </div>

                <!-- Contraseña -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="contraseña" name="contraseña" class="form-control" />
                    <label class="form-label" for="contraseña">Contraseña</label>
                </div>

                <!-- Enviar formulario -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">REGISTRASE</button>

                <div class="text-center">
                    <p>o registrese con:</p>
                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
      </div>
    </div>
  </div>
</section>

<?php include('../footer.php'); ?>