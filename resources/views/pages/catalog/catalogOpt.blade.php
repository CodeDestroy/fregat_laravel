@extends('layouts.app')

@section('title', 'Каталог для оптовиков')

@section('content')
    <style>
        :root {
            --brand-orange: #ff3d00;
            --brand-dark: #2c3644;
            --bg-gray: #f5f5f5;
            --border-color: #dee2e6;
        }

        /* body { font-family: Arial, sans-serif; font-size: 12px; color: #333; } */

        /* АККОРДЕОН (Боковое меню) */
        .accordion-sidebar .accordion-item {
            border: none;
            border-bottom: 1px solid var(--border-color);
        }
        .accordion-sidebar .accordion-button {
            padding: 10px 15px;
            font-size: 12px;
            color: #333;
            background-color: transparent !important;
            box-shadow: none !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        /* Убираем стандартную стрелку и ставим свою + / - */
        .accordion-sidebar .accordion-button::after {
            display: none;
        }
        .accordion-sidebar .accordion-button .icon-state::before {
            content: "\2b"; /* Плюс */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }
        .accordion-sidebar .accordion-button:not(.collapsed) .icon-state::before {
            content: "\f068"; /* Минус */
        }
        .accordion-sidebar .accordion-body {
            padding: 0 0 10px 30px;
            background-color: #fafafa;
        }
        .sub-menu-link {
            display: block;
            padding: 5px 0;
            text-decoration: none;
            color: #666;
        }
        .sub-menu-link:hover { color: var(--brand-orange); }

        /* ПОИСКОВАЯ СТРОКА */
        .search-panel {
            background-color: var(--bg-gray);
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            padding: 4px;
        }
        .search-prefix {
            padding: 0 15px;
            color: #666;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
            border-right: 1px solid #ddd;
        }
        .search-input {
            border: none;
            background: transparent;
            flex-grow: 1;
            padding: 8px 15px;
            outline: none;
        }
        .btn-search-main {
            background-color: #FF3100;
            color: #fff;
            border: none;
            padding: 0 40px;
            height: 34px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* ТАБЛИЦА */
        .table-catalog thead th {
            background-color: #e9ecef;
            border: 1px solid #ddd;
            font-size: 11px;
            text-align: center;
            font-weight: normal;
        }
        .filter-row input {
            height: 22px;
            font-size: 10px;
            border: 1px solid #ccc;
            width: 100%;
            padding: 0 4px;
        }
        .status-dot {
            width: 12px;
            height: 12px;
            background-color: var(--brand-orange);
            display: inline-block;
        }

        /* КОРЗИНА */
        .cart-tab-btn {
            background: #ccc;
            color: #fff;
            border: none;
            padding: 6px 15px;
            font-weight: bold;
            border-radius: 0;
        }
        .cart-tab-btn.active { background: var(--brand-orange); }
        
        .action-btn {
            background: var(--brand-dark);
            color: #fff;
            border: none;
            padding: 6px 12px;
            font-size: 11px;
            border-radius: 4px;
        }

        @media (max-width: 992px) {
            .search-panel { flex-wrap: wrap; }
            .btn-search-main { width: 100%; margin-top: 4px; }
            .search-prefix { border-right: none; }
        }

        .table-catalog thead th {
            position: sticky;
            top: 0;
            z-index: 5;
        }
    </style>
    <body>
 <div class="wrapper">

<div class="container-xl  py-5" style="margin: 0 auto;">

<div class="Main-Title py-3">
    <div class="squad"></div>
    <div class="Main-Title_txt px-2">Каталог для оптовиков</div>
  </div>

<div class="container-fluid py-4 px-lg-5">
    <div class="row">
        
        <!-- БОКОВОЕ МЕНЮ (Аккордеон) -->
        <aside class="col-lg-3 pe-lg-4 mb-4">
            <!-- <div class="accordion accordion-sidebar" id="sidebarMenu">
                @foreach($categories as $cat)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#cat{{ $cat->id }}">
                                <span>
                                    <a href="?category={{ $cat->id }}">
                                        {{ $cat->name }}
                                    </a>
                                </span>
                                <span class="icon-state"></span>
                            </button>
                        </h2>
                        @if($cat->children->count())
                            <div id="cat{{ $cat->id }}" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    @foreach($cat->children as $child)
                                        <a
                                            href="?category={{ $child->id }}"
                                            class="sub-menu-link">
                                            {{ $child->name }}
                                        </a>
                                    @endforeach    
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div> -->
            <div class="accordion accordion-sidebar" id="sidebarMenu">
                @foreach($categories as $cat)
                    <div class="accordion-item">
                        <div class="accordion-header d-flex align-items-center">
                            {{-- ссылка категории --}}
                            <a
                                href="?category={{ $cat->id }}"
                                class="flex-grow-1 text-decoration-none px-3 py-2">
                                {{ $cat->name }}
                            </a>

                            {{-- кнопка раскрытия --}}
                            @if($cat->children->count())
                                <button
                                    class="accordion-button collapsed w-auto px-2"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#cat{{ $cat->id }}">
                                    <span class="icon-state"></span>
                                </button>
                            @endif
</div>
                        @if($cat->children->count())
                            <div id="cat{{ $cat->id }}" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    @foreach($cat->children as $child)
                                        <a
                                            href="?subCategory={{ $child->id }}"
                                            class="sub-menu-link">
                                            {{ $child->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </aside>

        <!-- ОСНОВНОЙ БЛОК -->
        <main class="col-lg-9">
            <form>
                <div class="search-panel mb-3">
                    <div class="search-prefix">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Поиск
                    </div>
                    <input  
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        class="search-input"
                        placeholder="UUID, артикул или название">
                    <button class="btn-search-main">
                        НАЙТИ
                    </button>
                </div>
            </form>

            <!-- Таблица товаров -->
            <div class="table-responsive border mb-4" >
                <form>
                    <div class="catalog-table-wrapper" id="catalogScroll" >
                        <table class="table table-sm table-bordered table-catalog mb-0 align-middle">
                            <thead>
                                <tr class="filter-row">
                                    <th style="width:40px"></th>
                                    <th>Код</th>
                                    <th>Артикул</th>
                                    <th style="width: 35%;">Наименование</th>
                                    <th>Остаток</th>
                                    <th>Цена</th>
                                    <th>Склад</th>
                                </tr>
                                <tr class="filter-row bg-white">
                                    <th></th>
                                    <th>
                                        <input name="code" value="{{ request('code') }}">
                                        <button type="submit"  style="display: none;"></button>
                                    </th>
                                    <th>
                                        <input name="sku" value="{{ request('sku') }}">
                                        <button type="submit" style="display: none;"></button>
                                    </th>
                                    <th>
                                        <input name="name" value="{{ request('name') }}">
                                        <button type="submit" style="display: none;"></button>
                                    </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="catalogBody">
                                @include('pages.catalog.partials.product_rows')
                                <tr id="loadingRow" style="display:none">
                                    <td colspan="7" class="text-center p-3">
                                        Загрузка...
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tbody>
                                @foreach($products as $product)
                                    @php
                                        $offer = $product->offers->first();
                                    @endphp
                                    
                                    <tr>
                                        <td class="text-center">
                                            <button
                                                class="btn btn-sm btn-dark open-add-to-cart"
                                                data-product-id="{{ $product->id }}"
                                                data-product-name="{{ $product->name }}"
                                                data-stock="{{ $offer->quantity ?? 0 }}"
                                                data-price="{{ $offer->price ?? 0 }}"
                                            >
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </td>
                                        <td class="small">
                                            {{ $product->id }}
                                        </td>
                                        <td>
                                            {{ $product->sku }}
                                        </td>
                                        <td>
                                            {{ trim($product->name, '_') }}
                                        </td>
                                        <td class="text-center">
                                            {{ number_format($offer->quantity ?? 0, 0, ',', ' ') }} {{$product->unit}}
                                        </td>
                                        <td class="text-center fw-bold">
                                            {{ number_format($offer->price ?? 0, 2, ',', ' ') }}
                                        </td>
                                        <td class="text-center small">
                                            Основной
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> -->
                        </table>
                    </div>
                    <!-- <button class="btn-search-main">
                        Фильтр
                    </button> -->
                </form>
            </div>

            <!-- Блок корзин и действий -->
            <div class="row align-items-center mb-3 g-2">
                <div class="col-auto d-flex">
                    <button class="cart-tab-btn active">Корзина 1</button>
                    <button class="cart-tab-btn ms-1">Корзина 2</button>
                    <button class="cart-tab-btn ms-1">Корзина 3</button>
                    <button class="cart-tab-btn ms-1">Корзина 4</button>
                </div>
                <div class="col-auto ms-2">
                    <button class="btn btn-danger btn-sm rounded-circle px-2 py-0" style="font-size: 10px;">-</button>
                    <button class="btn btn-success btn-sm rounded-circle px-2 py-0 ms-1" style="font-size: 10px;">+</button>
                </div>
                <div class="col d-flex justify-content-end gap-2 flex-wrap">
                    <button class="action-btn"><i class="fa-solid fa-file-import me-1"></i> Импорт</button>
                    <button class="action-btn"><i class="fa-solid fa-file-export me-1"></i> Экспорт</button>
                    <button class="action-btn"><i class="fa-solid fa-check-double me-1"></i> Оформить</button>
                    <button class="action-btn bg-secondary"><i class="fa-solid fa-trash-can me-1"></i> Удалить</button>
                </div>
            </div>

            <!-- Поиск по корзине -->
            <div class="d-flex align-items-center mb-3">
                <span class="text-muted small me-2"><i class="fa-solid fa-magnifying-glass"></i> Поиск по корзине</span>
                <input type="text" class="form-control form-control-sm" style="width: 250px;">
            </div>

            <!-- Итоговая таблица корзины -->
            <div class="table-responsive border mb-4">
                <table class="table table-bordered table-sm text-center mb-0 align-middle">
                    <thead class="table-light small">
                        <tr>
                            <th style="width: 40px;"><input type="checkbox"></th>
                            <th>Код</th>
                            <th>Артикул</th>
                            <th style="width: 30%;">Наименование</th>
                            <th>Заказ</th>
                            <th>Остаток</th>
                            <th>Цена</th>
                            <th>Срок</th>
                            <th>Бренд</th>
                            <th>Производитель</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td colspan="11" style="height: 30px;"></td></tr>
                        <tr class="fw-bold" style="background:#e9ecef;">
                            <td colspan="3"></td>
                            <td class="text-start ps-3">Всего:</td>
                            <td colspan="6"></td>
                            <td>0,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

</div>


</div>
<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">
                    Добавить в корзину
                </h6>
            </div>

            <div class="modal-body">

                <div class="mb-2 fw-bold" id="modalProductName"></div>

                <div class="d-flex align-items-center gap-2">

                    <button class="btn btn-secondary btn-sm" id="minusBtn">-</button>

                    <input
                        type="number"
                        id="quantityInput"
                        class="form-control form-control-sm text-center"
                        value="1"
                        min="1"
                        style="width:80px"
                    >

                    <button class="btn btn-secondary btn-sm" id="plusBtn">+</button>

                </div>

                <div class="mt-2 small text-muted">
                    Остаток: <span id="stockLabel"></span>
                </div>

                <div class="mt-3">

                    <label class="small">Корзина</label>

                    <select id="cartSelect" class="form-select form-select-sm">

                        @foreach($carts as $cart)
                            <option
                                value="{{ $cart->id }}"
                                @if($cart->is_active) selected @endif
                            >
                                {{ $cart->name }}
                            </option>
                        @endforeach

                    </select>

                </div>

            </div>

            <div class="modal-footer">

                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                    Отмена
                </button>

                <button class="btn btn-primary btn-sm" id="addToCartBtn">
                    Добавить
                </button>

            </div>

        </div>
    </div>
</div>

<script defer type="module">

let selectedProduct = null
let maxQty = 0

$(document).on('click', '.open-add-to-cart', function(event){
    event.preventDefault()
    selectedProduct = {
        id: $(this).data('product-id'),
        name: $(this).data('product-name'),
        price: $(this).data('price')
    }

    maxQty = parseFloat($(this).data('stock'))

    $('#modalProductName').text(selectedProduct.name)
    $('#stockLabel').text(maxQty)

    $('#quantityInput').val(1)

    $('#cartModal').modal('show')

})

$('#plusBtn').click(function(){

    let qty = parseFloat($('#quantityInput').val())

    if(qty < maxQty)
        $('#quantityInput').val(qty + 1)

})

$('#minusBtn').click(function(){

    let qty = parseFloat($('#quantityInput').val())

    if(qty > 1)
        $('#quantityInput').val(qty - 1)

})

$('#addToCartBtn').click(function(){

    $.post('/cart/add', {

        product_id: selectedProduct.id,
        quantity: $('#quantityInput').val(),
        cart_id: $('#cartSelect').val(),

        _token: '{{ csrf_token() }}'

    }, function(){

        $('#cartModal').modal('hide')

        loadCart()

    })

})

</script>
<script type="module">

let page = 1
let loading = false
let hasMore = true

const container = $('#catalogScroll')

container.on('scroll', function(){

    if(loading || !hasMore)
        return

    const scrollBottom =
        container.scrollTop() + container.innerHeight()

    const trigger =
        container[0].scrollHeight - 200

    if(scrollBottom >= trigger){

        loading = true

        $('#loadingRow').show()

        page++

        let params = new URLSearchParams(window.location.search)

        params.set('page', page)

        $.get(window.location.pathname + '?' + params.toString(), function(rows){

            if(rows.trim() === ''){
                hasMore = false
                $('#loadingRow').hide()
                return
            }

            $('#loadingRow').before(rows)

            loading = false

            $('#loadingRow').hide()

        })

    }

})

</script>
</body>

@endsection