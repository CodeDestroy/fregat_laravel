<header>
  <div class="header-info">
    <div class="container-lg row" style="margin:0 auto; padding: 0;">
      <div class="header_geo col-8 col-sm-5 col-lg-5 py-2">
        <div class="hgeo"><img src="icons/hgeo.svg" class="hgeo_svg"></div>
        <div class="hgeo_text p-2">г.Воронеж</div>
        <div class="hgeo_line"></div>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
            Старых Большевиков
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Старых Большевиков</a>
            <a class="dropdown-item" href="#">Старых Большевиков</a>

          </div>
        </div>
      </div>
      <div class="header_call col-2 col-sm-4 col-lg-4 py-2">
        <div class="hcall"><a href="tel:84732120203" class="hcall-svg_phone"><img src="icons/hcall.svg"
              class="hcall_svg"></a></div>
        <div class="hcall_link"><a href="tel:84732120203" class="hcall_phone">+7 (473) 212-02-03 </a></div>
      </div>
      @guest
      <div class="header_acc col-2 col-sm-3 col-lg-3 py-2">
        <div class="hacc">
          <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
            <img src="icons/hacc.svg" class="hacc_svg">
          </a>
        </div>

        <div class="hacc_link">
          <a href="#" class="hacc_login" data-bs-toggle="modal" data-bs-target="#loginModal">
            Вход/регистрация
          </a>
        </div>
      </div>
      @else
      <!-- <div class="header_acc col-2 col-sm-3 col-lg-3 py-2">
        <div class="hacc"><a href="#" class="hacc-svg_login"><img src="icons/hacc.svg" class="hacc_svg"></a></div>
        <div class="hacc_link"><a href="#" class="hacc_login">{{ Auth::user()->name }}</a></div>
      </div> -->
      <div class="header_acc col-2 col-sm-3 col-lg-3 py-2 nav-item dropdown">
        <div class="hacc"><a href="#" class="hacc-svg_login"><img src="icons/hacc.svg" class="hacc_svg"></a></div>
        <a class="hacc nav-link dropdown-toggle p-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
          {{ Auth::user()->name }}
        </a>
        <div class="hacc_link dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Открыть профиль</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
        </div>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
          @csrf
      </form>
      <!-- <div class="header_acc col-2 col-sm-3 col-lg-3 py-2">
        <div class="hacc">
          <a href="#">
            <img src="icons/hacc.svg" class="hacc_svg">
          </a>
        </div>

        <div class="hacc_link">
          <a href="#" class="">
            Профиль
          </a>
        </div>
      </div> -->
      @endguest
    </div>
  </div>



  <div class="header-main">
    <div class="container-xl row" style="margin:0 auto; padding:0;">
      <div class="second_cont-mb">
        <div class="hlogo col-7 col-sm-3 col-lg-2"><a href="index.html"><img src="icons/hlogo.svg"
              class="hlogo-svg"></a></div>
        <div class="hsearch col-sm-6 col-lg-4 px-2">
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Поиск по артикулу (номеру детали)"
              aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <input type="image" name="image" src="icons/input.svg" class="input-svg" />
            </span>
          </div>
        </div>
        <div class="hitem_list col-5 col-sm-2 col-lg-6 py-1">
          <div class="hitem">
            <div class="hitem-pic"><a href="#"><img src="icons/hlike.svg" class="hlike_svg"></a></div>
            <div class="hitem_cont">
              <div class="hitem_main"><a href="#" class="hitem_link">Избранное</a></div>
              <div class="hitem_item"><a href="#" class="hitem_item-link">5 товаров</a></div>
            </div>
          </div>
          <div class="hitem">
            <div class="hitem-pic"><a href="#"><img src="icons/hchan.svg" class="hchan_svg"></a></div>
            <div class="hitem_cont">
              <div class="hitem_main"><a href="#" class="hitem_link">Сравнение</a></div>
              <div class="hitem_item"><a href="#" class="hitem_item-link">5 товаров</a></div>
            </div>
          </div>
          <div class="hitem">
            <div class="hitem-pic">
              <div><a href="#"><img src="icons/hbacket.svg" class="hbacket_svg"></a></div>
              <div class="hbacket_count">2</div>
            </div>
            <div class="hitem_cont">
              <div class="hitem_main"><a href="#" class="hitem_link">Корзина</a></div>
              <div class="hitem_item"><a href="#" class="hitem_item-link">10999 руб.</a></div>
            </div>
          </div>
        </div>

      </div>
      <div class="hsearch-mb my-4" style="margin: 0 auto;">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Поиск по артикулу (номеру детали)"
            aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <input type="image" name="image" src="icons/input.svg" class="input-svg" />
          </span>
        </div>
      </div>
    </div>
  </div>


  <div class="section mt-3">
    <div class="container-xl" style="padding: 0">
      <div class="row px-0">
        <div class="col">

          <button class="menu-btn" type="button" id="catalog-main-btn" data-bs-toggle="collapse"
            data-bs-target="#collapseCatalog" aria-expanded="false" aria-controls="collapseExample"
            onclick="onMainBtnClick()">
            <div class="row row-auto">
              <div class="col-5 col-md-4 menu-btn-content">
                Каталог
              </div>
              <div class="col-5 col-md-2 ">
                <div class="div-shape"></div>
                <div class="div-shape"></div>
                <div class="div-shape"></div>
              </div>
            </div>
          </button>
          <button class="menu-btn-big" type="button" id="catalog-big-btn" data-bs-toggle="collapse"
            data-bs-target="#collapseCatalog" aria-expanded="false" aria-controls="collapseExample"
            onclick="onBigBtnClick()" style="display: none;">
            <div class="row row-auto">
              <div class="col-1 col-md-2 ">
                <div class="div-shape"></div>
                <div class="div-shape"></div>
                <div class="div-shape"></div>
              </div>
              <div class="col-7 col-md-4 menu-btn-content" style="text-align: left;">
                Каталог
              </div>
              <div class="close col-1">

              </div>

            </div>
          </button>

        </div>

        <div class="col disp-none600">
          <button class="menu-small-res" type="button" id="menu-main-btn" data-bs-toggle="collapse"
            data-bs-target="#collapseMenu" aria-expanded="false" aria-controls="collapseExample">
            <div class="row row-auto">
              <div class="col-5 col-md-4 menu-btn-content">
                Меню
              </div>
              <div class="col-5 col-md-2">
                <div class="div-shape"></div>
                <div class="div-shape"></div>
                <div class="div-shape"></div>
              </div>
            </div>
          </button>
        </div>

        <div class="col-2 disp-none280">
          <button class="menu-sec-btn px-0" href="#" onclick="location.href='faq.html';">Услуги</button>

        </div>
        <div class="col-2 disp-none280 px-0">
          <button class="menu-sec-btn px-0" href="#" onclick="location.href='stock.html';">Акции</button>
        </div>
        <div class="col-2 disp-none280 px-0">
          <button class="menu-sec-btn px-0" href="#" onclick="location.href='about.html';">О компании</button>
        </div>
        <div class="col-2 disp-none280 px-0">
          <button class="menu-sec-btn px-0" href="#" onclick="location.href='news.html';">Новости</button>
        </div>
        <div class="col-2 disp-none280 px-0">
          <button class="menu-sec-btn px-0" href="#" onclick="location.href='contacts.html';">Контакты</button>
        </div>




      </div>
    </div>



  </div>

  <div class="collapse" id="collapseMenu" style="position: inherit;">

    <div class="card card-body" style="padding: 0; border: 0;">
      <div class="container-xxl px-0">
        <div class="row">
          <ul class="mb-0" style="background-color: #283346 ">
            <li class="py-4" style="text-align: center;">
              <button class="menu-sec-btn-show" href="#" onclick="location.href='faq.html';">Услуги</button>
            </li>
            <li class="py-4" style="text-align: center;">
              <button class="menu-sec-btn-show" href="#" onclick="location.href='stock.html';">Акции</button>
            </li>
            <li class="py-4" style="text-align: center;">
              <button class="menu-sec-btn-show" href="#" onclick="location.href='about.html';">О компании</button>
            </li>
            <li class="py-4" style="text-align: center;">
              <button class="menu-sec-btn-show" href="# " onclick="location.href='news.html';">Новости</button>
            </li>
            <li class="py-4" style="text-align: center;">
              <button class="menu-sec-btn-show" href="#" onclick="location.href='contacts.html';">Контакты</button>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>


  <div class="collapse" id="collapseCatalog" style="position: inherit;">
    <div class="card card-body " style="padding: 0; border: 0">
      <div class="container-xl disp-none600">
        <ul class="mt-3 ul-menu-border" style="margin-left: -30px; margin-right: -13px;">
          <li class="li2 mb-0 mt-1 px-4" id="l1" data-bs-toggle="collapse" data-bs-target="#collapseCatalogAutoZap"
            aria-expanded="false" aria-controls="collapseExample" style="font-weight: 500; background: #fff;"
            onclick="ChangeOnMinus(this)">
            <div class="row ">
              <div class="col-11">Расходники для ТО</div>
              <div class="plus col-1"></div>
            </div>

          </li>

          <div class="collapse" id="collapseCatalogAutoZap" style="position: inherit;">
            <div class="card card-body px-0" style="padding: 0; border: 0;">
              <div class="container-xl px-0 disp-none600">
                <ul class="ul2 px-4" style="text-align: left;">
                  <li class="li-inserted" style="">Воздушные фильтра</li>
                  <li class="li-inserted">Салонные фильтры</li>
                  <li class="li-inserted">Свечи зажигания 16кл</li>
                  <li class="li-inserted">Свечи зажигания 8кл</li>
                  <li class="li-inserted">Топливные фильтры внешние</li>
                  <li class="li-inserted">Топливные фильтры внутренние (Сеточка)</li>
                  <li class="li-inserted">Тормозные колодки задние</li>
                  <li class="li-inserted">Тормозные колодки передние</li>
                  <li class="li-inserted">Фильтра масляные</li>
                  <li class="li-inserted">Щетки стеклоочистителя</li>
                </ul>
              </div>
            </div>
          </div>
          <li class="li2 mb-0 mt-1 px-4" id="l2" data-bs-toggle="collapse" data-bs-target="#collapseCatalogAutoHim"
            aria-expanded="false" aria-controls="collapseExample" style="font-weight: 500; background: #fff;"
            onclick="ChangeOnMinus(this)">
            <div class="row ">
              <div class="col-11">Двигатель</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <div class="collapse" id="collapseCatalogAutoHim" style="position: inherit;">
            <div class="card card-body" style="padding: 0; border: 0;">
              <div class="container-xl px-0 disp-none600">
                <ul class="ul2 px-4" style="text-align: left;">
                  <li class="li-inserted">Тормозная система</li>
                  <li class="li-inserted">Тормозные диски</li>
                  <li class="li-inserted">Главные тормозные цилиндры</li>
                  <li class="li-inserted">Тормозные колодки барабанные</li>
                  <li class="li-inserted">Тормозные колодки дисковые</li>
                  <li class="li-inserted">Тормозные суппорта</li>
                  <li class="li-inserted">Датчики ABS</li>
                  <li class="li-inserted">Датчики износа колодок</li>
                  <li class="li-inserted">Тросы ручника</li>
                  <li class="li-inserted">Тормозные барабаны</li>
                </ul>
              </div>
            </div>
          </div>
          <li class="li2 mb-0 mt-1 px-4 " id="l3" data-bs-toggle="collapse" data-bs-target="#collapseCatalogAutoZap"
            aria-expanded="false" aria-controls="collapseExample" onclick="ChangeOnMinus(this)">

            <div class="row ">
              <div class="col-11">Подвеска</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogInstrument"
            aria-expanded="false" aria-controls="collapseExample">


            <div class="row ">
              <div class="col-11">Тормоза</div>
              <div class="plus col-1"></div>
            </div>

          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogKolesa"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Рулевое управление</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogElectr"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Электрооборудование</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogAutoKosmetika"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Отопление и вентиляция</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogMasla"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Коробка перемены передач</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogAksess"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Раздаточная коробка</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogKatalogAutoLamp"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Инструмент и принадлежности</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Автоаксессуары</div>
              <div class="plus col-1"></div>
            </div>
          </li>

          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Автокосметика</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Автохимия</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Автоэлектроника</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Аккумуляторы и пуско-зарядные устройства</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Дополнительное оборудование</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Масла, смазки и тех. жидкости </div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">Кузов</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">АВТОНОРМАЛИ (Болты, Гайки, Хомуты)</div>
              <div class="plus col-1"></div>
            </div>
          </li>
          <li class="li2 mb-0 mt-1 px-4 " data-bs-toggle="collapse" data-bs-target="#collapseCatalogFiltry"
            aria-expanded="false" aria-controls="collapseExample">
            <div class="row ">
              <div class="col-11">ПРОЧЕЕ</div>
              <div class="plus col-1"></div>
            </div>
          </li>
        </ul>
      </div>




      <div class="container-xl  disp-none280">
        <div class="row ">

          <div class="col-lg-2 col-sm-4 px-0" style="margin-bottom: 1em;  background-color:  #E6E6E6;">
            <ul class="mt-5 ul-menu">
              <li class="li1">Автозапчасти</li>
              <li class="li1">Автохимия</li>
              <li class="li1">Запчасти СЕЛЬХОЗ и СПЕЦ техники</li>
              <li class="li1">Инструмент и СТО оборудование</li>
              <li class="li1">Колёса </li>
              <li class="li1">Электрооборудование</li>
              <li class="li1">Автокосметика </li>
              <li class="li1">Масла и Спецжидкости</li>
              <li class="li1">Аксессуары</li>
              <li class="li1">Каталог автоламп</li>
              <li class="li1">Фильтры</li>
            </ul>
          </div>

          <div class="col-9 col-sm-8 div-col-menu-secondary row mt-5">
            <div class="col-lg-3 col-sm-6" style="padding: 0em;">
              <ul class="ul2">
                <li style="font-weight: bold;">Двигатель</li>
                <li>Ремкомплекты ГРМ</li>
                <li>Свечи зажигания</li>
                <li>Свечи накаливания</li>
                <li>Фильтры воздушные</li>
                <li>Фильтры масляные</li>
                <li>Интеркулеры</li>
              </ul>
              <ul class="ul2">
                <li style="font-weight: bold;">Тормозная система</li>
                <li>Тормозные диски</li>
                <li>Главные тормозные цилиндры</li>
                <li>Тормозные колодки барабанные</li>
                <li>Тормозные колодки дисковые</li>
                <li>Тормозные суппорта</li>
                <li>Датчики ABS</li>
                <li>Датчики износа колодок</li>
                <li>Тросы ручника</li>
                <li>Тормозные барабаны</li>
              </ul>
              <ul class="ul2">
                <li style="font-weight: bold;">Детали кузова</li>
                <li>Клипсы автомобильные</li>
                <li>Зеркала</li>
                <li>Зеркальные элементы</li>
                <li>Корпуса зеркал</li>
              </ul>


            </div>


            <div class="col-lg-3 col-sm-6" style="padding: 0em;">
              <ul class="ul2">
                <li style="font-weight: bold;">Рулевое управление</li>
                <li>Насосы гидроусилителя руля</li>
                <li>Рулевые рейки</li>
                <li>Тяги рулевые</li>
              </ul>

              <ul class="ul2">
                <li style="font-weight: bold;">Трансмиссия</li>
                <li>Диски сцепления</li>
                <li>Выжимные подшипники</li>
                <li>Комплекты сцепления</li>
                <li>Шрусы</li>
                <li>Маховики</li>

              </ul>

              <ul class="ul2">
                <li style="font-weight: bold;">Система выпуска</li>
                <li>Лямбда-зонды</li>
                <li>Турбокомпрессоры</li>
                <li>Глушители</li>

              </ul>

              <ul class="ul2">
                <li style="font-weight: bold;">Фильтры</li>
                <li>Фильтры воздушные</li>
                <li>Фильтры масляные</li>
                <li>Фильтры салона</li>
                <li>Фильтры топливные</li>

              </ul>
            </div>

            <div class="col-lg-3 col-sm-6" style="padding: 0em;">
              <ul class="ul2">
                <li style="font-weight: bold;">Система охлаждения</li>
                <li>Вентиляторы охлаждения</li>
                <li>Водяные насосы</li>
                <li>Датчики температуры ОЖ</li>
                <li>Радиаторы</li>
              </ul>
              <ul class="ul2">
                <li style="font-weight: bold;">Ходовая часть</li>
                <li>Амортизаторы</li>
                <li>Каталог колесных дисков</li>
                <li>Каталог шин</li>
                <li>Подшипники ступицы</li>
                <li>Пружины</li>
                <li>Рычаги</li>
                <li>Стойки стабилизатора</li>
                <li>Шаровые опоры</li>
                <li>Колесные болты и гайки</li>
                <li>Сайлентблоки</li>
              </ul>
            </div>

            <div class="col-lg-3 col-sm-6" style="padding: 0em;">
              <ul class="ul2">
                <li style="font-weight: bold;">Отопление / кондиционирование</li>
                <li>Фильтры салона</li>
              </ul>

              <ul class="ul2">
                <li style="font-weight: bold;">Топливная система</li>
                <li>Бензонасосы</li>
                <li>Фильтры топливные</li>
                <li>Датчики уровня топлива </li>
              </ul>

              <ul class="ul2">
                <li style="font-weight: bold;">Электрооборудование</li>
                <li>Генераторы</li>
                <li>Стартеры</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content login-modal">

      <div class="modal-header border-0 pb-0">
        <h4 class="modal-title w-100 text-center fw-bold">
          Войти в личный кабинет
        </h4>

        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body pt-2">

        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="mb-3">
            <input
              type="text"
              name="email"
              class="form-control login-input"
              placeholder="Логин"
              required
            >
          </div>

          <div class="mb-3">
            <input
              type="password"
              name="password"
              class="form-control login-input"
              placeholder="Пароль"
              required
            >
          </div>

          <button class="btn btn-danger w-100 login-btn">
            ВОЙТИ
          </button>

          <div class="text-center mt-3">

            <a href="{{ route('register') }}" class="login-register">
              Регистрация
            </a>

            <br>

            <a href="{{ route('password.request') }}" class="login-forgot">
              Забыли пароль?
            </a>

          </div>

        </form>

      </div>

    </div>
  </div>
</div>
<style>
  .login-modal{
  border-radius: 8px;
  padding: 10px 20px 25px;
}

.login-input{
  height: 50px;
  border-radius: 4px;
  background:#f5f5f5;
  border:1px solid #e5e5e5;
}

.login-btn{
  height:50px;
  font-weight:600;
  letter-spacing:1px;
}

.login-register{
  color:#ff3b00;
  font-size:14px;
  text-decoration:none;
}

.login-forgot{
  font-size:13px;
  color:#444;
  text-decoration:none;
}
</style>
</header>