@extends('layouts.app')

@section('title', 'Каталог для оптовиков')

@section('content')
<style>
    :root {
        --brand-dark: #2c3644;
        --brand-orange: #ff3d00;
        --text-gray: #cccccc;
        --text-main: #333333;
    }
    body { font-family: sans-serif; color: var(--text-main); }
    /* Шапка - Кнопки из прошлого примера */
    .nav-card {
        background-color: var(--brand-dark);
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px 10px;
        border-radius: 4px;
        height: 100%;
        transition: 0.2s;
        font-size: 13px;
        font-weight: 600;
    }
    .nav-card svg { margin-right: 12px; flex-shrink: 0; width: 24px; height: 24px; }
    .nav-card.active { background-color: var(--brand-orange); }
    .nav-card:hover { color: #eee; opacity: 0.9; }
    /* Стили информационного блока */
    .info-label {
        color: var(--text-gray);
        font-size: 14px;
    }
    .info-value {
        font-size: 14px;
        font-weight: 400;
    }
    /* Кнопка "Изменить" */
    .btn-change {
        background-color: var(--brand-orange);
        color: white;
        border: none;
        padding: 12px 60px;
        font-weight: bold;
        font-size: 16px;
        border-radius: 4px;
        text-transform: uppercase;
        transition: 0.2s;
    }
    .btn-change:hover {
        background-color: #e63600;
        color: white;
    }
    /* Адаптив для меток */
    @media (max-width: 576px) {
        
        .nav-card svg { margin-right: 0; margin-bottom: 8px; }
        .info-row { margin-bottom: 20px; }
        .info-label { margin-bottom: 4px; display: block; }
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

    <!-- Блок личной информации -->
    <div class="ps-md-2">
        <div class="row info-row mb-4">
            <div class="col-sm-2 info-label text-sm-start">ФИО</div>
            <div class="col-sm-10 info-value">{{Auth::user()->secondName}} {{Auth::user()->name}} {{Auth::user()->thirdName}}</div>
        </div>

        <div class="row info-row mb-4">
            <div class="col-sm-2 info-label text-sm-start">E-mail</div>
            <div class="col-sm-10 info-value">{{Auth::user()->email}}</div>
        </div>

        <div class="row info-row mb-4">
            <div class="col-sm-2 info-label text-sm-start">Тел.</div>
            <div class="col-sm-10 info-value">+7 {{Auth::user()->phone}}</div>
        </div>

        <div class="row info-row mb-5">
            <div class="col-sm-2 info-label text-sm-start">Адрес</div>
            <div class="col-sm-10 info-value">
                {{Auth::user()->address}}
            </div>
        </div>

        <!-- Кнопка Изменить -->
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-change">Изменить</button>
            </div>
        </div>
    </div>

</div>

</div>


</body>

@endsection