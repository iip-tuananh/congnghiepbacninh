<div class="ajaxcart__row cart_aj " data-id="{{ $item['id'] }}">
    <div class="ajaxcart__product cart_product" data-line="1">
      <a href="/may-cua-ban-1800w-stanley-sst1801" class="ajaxcart__product-image cart_image"
        title="{{ $item['name'] }}"><img src="{{ $item['image'] }}"></a>
      <div class="grid__item cart_info">
        {{-- phần xóa --}}
        <div class="ajaxcart__product-name-wrapper cart_name">
          <a href="/may-cua-ban-1800w-stanley-sst1801" class="ajaxcart__product-name h4"
            title="{{ $item['name'] }}">{{ $item['name'] }}</a>
          <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;"
            data-id="{{ $item['id'] }}" title="xóa" onclick="removeItem({{ $item['id'] }})">Xóa</a>
        </div>
        {{-- end xóa --}}
        <div class="grid">
          <div class="grid__item one-half text-right cart_prices">
            <span class="cart-price old-price">{{ $item['price'] }}</span>
          </div>
        </div>
        <div class="grid">
          <div class="grid__item one-half text-right cart_prices">
            <span class="cart-price">
            {{ isset($item['discount']) ? number_format($item['discount']) . '₫' : '0₫' }}
            </span>
          </div>
        </div>
        <div class="grid">
          <div class="input_number_product form-control d-flex align-items-center">
            <button type="button" onclick="qtyminus({{ $item['id'] }})" data-id="{{ $item['id'] }}"
              data-price="{{ $item['price'] }}" data-discount="{{ $item['discount'] }}">-</button>
            <input type="number" id="quantity-{{ $item['id'] }}" name="quantity"
              value="{{ $item['quantity'] }}" min="1" class="text-center quantity-input"
              data-id="{{ $item['id'] }}" data-price="{{ $item['price'] }}"
              data-discount="{{ $item['discount'] }}" style="width: 50px;" />
            <button type="button" onclick="qtyplus({{ $item['id'] }})" data-id="{{ $item['id'] }}"
              data-price="{{ $item['price'] }}" data-discount="{{ $item['discount'] }}">+</button>
          </div>
        </div>
        @php
        // Kiểm tra nếu có giảm giá thì sử dụng giá giảm, nếu không thì sử dụng giá gốc
        $price = isset($item['discount']) && $item['discount'] > 0 ? $item['discount'] : $item['price'];
        $tongtien = $price * $item['quantity'];
        @endphp
        <div class="grid">
          <div class="grid__item one-half text-right cart_prices">
            <span class="cart-price" id="total-price-{{ $item['id'] }}">
            {{ number_format($tongtien, 0, ',', '.') }}₫
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>