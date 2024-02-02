<?php include('../header.php'); include('../../css/php/login-style.php');?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          SISTEMA GESTOR DE <br />
          <span style="color: hsl(218, 81%, 75%)">TRANSPORTE</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form id="iniciar_sesion" action="../../controllers/Login.php" method="POST">
                <h4>INICIO DE SESIÓN</h4>
                <!-- inputs de correo y contraseña -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="usuario" name="usuario" class="form-control" />
                    <label class="form-label" for="usuario">Correo electronico</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="contraseña" name="contraseña" class="form-control" />
                    <label class="form-label" for="contraseña">Contraseña</label>
                </div>
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="recordar" checked />
                        <label class="form-check-label" for="recordar"> Recordar </label>
                    </div>
                    </div>
                    <div class="col">
                    <a href="#!">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <!-- Boton de inicio de sesion -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">INICIAR SESION</button>

                <!-- Registrar nuevo usuario -->
                <div class="text-center">
                    <p>¿No esta registrado? <br><a href="registrarse.php">Registrarse</a></p>
                    <p>o registrese con:</p>
                    <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>
                    <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>
                    <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>
                    <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="../../js/sesion.js"></script>
<?php include('../footer.php'); ?>