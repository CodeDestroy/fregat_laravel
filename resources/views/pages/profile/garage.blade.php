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

        body { font-family: sans-serif; color: var(--text-main); background-color: #fff; }

        /* ГЛОБАЛЬНЫЙ СБРОС ССЫЛОК (чтобы не были синими) */
        a {
            text-decoration: none !important;
            color: inherit; /* Наследует цвет текста родителя */
            outline: none !important;
        }
        a:hover, a:focus, a:active {
            color: inherit;
            text-decoration: none;
        }

        /* Шапка - Кнопки навигации */
        .nav-card {
            background-color: var(--brand-dark);
            color: #fff !important; /* Всегда белый текст */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px 10px;
            border-radius: 4px;
            height: 100%;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }
        .nav-card svg { margin-right: 12px; flex-shrink: 0; width: 24px; height: 24px; }
        .nav-card.active { background-color: var(--brand-orange); }
        .nav-card:hover { opacity: 0.9; color: #fff !important; }

        /* Карточка автомобиля */
        .car-card {
            max-width: 550px;
            border: 1px solid #dee2e6;
            border-radius: 0;
        }
        .car-card-header {
            background-color: var(--brand-gray);
            color: #fff;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            font-size: 16px;
        }
        /* Иконка удаления в шапке */
        .delete-btn { color: #fff !important; font-size: 18px; }
        .delete-btn:hover { opacity: 0.8; }

        .car-card-body {
            padding: 20px;
            font-size: 13px;
            line-height: 1.5;
        }

        /* Ссылки внутри карточки */
        .car-link {
            color: var(--text-main) !important; /* Всегда темный цвет по макету */
            display: block;
            margin-bottom: 4px;
            transition: color 0.2s;
        }
        .car-link:hover {
            color: var(--brand-orange) !important; /* При наведении можно подсветить оранжевым для отклика */
            text-decoration: underline !important;
        }

        /* Нижняя оранжевая кнопка */
        .btn-orange-action {
            background-color: var(--brand-orange);
            color: #fff !important;
            padding: 12px 35px;
            font-weight: bold;
            font-size: 16px;
            border-radius: 4px;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 30px;
            transition: background-color 0.2s;
        }
        .btn-orange-action:hover {
            background-color: #e63600;
        }

        @media (max-width: 576px) {
            .nav-card { flex-direction: column; text-align: center; }
            .nav-card svg { margin-right: 0; margin-bottom: 8px; }
            .car-card { max-width: 100%; }
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
    
    <!-- Навигация -->
    @include('pages.profile.partials.profile_header')

    <!-- Контент Гаража -->
    <div class="car-card shadow-sm">
        <div class="car-card-header">
            <span>FIAT NUOVA</span>
            <a href="#" class="delete-btn"><i class="fa-regular fa-trash-can"></i></a>
        </div>
        <div class="car-card-body">
            <div class="row">
                <!-- Левая колонка -->
                <div class="col-7 border-end">
                    <div class="mb-3">
                        <div class="mb-1">VIN: ZFA19800004161939</div>
                        <div class="mb-1">Год выпуска: 2008</div>
                        <div class="mb-1">Двигатель:</div>
                    </div>
                    
                    <div class="mb-3">
                        <div>Примечание: Добавлено менеджером</div>
                    </div>
                    
                    <div class="mt-2">
                        <a href="#" class="car-link small">Избранное</a>
                        <a href="#" class="car-link small">Бортовой журнал</a>
                        <a href="#" class="car-link small">Запросы по VIN</a>
                    </div>
                </div>
                <!-- Правая колонка -->
                <div class="col-5 ps-3">
                    <div class="fw-bold mb-2">Каталоги по авто:</div>
                    <a href="#" class="car-link small">Оригинальные запчасти</a>
                    <a href="#" class="car-link small">Запчасти для ТО</a>
                    <a href="#" class="car-link small">Каталоги TecDoc</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Нижняя кнопка -->
    <a href="#" class="btn-orange-action">+ НОВЫЙ ЗАПРОС ПО VIN</a>

</div>

</div>

</div>

</body>

 @endsection