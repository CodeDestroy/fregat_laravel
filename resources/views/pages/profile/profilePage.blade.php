@extends('layouts.app')

@section('title', 'Каталог для оптовиков')

@section('content')
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