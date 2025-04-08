<div class="thankyou-message-container">
   <a href="{{route('home')}}"><img src="{{$setting->logo}}" alt="" srcset="" class="logo"></span></a>
   <p>Mã đơn hàng: <strong>{{ $code_bill }}</strong></p>
</div>

<div class="cart-header-info">
   <div>Sản phẩm</div>
   <div>Đơn giá</div>
   <div>Giảm giá</div>
   <div>Số lượng</div>
   <div>Thành tiền</div>
</div>

<div class="ajaxcart__inner">
   @foreach ($cart as $item)
       <div class="ajaxcart__row">
           <div>{{ $item['name'] }}</div>
           <div>{{ number_format($item['price'], 0, ',', '.') }}₫</div>
            <div>{{ isset($item['discount']) && $item['discount'] > 0 ? number_format($item['discount'], 0, ',', '.') . '₫' : '0₫' }}</div>
           <div>{{ $item['quantity'] }}</div>
           <div>
            {{ number_format((isset($item['discount']) && $item['discount'] > 0 ? $item['discount'] : $item['price']) * $item['quantity'], 0, ',', '.') }}₫
        </div>
       </div>
   @endforeach
</div>

<div class="ajaxcart__footer">
   <div>Tổng tiền: <strong>
      {{ number_format(array_sum(array_map(function($item) {
          // Kiểm tra nếu có discount thì sử dụng discount, nếu không thì sử dụng price
          $price = isset($item['discount']) && $item['discount'] > 0 ? $item['discount'] : $item['price'];
          return $price * $item['quantity'];
      }, $cart)), 0, ',', '.') }}₫</strong>
   </div>
</div>

<div class="print-btn">
   <button onclick="window.print()">In hóa đơn</button>
</div>
<h2 class="section__title text-center">Cảm ơn bạn đã đặt hàng</h2>
<style>
   .logo{
         width: 200px;
         height: auto;
         margin: 0 auto;
         display: block;
   }
   @media print {
       body {
           font-family: Arial, sans-serif;
           font-size: 14px;
           color: #000;
       }

       .banner, .unprintable, .btn {
           display: none !important; /* Ẩn các phần không cần thiết khi in */
       }

       .thankyou-message-container {
           text-align: center;
           margin-bottom: 20px;
       }

       .cart-header-info {
           display: grid;
           grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
           font-weight: bold;
           text-align: center;
           margin-bottom: 10px;
           border-bottom: 2px solid #ddd;
           padding-bottom: 10px;
       }

       .ajaxcart__row {
           display: grid;
           grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
           text-align: center;
           border-bottom: 1px solid #ddd;
           padding: 10px 0;
       }

       .ajaxcart__footer {
           margin-top: 20px;
           font-weight: bold;
           text-align: right;
       }

       .ajaxcart__footer div {
           font-size: 16px;
           color: #000;
       }

       .cart_prices {
           text-align: right;
       }

       .print-btn {
           display: none; /* Ẩn nút in khi in */
       }
   }
   h2{
         font-size: 24px;
         margin-top: 20px;
         text-align: center;
         color: #4CAF50
   }
   /* CSS cho giao diện thông thường */
   .thankyou-message-container {
       text-align: center;
       margin-bottom: 20px;
   }

   .cart-header-info {
       display: grid;
       grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
       font-weight: bold;
       text-align: center;
       margin-bottom: 10px;
       border-bottom: 2px solid #ddd;
       padding-bottom: 10px;
   }

   .ajaxcart__row {
       display: grid;
       grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
       text-align: center;
       border-bottom: 1px solid #ddd;
       padding: 10px 0;
   }

   .ajaxcart__footer {
       margin-top: 20px;
       font-weight: bold;
       text-align: right;
   }

   .ajaxcart__footer div {
       font-size: 16px;
       color: #000;
   }

   .print-btn {
       text-align: center;
       margin-top: 20px;
   }

   .print-btn button {
       background-color: #4CAF50;
       color: white;
       border: none;
       padding: 10px 20px;
       font-size: 16px;
       cursor: pointer;
   }

   .print-btn button:hover {
       background-color: #45a049;
   }
</style>