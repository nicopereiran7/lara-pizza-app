<nav class="navegation">  
  <div class="navegation-left">
    <a href="/">
      <img src="/img/logo.svg" alt="Logo">
    </a>
  </div>
  <div class="navegation-center">
    <a href="/">
      <div class="navegation__menu {{ request()->routeIs('home') ? 'active' : '' }}">
        <i class="fas fa-address-book"></i>
        <span>Menu</span>
      </div>
    </a>
    <a href="/puntos">
      <div class="navegation__menu {{ request()->routeIs('puntos') ? 'active' : '' }}">
        <i class="far fa-star"></i>
        <span>Puntos</span>
      </div>
    </a>
    <a href="/pedidos">
      <div class="navegation__menu {{ request()->routeIs('pedidos') ? 'active' : '' }}">
        <i class="far fa-list-alt"></i>
        <span>Mis Pedidos</span>
      </div>
    </a>
    <a href="/locales">
      <div class="navegation__menu {{ request()->routeIs('locales') ? 'active' : '' }}">
        <i class="fas fa-map-marker-alt"></i>
        <span>Locales</span>
      </div>
    </a>
    @auth
      <a href="/perfil">
        <div class="navegation__menu {{ request()->routeIs('perfil') ? 'active' : '' }}">
          <i class="fas fa-user-alt"></i>
          <span>Mi Cuenta</span>
        </div>
      </a>
    @else
      <div class="navegation__menu">
        <i class="far fa-user"></i>
        <span data-toggle="modal" data-target="#exampleModalCenter">Ingresar</span>
      </div>
    @endauth
  </div>
  <div class="navegation-right">
    <i class="fas fa-shopping-cart"></i>
  </div>
</nav>