<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverso MEDAC</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet" type="text/css">
    <link rel="icon" href="assets\logo-vector\MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ENLACE ESTILOS -->
    <link rel="stylesheet" href="containers/footer/footer.css">
    <link rel="stylesheet" href="containers/navbar/navbar.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/app.css">
<!-- 
    <script type="module" src="https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js"></script>
  <script type="module" src="https://www.gstatic.com/firebasejs/10.11.1/firebase-database.js"></script>
  <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/firebase/10.11.1/firebase-auth.min.js"></script> -->
    <script type="module" src="js/login.js"></script>

</head>

<body>

   <?php require('containers/navbar/navbar.html') ?>

    <section class="container-fluid py-3">
        <div class="row">
            <div class="col-md-6 col-xs-10 my-auto order-2 order-md-1">
                <img src="assets/assembly/web/loginPic.svg" class="img-fluid" alt="Imagen login / registro">
            </div>
            <div class=" col-md-5 col-lg-4 col-xs-10 mx-auto my-auto order-1 order-md-2">
                <div class="text-center my-3 mb-5">
                    <img src="assets/logo-vector/MEDAC_imagotipo_horiz_azul_RGB.svg" class="w-75" alt="Logotipo de MEDAC">
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-text  text-center"style="width: 2.5em;">
                        <i class="fa-solid fa-user" ></i>
                    </div>
                    <input id="emaillog" class="form-control bg-light" type="text" placeholder="Usuario" />
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-text text-center" style="width: 2.5em;">
                        <i class="fa-solid fa-key "></i>
                    </div>
                    <input id="passwordlog" class="form-control bg-light" type="password" placeholder="Contraseña" />
                </div>
                <div class="d-flex justify-content-around mt-3">
                    <div class="d-flex align-items-center gap-1">
                        <input class="form-check-input" type="checkbox" id="checkLogin" />
                        <label for="checkLogin"></label>
                        <div class="pt-1 small text-secondary">Recuerdame</div>
                    </div>
                    <div class="pt-1">
                        <a href="#" class="blue text-decoration-underline">¿Contraseña olvidada?</a>
                    </div>
                </div>
                <div class=" d-flex">
                    <button class="btn text-white mx-auto w-50 mt-4 fw-semibold" style="background-color: var(--principal);">
                        Entrar
                    </button>
                </div>
                <div class="d-flex gap-1 justify-content-center mt-3">
                    <p>¿No tienes una cuenta?</p>
                    <p><a href="register.php" class="blue text-decoration-underline">Regístrate</a></p>
                </div>

            </div>
        </div>
    </section>



    <!-- ENLACE COMPONENTES -->

    <?php require('containers/footer/footer.html') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>