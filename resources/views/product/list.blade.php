@extends('layouts.main.master')
@section('title')
{{ $title }}
@endsection
@section('description')
Danh sách {{ $title }}
@endsection
@section('image')
{{ url('' . $banner[0]->image) }}
@endsection
@section('js')
@endsection
@section('css')
<link href="{{ asset('frontend/css/sidebar_style.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
   media="all" />
<link href="{{ asset('frontend/css/collection_style.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
   media="all" />
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="layout-collection">
   <section class="bread-crumb">
      <div class="container">
         <ul class="breadcrumb">
            <li class="home">
               <a href="{{ route('home') }}"><span>Trang chủ</span></a>
               <span class="mr_lr">
                  &nbsp;
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                     role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                     class="svg-inline--fa fa-chevron-right fa-w-10">
                     <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                        class=""></path>
                  </svg>
                  &nbsp;
               </span>
            </li>
            <li><strong><span class="tieudetrang">{{ $title }}</span></strong></li>
         </ul>
      </div>
   </section>
   <div class="container">
      <div class="row">
         <div class="col-12 hidden-tuan-mobile">
            <section class="section_danhmuc hidden-tuan-mobile">
               <div class="danhmuc-slider-2 swiper-container">
                  <div class="swiper-wrapper">
                     @foreach ($categoryhome as $danhmuc)
                  
                     <div class="swiper-slide">
                        <a href="{{ route('allListProCate', ['danhmuc' => $danhmuc->slug]) }}"
                           title="{{ languageName($danhmuc->name) }}">
                           <div class="col khungtuan">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="thumb">
                                       <img class="tuan-img" src="{{ $danhmuc->avatar }}"
                                          alt="{{ languageName($danhmuc->name) }}">
                                    </div>
                                 </div>
                                 <div class="col-md-9">
                                    <h6>
                                       <span class="count-tuan">{{ $danhmuc->product->count() }} Sản
                                       Phẩm</span>
                                       <span
                                          class="line-clamp line-clamp-2 tuanname">{{ languageName($danhmuc->name) }}</span>
                                    </h6>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     @endforeach
                  </div>
                  <div class="swiper-button-next">
                  </div>
                  <div class="swiper-button-prev">
                  </div>
               </div>
            </section>
         </div>
         <aside class="menuleft sidebar col-lg-3 col-12 hidden-tuan-mobile ">
            <div class="filter-content menuloc ">
               <div class="title-head-col">
                  Bộ lọc sản phẩm
               </div>
               <div class="filter-container">
                  <!-- Lọc giá -->
                  <aside class="aside-item filter-price">
                     <div class="title-head">
                        Chọn mức giá
                     </div>
                     <div class="aside-content filter-group content_price">
                        <ul>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="1-000-000d" for="filter-duoi-1-000-000d">
                              <input type="radio" id="filter-duoi-1-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="Dưới 1.000.000đ" value="<1000000"
                                 data-operator="OR">
                              <i class="fa"></i>
                              Dưới 1 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="2-000-000d" for="filter-1-000-000d-2-000-000d">
                              <input type="radio" id="filter-1-000-000d-2-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="1.000.000đ - 2.000.000đ"
                                 value=">=1000000 AND <=2000000" data-operator="OR">
                              <i class="fa"></i>
                              Từ 1 triệu - 2 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="3-000-000d" for="filter-2-000-000d-3-000-000d">
                              <input type="radio" id="filter-2-000-000d-3-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="2.000.000đ - 3.000.000đ"
                                 value=">=2000000 AND <=3000000" data-operator="OR">
                              <i class="fa"></i>
                              Từ 2 triệu - 3 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="5-000-000d" for="filter-3-000-000d-5-000-000d">
                              <input type="radio" id="filter-3-000-000d-5-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="3.000.000đ - 5.000.000đ"
                                 value=">=3000000 AND <=5000000" data-operator="OR">
                              <i class="fa"></i>
                              Từ 3 triệu - 5 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="10-000-000d" for="filter-5-000-000d-10-000-000d">
                              <input type="radio" id="filter-5-000-000d-10-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="5.000.000đ - 10.000.000đ"
                                 value=">=5000000 AND <=10000000" data-operator="OR">
                              <i class="fa"></i>
                              Từ 5 triệu - 10 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="20-000-000d" for="filter-10-000-000d-20-000-000d">
                              <input type="radio" id="filter-10-000-000d-20-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="10.000.000đ - 20.000.000đ"
                                 value=">=10000000 AND <=20000000" data-operator="OR">
                              <i class="fa"></i>
                              Từ 10 triệu - 20 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="50-000-000d" for="filter-20-000-000d-50-000-000d">
                              <input type="radio" id="filter-20-000-000d-50-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="20.000.000đ - 50.000.000đ"
                                 value=">=20000000 AND <=50000000" data-operator="OR">
                              <i class="fa"></i>
                              Từ 20 triệu - 50 triệu
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label data-filter="50-000-000d" for="filter-tren50-000-000d">
                              <input type="radio" id="filter-tren50-000-000d"
                                 data-group="Khoảng giá" name="price" class="filter-input"
                                 data-field="price_min" data-text="Trên 50.000.000đ"
                                 value=">50000000" data-operator="OR">
                              <i class="fa"></i>
                              Trên 50 triệu
                              </label>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </aside>
                  <!-- End Lọc giá -->
                  <!-- Lọc Loại -->
                  <aside class="aside-item aside-itemxx filter-type">
                     <div class="aside-title">
                        <h2 class="title-filter title-head margin-top-0"><span>Loại</span></h2>
                     </div>
                     <div class="aside-content filter-group">
                        <ul>
                           @foreach ($categoryhome as $item)
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-binh-phun">
                              <input type="radio" name="cate" value="{{ $item->slug }}"
                                 class="filter-input">
                              {{ languageName($item->name) }}
                              </label>
                              </span>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </aside>
              
                  <div class="border_filter">
                  </div>
                  <!-- Lọc tính năng camera -->
                  <!-- End lọc theo tính nắng camera -->
                  <!-- Lọc theo tính năng đặc biệt -->
                  <!-- End lọc theo tính năng đặc biệt -->
               </div>
            </div>
            <div class="hidden-tuan-mobile">

          
               @include('layouts.menu.danhmuc')
      
            </div>
         </aside>
         <div class="block-collection col-lg-9 col-12">
            <div class="group-title-col ">
               <div class="row">
                  <div class="col-md-3 col-lg-2">
                     <div class="thumb-image">
                        <img src="{{ $setting->logo }}" >
                     </div>
                  </div>
                  <div class="col-md-9 content col-lg-10">
                     <h1 class="title-page"><span id="tieudetrang">{{ $title }}</span></h1>
                     <div class="rte">
                        Chúng tôi luôn cam kết mang đến những sản phẩm chất lượng cao, được chọn lọc kỹ lưỡng từ
                        các nhà sản xuất uy tín trên thế giới. Qua sự kết hợp giữa chất lượng và sự đa dạng,
                        Chúng tôi mang đến cho khách hàng lựa chọn tối ưu cho các công việc cơ khí của mình.
                     </div>
                  </div>
               </div>
            </div>
            <div class="category-products">
               <div class="products-view products-view-grid list_hover_pro">
                  <div class="row row-fix " id="product-list">
                     @foreach ($list as $item)
                     <div class="col-6 col-md-4 col-xl-3 col-fix">
                        <div class="item_product_main">
                           @include('layouts.product.item', ['pro' => $item])
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="pagination">
                  @if ($list->onFirstPage())
                      <span class="disabled">« Trước</span>
                  @else
                      <a href="{{ $list->previousPageUrl() }}">« Trước</a>
                  @endif
              
                  @php
                      $start = max($list->currentPage() - 2, 1); // Hiển thị từ trang hiện tại - 2
                      $end = min($list->currentPage() + 2, $list->lastPage()); // Hiển thị đến trang hiện tại + 2
                  @endphp
              
                  @if ($start > 1)
                      <a href="{{ $list->url(1) }}">1</a>
                      @if ($start > 2)
                          <span class="dots">...</span>
                      @endif
                  @endif
              
                  @for ($page = $start; $page <= $end; $page++)
                      @if ($page == $list->currentPage())
                          <span class="current">{{ $page }}</span>
                      @else
                          <a href="{{ $list->url($page) }}">{{ $page }}</a>
                      @endif
                  @endfor
              
                  @if ($end < $list->lastPage())
                      @if ($end < $list->lastPage() - 1)
                          <span class="dots">...</span>
                      @endif
                      <a href="{{ $list->url($list->lastPage()) }}">{{ $list->lastPage() }}</a>
                  @endif
              
                  @if ($list->hasMorePages())
                      <a href="{{ $list->nextPageUrl() }}">Tiếp »</a>
                  @else
                      <span class="disabled">Tiếp »</span>
                  @endif
              </div>
               <style>
                  .pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
    flex-wrap: wrap; /* Cho phép các phần tử xuống dòng trên màn hình nhỏ */
}

