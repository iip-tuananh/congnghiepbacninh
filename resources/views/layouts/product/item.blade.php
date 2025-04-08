@php
$img = json_decode($pro->images);
@endphp
<form action="{{ route('add.to.cart') }}" method="post" class="variants product-action" data-cart-form data-id="{{$pro->id}}"
   enctype="multipart/form-data">
   @csrf
   <a href="{{ route('detailProduct', ['cate' => $pro->cate_slug, 'type' => $pro->type_slug ? $pro->type_slug : 'loai', 'id' => $pro->slug]) }}">
      <div class="product-thumbnail">
         @php
         $img = json_decode($pro->images);
         @endphp
         <img style="width: 100%; height: 100%px;" src="{{ $img[0] }}" data-src="{{ $img[0] }}">

         
         <span class="smart">HOT</span>
         {{-- 
   <a title="Xem nhanh" href="/demo-san-pham-thuoc-tinh"
      data-handle="demo-san-pham-thuoc-tinh" class="quick-view">
   <svg width="20" height="20" viewBox="0 0 20 20" fill="#000"
      xmlns="http://www.w3.org/2000/svg">
   <path fill="#000"
      d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z">
   </path>
   </svg>
   </a> --}}
   <ul class="group-tag">
    @if ($pro->discount > 0)
    @php
    $discountPrice = round((($pro->price - $pro->discount) * 100) / $pro->price);
    @endphp
    <li>
    <span>{{ $discountPrice }}%</span>
    </li>
 @endif
   </ul>
   </div>
   <div class="product-info">
      <h3 class="product-name">
         <a class="text-one-line"
            href="{{ route('detailProduct', ['cate' => $pro->cate_slug, 'type' => $pro->type_slug ? $pro->type_slug : 'loai', 'id' => $pro->slug]) }}"
            title="{{ $pro->name }}">{{ $pro->name }}</a>
      </h3>


      <div class="price-box">
         @if ($pro->price > 0)
         @if ($pro->discount > 0)
         <span class="special-price font-weight-bold">{{ number_format($pro->discount) }}₫</span>
         <del class="old-price"> {{ number_format($pro->price) }}₫</del>
         <div class="button-cunghang ">
            <button class="but1 themgio" data-id="{{$pro->id}}"><i class='bx bxs-cart-add ' style="font-size: 25px"></i></button>
            <button class="but2" title="Xem chi tiết" type="button"
               onclick="window.location.href='{{ route('detailProduct', ['cate' => $pro->cate_slug, 'type' => $pro->type_slug ? $pro->type_slug : 'loai', 'id' => $pro->slug]) }}'">
            Chi Tiết
            </button>
         </div>
         @else
         <span class="special-price font-weight-bold">{{ number_format($pro->price) }}₫</span>
         {{-- <del class="old-price"> {{ number_format($pro->price) }}₫</del> --}}
         <div class="button-cunghang ">
            <button class="but1 themgio" data-id="{{$pro->id}}"><i class='bx bxs-cart-add ' style="font-size: 25px"></i></button>
            <button class="but2" title="Xem chi tiết" type="button"
               onclick="window.location.href='{{ route('detailProduct', ['cate' => $pro->cate_slug, 'type' => $pro->type_slug ? $pro->type_slug : 'loai', 'id' => $pro->slug]) }}'">
            Chi Tiết
            </button>
         </div>
         @endif
         @else
         <span class="special-price font-weight-bold dangcapnhat">Đang cập nhật</span>
      
           
            <button class="btn-cart btn-views disabled" title="Xem chi tiết" type="button"
               onclick="window.location.href='{{ route('detailProduct', ['cate' => $pro->cate_slug, 'type' => $pro->type_slug ? $pro->type_slug : 'loai', 'id' => $pro->slug]) }}'">
            Chi Tiết
            </button>
     
         @endif
      </div>
     
      <style>
      </style>
      {{-- <input class="hidden" type="hidden" name="variantId" value="111247355" /> --}}
   </div>
   </a>
</form>