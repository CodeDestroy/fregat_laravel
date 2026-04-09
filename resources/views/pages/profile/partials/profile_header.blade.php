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
            <a href="#" class="nav-card">
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
            <a href="#" class="nav-card">
            	<div class="col">
                	<img src='/icons/shop-history.svg'  class="me-3 ms-1" />
                </div>
                <div class="col">История покупок</div>
                <div class="col"></div>  
            </a>
        </div>
        
    </div>