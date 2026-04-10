@extends('layouts.app')

@section('title', 'Каталог для оптовиков')

@section('content')
<style>
        
        
        /* Сброс ссылок */
        

        

        /* Стили карточек сайдбара */
        .sidebar-card { border: 1px solid #dee2e6; margin-bottom: 25px; border-radius: 0; }
        .sidebar-card-header { 
            background: var(--brand-gray); 
            color: #fff; 
            padding: 12px 20px; 
            font-weight: bold; 
            text-transform: uppercase; 
            font-size: 14px;
        }
        .sidebar-card-body { padding: 20px; }

        /* Строки данных в балансе */
        .data-line { display: flex; justify-content: space-between; margin-bottom: 8px; }
        .data-line.bold { font-weight: bold; }
        .sub-list { padding-left: 25px; color: #666; font-size: 12px; margin-bottom: 15px; }
        .sub-list .data-line { margin-bottom: 4px; }
        .total-line { border-top: 1px solid #eee; pt-2; margin-top: 10px; padding-top: 10px; }

        /* Оплата */
        .pay-method-link {
            border: 1px solid #ddd;
            padding: 4px 10px;
            border-radius: 4px;
            display: inline-block;
            margin-right: 5px;
            font-size: 11px;
            font-weight: bold;
        }

        /* Фильтр Детализации */
        .filter-panel {
            background-color: var(--brand-gray);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        .filter-panel h5 { color: #fff; font-weight: bold; margin: 0; flex-grow: 1; text-transform: uppercase; font-size: 16px; }

        /* Кастомный календарь */
        .date-input-wrap {
            display: flex;
            background: #fff;
            border: 1px solid var(--brand-dark);
            height: 36px;
            width: 170px;
            position: relative;
        }
        .date-input-wrap input[type="date"] {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            opacity: 0; cursor: pointer; z-index: 2;
        }
        .date-val { flex-grow: 1; padding: 8px 12px; font-size: 13px; color: #555; }
        .date-icon-btn {
            background-color: var(--brand-dark);
            width: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .date-icon-btn svg { width: 18px; height: 18px; fill: white; }

        .btn-find {
            background: var(--brand-orange);
            color: #fff !important;
            border: none;
            height: 36px;
            padding: 0 25px;
            font-weight: bold;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        @media (max-width: 992px) {
            .filter-panel { flex-direction: column; align-items: stretch; }
            .date-input-wrap { width: 100%; }
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

    <div class="row gx-lg-5">
        <!-- Сайдбар -->
        <div class="col-lg-4">
            
            <!-- Карточка БАЛАНС -->
            <div class="sidebar-card">
                <div class="sidebar-card-header">БАЛАНС</div>
                <div class="sidebar-card-body">
                    <div class="data-line bold border-bottom pb-2 mb-2">
                        <span>На счету:</span>
                        <span>0.00 руб.</span>
                    </div>
                    <div class="data-line bold">
                        <span>Размещено заказов:</span>
                        <span>0.00 руб.</span>
                    </div>
                    <!-- Подсписок статусов -->
                    <div class="sub-list">
                        <div class="data-line"><span>из них:</span></div>
                        <div class="data-line"><span>- на модерации:</span><span>0.00 руб.</span></div>
                        <div class="data-line"><span>- в работе:</span><span>0.00 руб.</span></div>
                        <div class="data-line"><span>- отправлено представителю:</span><span>0.00 руб.</span></div>
                        <div class="data-line"><span>- получено представителем:</span><span>0.00 руб.</span></div>
                    </div>
                    <div class="data-line bold total-line">
                        <span>Баланс:</span>
                        <span>0.00 руб.</span>
                    </div>
                </div>
            </div>

            <!-- Карточка ОПЛАТИТЬ -->
            <div class="sidebar-card">
                <div class="sidebar-card-header">ОПЛАТИТЬ</div>
                <div class="sidebar-card-body">
                    <p class="fw-bold mb-3">Дистанционная оплата:</p>
                    <div class="mb-4">
                        <a href="#" class="pay-method-link" style="color:#eb001b">mastercard</a>
                        <a href="#" class="pay-method-link" style="color:#00a14b">МИР</a>
                        <a href="#" class="pay-method-link" style="color:#1a1f71">VISA</a>
                    </div>
                    <a href="#" class="fw-bold d-block mt-2">Наличная оплата</a>
                </div>
            </div>

            <!-- Карточка ОБОРОТ -->
            <div class="sidebar-card">
                <div class="sidebar-card-header">ОБОРОТ</div>
                <div class="sidebar-card-body">
                    <div class="data-line border-bottom pb-1 mb-1"><span>октябрь</span><span>439.00 руб.</span></div>
                    <div class="data-line border-bottom pb-1 mb-1"><span>ноябрь</span><span>0.00 руб.</span></div>
                    <div class="data-line border-bottom pb-1 mb-1"><span>декабрь</span><span>12 035.00 руб.</span></div>
                    <div class="data-line"><span>январь</span><span>0.00 руб.</span></div>
                </div>
            </div>

        </div>

        <!-- Основной контент (Детализация) -->
        <div class="col-lg-8">
            <div class="border shadow-sm">
                
                <!-- Панель фильтров -->
                <div class="filter-panel">
                    <h5>ДЕТАЛИЗАЦИЯ</h5>
                    
                    <div class="date-input-wrap">
                        <div class="date-val">24.05.2019</div>
                        <input type="date" value="2019-05-24" onchange="this.previousElementSibling.innerText = this.value.split('-').reverse().join('.')">
                        <div class="date-icon-btn">
                            <svg viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                        </div>
                    </div>

                    <div class="date-input-wrap">
                        <div class="date-val">09.01.2020</div>
                        <input type="date" value="2020-01-09" onchange="this.previousElementSibling.innerText = this.value.split('-').reverse().join('.')">
                        <div class="date-icon-btn">
                            <svg viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                        </div>
                    </div>

                    <button class="btn-find">
                        <svg style="width:16px;height:16px;" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                        НАЙТИ
                    </button>
                </div>

                <!-- Таблица данных -->
                <div class="table-responsive">
                    <table class="table table-sm mb-0" style="font-size: 12px;">
                        <thead class="table-light">
                            <tr>
                                <th class="p-3">Дата</th>
                                <th class="p-3">Приход</th>
                                <th class="p-3">Расход</th>
                                <th class="p-3">Операция</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="p-3">23.12.2019</td><td class="p-3"></td><td class="p-3 fw-bold">- 12 035.00</td><td class="p-3">Выдан заказ.(Накл 21913)А</td></tr>
                            <tr><td class="p-3">23.12.2019</td><td class="p-3 fw-bold">12 035.00</td><td class="p-3"></td><td class="p-3">Электронный платеж</td></tr>
                            <tr><td class="p-3">23.12.2019</td><td class="p-3"></td><td class="p-3 fw-bold">- 12 035.00</td><td class="p-3">Выдан заказ.(Накл 21913)А</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>



</div>


</div>
</body>

@endsection