.pagination a,
.pagination span {
    padding: 5px 10px;
    border: 1px solid #ddd;
    text-decoration: none;
    color: #033972;
    border-radius: 5px;
    font-size: 14px; /* Kích thước chữ nhỏ hơn cho di động */
}

.pagination a:hover {
    background-color: #033972;
    color: #fff;
}
.pagination .dots {
    padding: 5px 10px;
    color: #ccc;
}
.pagination .current {
    padding: 5px 10px;
    border: 1px solid #033972;
    background-color: #033972;
    color: #fff;
    border-radius: 5px;
}

.pagination .disabled {
    padding: 5px 10px;
    border: 1px solid #ddd;
    color: #ccc;
    border-radius: 5px;
}

/* Responsive cho thiết bị di động */
@media (max-width: 767px) {
    .pagination {
        gap: 5px; /* Giảm khoảng cách giữa các phần tử */
    }

    .pagination a,
    .pagination span {
        padding: 5px; /* Giảm padding để tiết kiệm không gian */
        font-size: 12px; /* Giảm kích thước chữ */
    }
}
               </style>
            </div>
        
         </div>
         
      </div>
      
      <div id="open-filters" class="open-filters d-lg-none d-xl-none">
         
      </div>
   </div>
</div>
{{-- lọc theo danh mục --}}
<script>
   document.addEventListener('DOMContentLoaded', function() {
       const filterInputs = document.querySelectorAll('.filter-input');
   
       // Xử lý khi thay đổi bộ lọc
       filterInputs.forEach(input => {
           input.addEventListener('change', function() {
               applyFilter();
           });
       });
   
       // Xử lý khi nhấn vào phân trang
       document.addEventListener('click', function(e) {
           const paginationLink = e.target.closest('.pagination a');
           if (paginationLink) {
               e.preventDefault();
   
               // Kiểm tra nếu đang sử dụng AJAX
               if (document.querySelector('input[name="cate"]:checked') || document.querySelector(
                       'input[name="price"]:checked')) {
                   const url = paginationLink.getAttribute('href');
                   applyFilter(url);
               } else {
                   // Nếu không có bộ lọc, chuyển hướng đến URL phân trang
                   window.location.href = paginationLink.getAttribute('href');
               }
           }
       });
   
       function applyFilter(url = '{{ route('filterProduct') }}') {
           const selectedCategory = document.querySelector('input[name="cate"]:checked')?.value || '';
           const selectedPrice = document.querySelector('input[name="price"]:checked')?.value || '';
           const selectedSort = document.querySelector('.btn-quick-sort.active')?.getAttribute('data-sort') ||
               '';
           const formData = {
               cate: selectedCategory,
               price: selectedPrice,
               sort: selectedSort,
           };
   
           fetch(url, {
                   method: 'POST',
                   headers: {
                       'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                       'Content-Type': 'application/json',
                   },
                   body: JSON.stringify(formData),
               })
               .then(response => {
                   if (!response.ok) {
                       throw new Error('Lỗi server: ' + response.status);
                   }
                   return response.json();
               })
               .then(data => {
                   if (data.html) {
                       document.getElementById('product-list').innerHTML = data.html;
                   }
                   if (data.pagination) {
                       document.querySelector('.pagination').innerHTML = data.pagination;
                   }
                   if (data.title) {
                       document.querySelector('.tieudetrang').textContent = data.title;
                       document.getElementById('tieudetrang').textContent = data.title;
                   }
               })
               .catch(error => console.error('Lỗi:', error));
       }
   });
</script>
<script>
   var swiperdanhmuc5 = new Swiper('.danhmuc-slider-2', {
       slidesPerView: 4,
       slidesPerColumn: 1,
       slidesPerColumnFill: 'row',
       spaceBetween: 5,
       loopAdditionalSlides: 5,
       grabCursor: true,
       roundLengths: true,
       slideToClickedSlide: false,
       autoplay: {
           delay: 2000,
           disableOnInteraction: false
       },
       navigation: {
           nextEl: '.danhmuc-slider-2 .swiper-button-next',
           prevEl: '.danhmuc-slider-2 .swiper-button-prev',
       },
       breakpoints: {
           300: {
               slidesPerView: 2,
               slidesPerColumn: 2
           },
           500: {
               slidesPerView: 2,
               slidesPerColumn: 2
           },
           768: {
               slidesPerView: 3,
               slidesPerColumn: 2
           },
           991: {
               slidesPerView: 4,
               slidesPerColumn: 2
           },
           1200: {
               slidesPerView: 5,
               slidesPerColumn: 2
           }
       }
   });
   
   // Dừng khi hover
</script>
@endsection