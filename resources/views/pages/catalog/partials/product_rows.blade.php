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