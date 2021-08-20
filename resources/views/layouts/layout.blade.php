<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;900&display=swap" rel="stylesheet">
  <!---->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/layout.css">
  
  @yield('css')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>
<body>
  @include("../components.nav")

  @include('../components.modalLogin')

  <!-- Content -->
  <div class="layout-content">
    @yield('content')
  </div>

  <!-- footer -->
  <footer>
    <div class="footer-top">
      <div class="info">
        <div class="footer-top__left">
          <img src="/img/logo.svg" alt="Logo">
        </div>
        <div class="footer-top__right">
          <div class="help-item">
            <div class="help-item__title">
              <h3>Papa John’s</h3>
            </div>
            <div class="links">
              <a href="#">Comunicado</a>
            </div>
          </div>
          <div class="help-item">
            <div class="help-item__title">
              <h3>Ayuda</h3>
            </div>
            <div class="links">
              <a href="#">Comunicado</a>
              <a href="#">Comunicado</a>
            </div>
          </div>
          <div class="help-item">
            <div class="help-item__title">
              <h3>Legal</h3>
            </div>
            <div class="links">
              <a href="#">Comunicado</a>
              <a href="#">Comunicado</a>
            </div>
          </div>
          <div class="help-item">
            <div class="help-item__title">
              <h3>Locales</h3>
            </div>
            <div class="links">
              <a href="#">Comunicado</a>
              <a href="#">Comunicado</a>
            </div>
          </div>
          <div class="help-item">
            <div class="help-item__title">
              <h3>Puntos</h3>
            </div>
            <div class="links">
              <a href="#">Comunicado</a>
            </div>
          </div>
        </div>
      </div>
      <div class="social-networks">
        <h3>Siguenos</h3>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-tiktok"></i>
      </div>
    </div>
    <div class="footer-botton">
      <p>2021 Papa John's Internacional, Inc. Todos los derechos reservados</p>
    </div>
  </footer>
</body>
</html>