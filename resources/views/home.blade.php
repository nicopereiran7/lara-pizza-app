@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('title', 'Pizzas | Nuestro Menu')

@section('content')
  <div class="content-home">
    <div class="carousel-container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/img/carousel-img01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/carousel-img02.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/carousel-img03.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="principal-container">
      <div class="principal-container__left">
        <div class="header">
          <div class="nav-item">
            <a href="#promociones">
              <i class="fas fa-arrow-alt-circle-up"></i>
              <span>Promociones</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="#pizzas">
              <i class="fas fa-pizza-slice"></i>
              <span>Pizzas</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="#acompañamientos">
              <i class="fab fa-gitter"></i>
              <span>Acompañamientos</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="#bebidas">
              <i class="fas fa-glass-whiskey"></i>
              <span>Bebidas</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="#postres">
              <i class="fas fa-ice-cream"></i>
              <span>Postres</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="#extras">
              <i class="fas fa-ice-cream"></i>
              <span>Extras</span>
            </a>
          </div>
      </div>
      <div class="data">
        <div class="data-item" id="promociones">
          <div class="title">
            <h3>Promociones</h3>
            <hr class="separator">
          </div>
          <div class="cards">
            @forelse($promociones as $promo)
              <div class="card-item">
                <div class="item-content">
                  <div class="item-img">
                    <img src={{ $promo['img'] }} alt="">
                  </div>
                  <div class="item-info">
                    <h4>{{ $promo['name'] }}</h4>
                    <p>{{ $promo['description'] }}</p>
                  </div>
                </div>
                <div class="item-btn">
                  <button>Añadir al Carro</button>
                </div>
              </div>
            @empty
              <h4>No hay promociones</h4>

            @endforelse
          </div>
        </div>
        <div class="data-item" id="pizzas">
          <div class="title">
            <h3>Pizzas</h3>
          </div>
          <div class="cards">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
          </div>
        </div>
        <div class="data-item" id="acompañamientos">
          <div class="title">
            <h3>Acompañamientos</h3>
          </div>
          <div class="cards">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
          </div>
        </div>
        <div class="data-item" id="bebidas">
          <div class="title">
            <h3>Bebidas</h3>
          </div>
          <div class="cards">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
          </div>
        </div>
        <div class="data-item" id="postres">
          <div class="title">
            <h3>Postres</h3>
          </div>
          <div class="cards">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
          </div>
        </div>
        <div class="data-item" id="extras">
          <div class="title">
            <h3>Extras</h3>
          </div>
          <div class="cards">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus molestiae impedit perferendis amet numquam quas omnis nisi quibusdam repudiandae harum architecto cumque, explicabo, molestias sed ratione iste nam? Laudantium, blanditiis.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="principal-container__right">
      <div class="siderbar">
        <h3>Tu Orden</h3>
        <img src="https://www.papajohns.cl/static/media/ic_cart_empty.1de2c93e.svg" alt="">
        <h4>Aun no tienes nada en tu orden</h4>
        <p>Empieza a seleccionar tus productos</p>
      </div>
    </div>
  </div>
</div>
@endsection