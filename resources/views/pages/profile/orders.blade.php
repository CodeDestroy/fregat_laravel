@extends('layouts.app')

@section('title', 'Каталог для оптовиков')

@section('content')
<style>
        :root {
            --brand-dark: #2c3644;
            --brand-orange: #ff3d00;
            --brand-gray: #cccccc;
            --text-main: #333333;
        }

        body { background-color: #fff; color: var(--text-main); font-family: sans-serif; }

        

        /* Аккордеон */
        .accordion-item { border: none; margin-bottom: 12px; }
        .accordion-button {
            background-color: var(--brand-gray) !important;
            color: var(--text-main) !important;
            padding: 12px 20px;
            font-size: 13px;
            font-weight: bold;
            box-shadow: none !important;
        }
        .accordion-button:after { filter: grayscale(1); }
        .accordion-button:not(.collapsed) { border-bottom: 1px solid #bbb; }

        /* Бейджи в заголовке */
        .header-status {
            background: white;
            padding: 4px 20px;
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 0.5px;
            color: #888;
            margin-right: 15px;
            border-radius: 2px;
        }
        .header-status.in-work { background: var(--brand-dark); color: white; }

        /* Внутренние плашки статусов */
        .inner-label {
            display: inline-block;
            padding: 6px 25px;
            background: var(--brand-gray);
            color: white;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 2px;
            margin-bottom: 10px;
        }
        .inner-label.danger { background: var(--brand-orange); }

        /* Разделители секций */
        .section-title {
            display: block;
            font-size: 12px;
            color: #999;
            border-bottom: 1px solid #eee;
            padding-bottom: 4px;
            margin-bottom: 12px;
        }

        .product-name { font-size: 13px; line-height: 1.3; }
        .price-val { font-weight: bold; font-size: 18px; white-space: nowrap; }

        @media (max-width: 576px) {
            .header-status { display: none; } /* Экономим место на мобилках */
            .price-val { font-size: 15px; }
        }
    </style>
<body>
 <div class="wrapper">


<div class="container-xl  py-5" style="margin: 0 auto;">

<div class="Main-Title py-3">
    <div class="squad"></div>
    <div class="Main-Title_txt px-2">Личный кабинет</div>
  </div>

<div class="container py-4">
    
    
    <!-- Навигация (Сетка 2x2 на мобильных, 4 в ряд на ПК) -->
    @include('pages.profile.partials.profile_header')

    <div class="accordion" id="orderHistory">

        <!-- ЗАКАЗ 1 (Развернут) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#order1">
                    <div class="d-flex justify-content-between align-items-center w-100 me-3">
                        <span>Заказ №125 от 24.04.2019, 2 товара на сумму 13100 р</span>
                        <span class="header-status">ЗАВЕРШЕННЫЙ</span>
                    </div>
                </button>
            </h2>
            <div id="order1" class="accordion-collapse collapse show">
                <div class="accordion-body px-4">
                    <div class="text-end"><span class="inner-label">Оплачено</span></div>
                    <span class="section-title">Оплата</span>
                    <div class="row mb-2 align-items-center">
                        <div class="col-7 product-name">SONAX XTREME Готовый зимний стеклоомыватель "Чистый обзор"</div>
                        <div class="col-2 text-center small">2 шт</div>
                        <div class="col-3 text-end price-val">600 р</div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-7 product-name">SONAX XTREME Готовый зимний стеклоомыватель "Чистый обзор"</div>
                        <div class="col-2 text-center small">1 шт</div>
                        <div class="col-3 text-end price-val">12500 р</div>
                    </div>

                    <div class="text-end"><span class="inner-label">Доставлено</span></div>
                    <span class="section-title">Доставка</span>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="fw-bold small">г. Воронеж, ул. 20летия Октября, дом 25, кв. 143</div>
                        <div class="text-muted small">Бесплатно</div>
                    </div>

                    <div class="border-top pt-3 text-end">
                        <span class="text-muted small me-3">Итоговая сумма:</span>
                        <span class="price-val fs-3">13100 р</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ЗАКАЗ 2 (В обработке) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#order2">
                    <div class="d-flex justify-content-between align-items-center w-100 me-3">
                        <span>Заказ №125 от 24.04.2019, 2 товара на сумму 13100 р</span>
                        <span class="header-status in-work">В ОБРАБОТКЕ</span>
                    </div>
                </button>
            </h2>
            <div id="order2" class="accordion-collapse collapse show">
                <div class="accordion-body px-4">
                    <div class="text-end"><span class="inner-label danger">Не оплачено</span></div>
                    <span class="section-title">Оплата</span>
                    <div class="row mb-2 align-items-center">
                        <div class="col-7 product-name">SONAX XTREME Готовый зимний стеклоомыватель "Чистый обзор"</div>
                        <div class="col-2 text-center small">2 шт</div>
                        <div class="col-3 text-end price-val">6000 р</div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-7 product-name">SONAX XTREME Готовый зимний стеклоомыватель "Чистый обзор"</div>
                        <div class="col-2 text-center small">1 шт</div>
                        <div class="col-3 text-end price-val">12500 р</div>
                    </div>

                    <div class="text-end"><span class="inner-label danger">Не доставлено</span></div>
                    <span class="section-title">Доставка</span>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="fw-bold small">г. Воронеж, ул. 20летия Октября, дом 25, кв. 143</div>
                        <div class="text-muted small">Бесплатно</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ЗАКАЗЫ 3, 4, 5 (Свернутые) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#order3">
                    <div class="d-flex justify-content-between align-items-center w-100 me-3">
                        <span>Заказ №125 от 24.04.2019, 2 товара на сумму 13100 р</span>
                        <span class="header-status">ЗАВЕРШЕННЫЙ</span>
                    </div>
                </button>
            </h2>
            <div id="order3" class="accordion-collapse collapse"><div class="accordion-body">Информация о заказе...</div></div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#order4">
                    <div class="d-flex justify-content-between align-items-center w-100 me-3">
                        <span>Заказ №125 от 24.04.2019, 2 товара на сумму 13100 р</span>
                        <span class="header-status">ЗАВЕРШЕННЫЙ</span>
                    </div>
                </button>
            </h2>
            <div id="order4" class="accordion-collapse collapse"><div class="accordion-body">Информация о заказе...</div></div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#order5">
                    <div class="d-flex justify-content-between align-items-center w-100 me-3">
                        <span>Заказ №125 от 24.04.2019, 2 товара на сумму 13100 р</span>
                        <span class="header-status">ЗАВЕРШЕННЫЙ</span>
                    </div>
                </button>
            </h2>
            <div id="order5" class="accordion-collapse collapse"><div class="accordion-body">Информация о заказе...</div></div>
        </div>

    </div>
</div>

</div>

</div>
</body>

@endsection