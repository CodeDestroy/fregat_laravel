@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<body>
  <div class="wrapper">
    <div class="container-xl  py-5" style="margin: 0 auto;">

      <div class="owl-carousel owl-theme slider">
        <!--Слайд 1-->
        <div class="slide">
          <div class="slide_cont py-5 px-5">
            <h2 class="slide_title">Антисептические средства </h2>
            <p class="slide_text py-2">Успей купить дезинфицирующее средство Анолит АНК Супер</p>
            <button type="button" class="btn btn-danger "><a href="#" class="slide_link">ПОДРОБНЕЕ</a></button>
          </div>
        </div>
        <div class="slide">
          <div class="slide_cont py-5 px-5">
            <h2 class="slide_title">Антисептические средства </h2>
            <p class="slide_text py-2">Успей купить дезинфицирующее средство Анолит АНК Супер</p>
            <button type="button" class="btn btn-danger "><a href="#" class="slide_link">ПОДРОБНЕЕ</a></button>
          </div>
        </div>
        <div class="slide">
          <div class="slide_cont py-5 px-5">
            <h2 class="slide_title">Антисептические средства </h2>
            <p class="slide_text py-2">Успей купить дезинфицирующее средство Анолит АНК Супер</p>
            <button type="button" class="btn btn-danger"><a href="#" class="slide_link">ПОДРОБНЕЕ</a></button>
          </div>
        </div>
        <!--Остальные слайды-->

      </div>


      <div class="Main-Title py-3">
        <div class="squad"></div>
        <div class="Main-Title_txt px-2">Акции</div>
        <div class="Main-icon"><img src="icons/stock.svg" style="max-width: 26px;"></div>
      </div>
      <div class="owl-carousel carouselOne">
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/part.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Электровентилятор отопл. 2170-72. Priora с климат. устан. Panasonic</div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/part.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Электровентилятор отопл. 2170-72. Priora с климат. устан. Panasonic</div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/part.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Электровентилятор отопл. 2170-72. Priora с климат. устан. Panasonic</div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/part.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Электровентилятор отопл. 2170-72. Priora с климат. устан. Panasonic</div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
      </div>




      <div class="Main-Title py-3">
        <div class="squad"></div>
        <div class="Main-Title_txt px-2">Хит продаж</div>
        <div class="Main-icon"><img src="icons/stock.svg" style="max-width: 26px;"></div>
      </div>
      <div class="owl-carousel carouselOne">
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/hit.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Летняя жидкость для стеклоомывателя 0.25 л, SONAX, 388141 </div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/hit.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Летняя жидкость для стеклоомывателя 0.25 л, SONAX, 388141 </div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/hit.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Летняя жидкость для стеклоомывателя 0.25 л, SONAX, 388141 </div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
        <div class="stock-item">
          <div class="stock-item_pic py-3"><img src="img/hit.png" class="stock-item_img"></div>
          <div class="stock-item_cont">
            <div class="stock-item_text">Летняя жидкость для стеклоомывателя 0.25 л, SONAX, 388141 </div>
            <div class="stock-item_icon"><img src="icons/stock-item.svg" style="max-width: 50px;"></div>
          </div>
          <div class="stock-item_price py-1">350.00 р</div>
        </div>
      </div>

      <div class="Main-Title py-3">
        <div class="squad"></div>
        <div class="Main-Title_txt px-2">Новости</div>
        <div class="Main-icon"><img src="icons/stock.svg" style="max-width: 26px;"></div>
      </div>
      <div class="owl-carousel carouselOne">
        <div class="news-item">
          <div class="news-item_img  py-1"><img src="img/news.png" class="news-pic"></div>
          <div class="news=item_cont px-2 py-1">
            <p class="news-title">Итоги первого дня режима распознования автомобилей в Москве</p>
            <p class="news-text">С 22 апреля камеры на дорогах Москвы перевели в новый рабочий режим распознования
              автомобилей без </p>
            <div style="text-align: right;">
              <a href="news-inside.html" class="news-link">Читать</a>
            </div>
          </div>
        </div>
        <div class="news-item">
          <div class="news-item_img  py-1"><img src="img/news.png" class="news-pic"></div>
          <div class="news=item_cont px-2 py-1">
            <p class="news-title">Итоги первого дня режима распознования автомобилей в Москве</p>
            <p class="news-text">С 22 апреля камеры на дорогах Москвы перевели в новый рабочий режим распознования
              автомобилей без </p>
            <div style="text-align: right;">
              <a href="news-inside.html" class="news-link">Читать</a>
            </div>
          </div>
        </div>
        <div class="news-item">
          <div class="news-item_img  py-1"><img src="img/news.png" class="news-pic"></div>
          <div class="news=item_cont px-2 py-1">
            <p class="news-title">Итоги первого дня режима распознования автомобилей в Москве</p>
            <p class="news-text">С 22 апреля камеры на дорогах Москвы перевели в новый рабочий режим распознования
              автомобилей без </p>
            <div style="text-align: right;">
              <a href="news-inside.html" class="news-link">Читать</a>
            </div>
          </div>
        </div>
        <div class="news-item">
          <div class="news-item_img  py-1"><img src="img/news.png" class="news-pic"></div>
          <div class="news=item_cont px-2 py-1">
            <p class="news-title">Итоги первого дня режима распознования автомобилей в Москве</p>
            <p class="news-text">С 22 апреля камеры на дорогах Москвы перевели в новый рабочий режим распознования
              автомобилей без </p>
            <div style="text-align: right;">
              <a href="news-inside.html" class="news-link">Читать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="Main-Title py-3">
        <div class="squad"></div>
        <div class="Main-Title_txt px-2">Бренды</div>
        <div class="Main-icon"><img src="icons/stock.svg" style="max-width: 26px;"></div>
      </div>
      <div class="owl-carousel carouselTwo py-3">
        <div class="brand-item"><img src="img/brand.png"></div>
        <div class="brand-item"><img src="img/brand.png"></div>
        <div class="brand-item"><img src="img/brand.png"></div>
        <div class="brand-item"><img src="img/brand.png"></div>
        <div class="brand-item"><img src="img/brand.png"></div>
        <div class="brand-item"><img src="img/brand.png"></div>
      </div>


    </div>


  </div>

  <!-- <script src="resources/js/jquery.min.js"></script>
  <script type="text/javascript" src="resources/js/bootstrap.bundle.js"></script>
  <script lang="javascript" src="resources/js/script.js"></script>
  <script src="resources/owl/owl.carousel.min.js"></script>
  <script src="resources/owl/owl.carousel.js"></script>
  <script src="resources/js/index.js"></script> -->
   <!-- @vite(['resources/js/jquery.min.js', 'resources/js/bootstrap.bundle.js',
                'resources/js/script.js', 'resources/owl/owl.carousel.min.js',
                'resources/owl/owl.carousel.js', 'resources/js/index.js']) -->
  <script type="module">
    $(document).ready(function () {
      $('#login_btn_header')[0].click()
    })


    $(document).ready(function () {
      $('.slider').owlCarousel({

        items: 1

      });
    });

    $(document).ready(function () {
      $('.carouselOne').owlCarousel({
        responsive: {
          0: {
            items: 1
          },
          574: {
            items: 2
          },
          900: {
            items: 3
          },
          1400: {
            items: 4
          }
        }
      });
    });

    $(document).ready(function () {
      $('.carouselTwo').owlCarousel({
        responsive: {
          0: {
            items: 3
          },
          574: {
            items: 3
          },
          700: {
            items: 6
          }

        }
      });
    });


  </script>

</body>

@endsection