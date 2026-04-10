<style>
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
    @media (max-width: 576px) {
        
        .nav-card svg { margin-right: 0; margin-bottom: 8px; }
    }
    :root {
        --brand-dark: #2c3644;
        --brand-orange: #ff3d00;
        --text-gray: #cccccc;
        --text-main: #333333;
    }
    body { font-family: sans-serif; color: var(--text-main); }
    /* Шапка - Кнопки из прошлого примера */
    
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
        .info-row { margin-bottom: 20px; }
        .info-label { margin-bottom: 4px; display: block; }
    }
</style>

<div class="row g-2 mb-5">
        <div class="col-12 col-md-6 col-lg-3 container">
            <a href="{{route('garage')}}" class="nav-card {{Route::is('garage') ? 'active' : '' }}">
                <div class="col">
                	<img src='/icons/garage.svg'  class="me-3 ms-1" />
                </div>
                <div class="col-auto text-center">Гараж</div>
                <div class="col"></div>  
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="{{route('balance')}}" class="nav-card {{Route::is('balance') ? 'active' : '' }}">
            	<div class="col">
                	<img src='/icons/balance.svg'  class="me-3 ms-1" />
                </div>
                <div class="col text-center">Баланс</div> 
                <div class="col"></div>  
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="{{route('profile')}}" class="nav-card {{Route::is('profile') ? 'active' : '' }}">
            	<div class="col">
                	<img src='/icons/user.svg'  class="me-3 ms-1" />
                </div>
                <div class="col text-center">Личная информация</div>
                <div class="col"></div>  
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="{{route('orders')}}" class="nav-card {{Route::is('orders') ? 'active' : '' }}">
            	<div class="col">
                	<img src='/icons/shop-history.svg'  class="me-3 ms-1" />
                </div>
                <div class="col">История покупок</div>
                <div class="col"></div>  
            </a>
        </div>
        
    </div>