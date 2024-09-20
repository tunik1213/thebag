
@extends('layout')
@section('content')
  
  <div id="mainCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mainCarousel" data-slide-to="1"></li>
      <li data-target="#mainCarousel" data-slide-to="2"></li>
      <li data-target="#mainCarousel" data-slide-to="3"></li>
      <li data-target="#mainCarousel" data-slide-to="4"></li>
      <li data-target="#mainCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-image" id="main-slide-1"></div>
        <div class="container">
          <div class="carousel-caption text-right">
            <div class="container">
              <h1>Сумка Bubble Gum</h1>
              <p>Сумка з еко-шкіри ручної роботи, яка <br /> підкреслить вашу яскраву особистість</p>
              <p><a class="btn btn-lg btn-primary" href="/product/bubble_gum" role="button">Детальніше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-image" id="main-slide-2"></div>
        <div class="container">
          <div class="carousel-caption text-right">
            <div class="container">
              <h1>Сумка Ocean</h1>
              <p>Сумка з еко-шкіри ручної роботи, яка <br /> підкреслить вашу індивідуальність</p>
              <p><a class="btn btn-lg btn-primary" href="/product/ocean" role="button">Дізнатися більше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-image" id="main-slide-3"></div>
        <div class="container">
          <div class="carousel-caption text-left">
            <div class="container">
              <h1>Cумка She</h1>
              <p>Сумка з натуральної шкіри ручної <br /> роботи, яку хочеться носити щодня</p>
              <p><a class="btn btn-lg btn-primary" href="/product/she" role="button">Докладніше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-image" id="main-slide-4"></div>
        <div class="container">
          <div class="carousel-caption text-left">
            <div class="container">
              <h1>Сумка Bubble Gum</h1>
              <p>Сумка з еко-шкіри ручної роботи, яка <br /> підкреслить вашу яскраву особистість</p>
              <p><a class="btn btn-lg btn-primary" href="/product/bubble_gum" role="button">Детальніше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-image" id="main-slide-5"></div>
        <div class="container">
          <div class="carousel-caption text-left">
            <div class="container">
              <h1>Сумка Ocean</h1>
              <p>Сумка з еко-шкіри ручної роботи, <br /> яка підкреслить вашу індивідуальність</p>
              <p><a class="btn btn-lg btn-primary" href="/product/ocean" role="button">Дізнатися більше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-image" id="main-slide-6"></div>
        <div class="container">
          <div class="carousel-caption text-right">
            <div class="container">
              <h1>Cумка She</h1>
              <p>Сумка з натуральної шкіри ручної <br /> роботи, яку хочеться носити щодня</p>
              <p><a class="btn btn-lg btn-primary" href="/product/she" role="button">Докладніше</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

{{-- trick for preloading images --}}
  <div style="display:none">
    <img src="/img/pink1.jpg" />
    <img src="/img/pink2.jpg" />
    <img src="/img/blue1.jpg" />
    <img src="/img/blue2.jpg" />
    <img src="/img/black1.jpg" />
    <img src="/img/black2.jpg" />
  </div>

@endsection


@section('scripts')
$('.carousel').on('touchstart', function(event){
  const xClick = event.originalEvent.touches[0].pageX;
  $(this).one('touchmove', function(event){
      const xMove = event.originalEvent.touches[0].pageX;
      const sensitivityInPx = 5;

      if( Math.floor(xClick - xMove) > sensitivityInPx ){
          $(this).carousel('next');
      }
      else if( Math.floor(xClick - xMove) < -sensitivityInPx ){
          $(this).carousel('prev');
      }
  });
  $(this).on('touchend', function(){
      $(this).off('touchmove');
  });
});
@endsection