<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metaverso MEDAC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="assets/logo-vector/MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet" type="text/css">


  <!-- ENLACE ESTILOS -->

  <link rel="stylesheet" href="containers/navbar/navbar.css">
  <link rel="stylesheet" href="containers/faq/faq.css">
  <link rel="stylesheet" href="containers/footer/footer.css">
  <link rel="stylesheet" href="css/app.css">

  <script src="https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.11.1/firebase-database.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/10.11.1/firebase-auth.min.js"></script>

</head>

<body>


  <!-- ENLACE COMPONENTES -->

  <?php require('containers/navbar/navbar.html') ?>
  <?php require('containers/faq/faq.html') ?>
  <?php require('containers/footer/footer.html') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/register.js"></script>
  <script src="js/login.js"></script>
</html>