@extends('layouts.main.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ languageName($product->description) }}
@endsection
@section('image')
    @php
        $img = json_decode($product->images);
        $thongsokythuat = json_decode($product->size);
        $variant = json_decode($product->variant);
        $khuyenmai = json_decode($product->preserve);
    @endphp
    {{ url('' . $img[0]) }}
@endsection
@section('css')
    <link href="{{ asset('frontend/css/product_style.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
        media="all" />
@endsection
@section('js')
@endsection
@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('home') }}"><span>Trang chủ</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li>
                    <a class="changeurl"
                        href="{{ route('allListProCate', ['danhmuc' => $product->cate->slug]) }}"><span>{{ languageName($product->cate->name) }}</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li><strong><span>{{ $product->name }}</span></strong>
                <li>
            </ul>
        </div>
    </section>
    <section class="product layout-product">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="details-product">
                        <div class="row">
                            <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-xl-4">
                                <div class="product-image-block">
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper" id="lightgallery">
                                            @foreach ($img as $key => $item)
                                                <a class="swiper-slide" data-hash="0" href="{{ $item }}"
                                                    title="Click để xem">
                                                    <img height="400" width="400" src="{{ $item }}"
                                                        class="img-responsive mx-auto d-block swiper-lazy" />
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            @foreach ($img as $key => $item)
                                                <div class="swiper-slide" data-hash="0">
                                                    <div class="p-100">
                                                        <img height="80" width="80" src="{{ $item }}"
                                                            class="swiper-lazy" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next">
                                        </div>
                                        <div class="swiper-button-prev">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                                <div class="details-pro">
                                    <h1 class="title-product">{{ $product->name }}</h1>
                                    <div class="inventory_quantity">
                                        <div class="thump-break">
                                            <span class="mb-break type">
                                                <span class="stock-brand-title">Loại:</span>
                                                <span class="a-vendor">
                                                    {{ languageName($product->cate->name) }}</span>
                                            </span>
                                            </span>
                                        </div>
                                        <div class="thump-break">
                                            <span class="mb-break inventory">
                                                <span class="stock-brand-title">Tình trạng:</span>
                                                @if ($product->price > 0)
                                                    @if ($product->status_variant == 1)
                                                        <span class="a-stock">
                                                            Còn hàng
                                                        </span>
                                                    @else
                                                        <span class="a-stock">
                                                            Hết hàng
                                                        </span>
                                                    @endif
                                                @else
                                                    <span class="a-stock dangcapnhat">
                                                        Đang cập nhật
                                                    </span>
                                                @endif
                                            </span>
                                            <div class="sku-product clearfix">
                                                <span class="stock-brand-title">Mã sản phẩm:</span>
                                                <span class="variant-sku" itemprop="sku" content="Đang cập nhật"><span
                                                        class="a-sku">Đang cập nhật</span></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews_details_product ">
                                        <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail"
                                            data-id="32504818"></div>
                                    </div>
                                    {{-- ====================================================================================== --}}

                                    <form enctype="multipart/form-data" action="{{ route('add.to.cart') }}" method="post"
                                        class="form-inline">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="price-box clearfix">
                                            @if ($product->price > 0)
                                                @if ($product->discount >0)
                                                    
                                                    <span class="special-price font-weight-bold">{{ number_format($product->discount) }}₫</span>
                                                    <del class="old-price"> {{ number_format($product->price) }}₫</del>
                                                @else
                                                    <span
                                                        class="special-price font-weight-bold">{{ number_format($product->price) }}₫</span>
                                                @endif
                                            @else
                                                <span class="special-price font-weight-bold dangcapnhat">Đang cập
                                                    nhật</span>
                                            @endif
                                            <!-- Giás gốc -->
                                        </div>
                                        @if ($product->price > 0)
                                            <div class="form-product">
                                                <div class="box-variant clearfix  d-none ">
                                                    {{-- <input type="hidden" id="one_variant" name="variantId" value="97528099" /> --}}
                                                </div>
                                                <div class="clearfix form-group ">
                                                    <div class="flex-quantity">
                                                        <div class="custom custom-btn-number show">
                                                            <label class="sl section">Số lượng:</label>
                                                            <div
                                                                class="input_number_product form-control d-flex align-items-center">
                                                                <button type="button" class="btn btn-decrement"
                                                                    onclick="decrementQuantity()">-</button>
                                                                <input type="number" id="quantity" name="quantity"
                                                                    value="1" min="1" class="text-center"
                                                                    style="width: 50px;" />
                                                                <button type="button" class="btn btn-increment"
                                                                    onclick="incrementQuantity()">+</button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-mua button_actions clearfix">
                                                            <button type="submit"
                                                                class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart ">
                                                                <span class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                                        data-name="Layer 1" viewBox="0 0 40 40">
                                                                        <defs></defs>
                                                                        <g>
                                                                            <path class="cls-1"
                                                                                d="M35.91,36.17,33.24,10.75a1,1,0,0,0-1-.94h-5V8.67a6.47,6.47,0,1,0-12.93,0V9.81h-5a1.05,1.05,0,0,0-1,.94L5.52,36.17a1,1,0,0,0,.93,1.15H34.87a1,1,0,0,0,1.05-1A.41.41,0,0,0,35.91,36.17ZM16.35,8.67a4.38,4.38,0,1,1,8.75,0V9.81H16.35ZM7.73,35.24l2.45-23.33h4.07v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91H25.1v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91h4.07l2.45,23.33Z" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="text">
                                                                    <span class="txt-main text_1">Thêm vào giỏ</span>
                                                                    <span class="text_2">Giao hàng tận nơi </span>
                                                                </span>
                                                            </button>
                                                            <br>
                                                        </div>
                                                        <div class="btn-mua button_actions clearfix">
                                                            <span>
                                                                {!! languageName($product->description) !!}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                        
                                            <div class="form-product">
                                                <div class="box-variant clearfix  d-none ">
                                                    {{-- <input type="hidden" id="one_variant" name="variantId" value="97528099" /> --}}
                                                </div>
                                                <div class="clearfix form-group ">
                                                    <div class="flex-quantity">

                                                        <div class="btn-mua button_actions clearfix">
                                                          <a href="{{route('lienHe')}}" class="cus-lien">Liên Hệ
                                                            <br> <p>Để đc tư vấn</p>
                                                          </a>
                                                            
                                                            
                                                            <br>
                                                        </div>
                                                        <div class="btn-mua button_actions clearfix">
                                                            <span>
                                                                {!! languageName($product->description) !!}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </form>
                                    {{-- ================================================================	==	=	=	=	==	= --}}



                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-5 col-12 content-pro">
                                <div class="camket">
                                    <div class="title">
                                        <b>CAM KẾT</b> CỦA CHÚNG TÔI
                                    </div>
                                    <ul>
                                        <li>
                                            <img src="{{asset('frontend/img/camket_1.png')}}"
                                                alt="cam kết">
                                            <span>Cam kết 100% chính hãng</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/img/camket_2.png')}}"
                                                alt="cam kết">
                                            <span>Hoàn tiền 111% nếu hàng giả</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/img/camket_3.png')}}"
                                                alt="cam kết">
                                            <span>Giao tận tay khách hàng</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/img/camket_4.png')}}"
                                                alt="cam kết">
                                            <span>Mở hộp kiểm tra nhận hàng</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/img/camket_5.png')}}"
                                                alt="cam kết">
                                            <span>Hỗ trợ 24/7</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="support-product">
                                    <div class="thumb-image">
                                        <img src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/customer-service.png?1737361902764"
                                            alt="Liên hệ">
                                    </div>
                                    <div class="content">
                                        <span>Để được hỗ trợ. Hãy gọi:</span>
                                        <a href="tel:{{ $setting->phone1 }}"
                                            title="{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                            <div class="col-12 col-md-12 col-lg-8 col-xl-9 ">
                                <div class="product-tab e-tabs not-dqtab" id="tab-product">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link active" data-tab="#tab-1">
                                            <h3>
                                                <span>Mô tả sản phẩm</span>
                                            </h3>
                                        </li>
                                        {{-- 
                           <li class="tab-link" data-tab="#tab-2">
                              <h3>
                                 <span>Hướng dẫn mua hàng</span>
                              </h3>
                           </li>
                           <li class="tab-link" data-tab="#tab-3">
                              <h3>
                                 <span>Chính sách bảo hành và bảo trì</span>
                              </h3>
                           </li>
                           --}}
                                    </ul>
                                    <div class="tab-float">
                                        <div id="tab-1" class="tab-content active content_extab">
                                            <div class="rte product_getcontent">
                                                <div class="ba-text-fpt">
                                                    {!! languageName($product->content) !!}
                                                </div>
                                                <div class="show-more d-none">
                                                    <div class="btn btn-default btn--view-more see-more">
                                                        <a href="javascript:void(0)" class="more-text see-more">Xem
                                                            thêm</a>
                                                        <a href="javascript:void(0)" class="less-text see-more">Thu gọn
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- 
                           <div id="tab-2" class="tab-content content_extab">
                              <div class="rte">
                                 <p><strong>Bước 1:</strong> Truy cập website và lựa chọn sản phẩm cần mua</p>
                                 <p><strong>Bước 2:</strong> Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau</p>
                                 <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng</p>
                                 <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                 <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán</p>
                                 <p><strong>Bước 3:</strong> Lựa chọn thông tin tài khoản thanh toán</p>
                                 <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                 <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
                                 <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản</p>
                                 <p><strong>Bước 4:</strong> Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                 <p><strong>Bước 5:</strong> Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng</p>
                                 <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                 <p>Trân trọng cảm ơn.</p>
                              </div>
                           </div>
                           <div id="tab-3" class="tab-content content_extab">
                              <div class="rte">
                                 <p><strong>1. BẢO HÀNH</strong></p>
                                 <p>Bảo hành sản phẩm là: khắc phục những lỗi hỏng hóc, sự cố kỹ thuật xảy ra do lỗi của nhà sản xuất.</p>
                                 <p><em><strong>1.1. Quy định về bảo hành</strong></em></p>
                                 <p>– Sản phẩm được bảo hành miễn phí nếu sản phẩm đó còn thời hạn bảo hành được tính kể từ ngày giao hàng, sản phẩm được bảo hành trong thời hạn bảo hành ghi trên Sổ bảo hành, Tem bảo hành và theo quy định của từng hãng sản xuất liên quan đến tất cả các sự cố về mặt kỹ thuật.</p>
                                 <p>– Có Phiếu bảo hành và Tem bảo hành của công ty hoặc nhà phân phối, hãng trên sản phẩm. Trường hợp sản phẩm không có số serial ghi trên Phiếu bảo hành thì phải có Tem bảo hành của CÔNG TY DOLA (kể cả Tem bảo hành gốc).</p>
                                 <p><em><strong>1.2. Những trường hợp không được bảo hành</strong></em></p>
                                 <p>– Sản phẩm đã hết thời hạn bảo hành hoặc mất Phiếu bảo hành.</p>
                                 <p>– Số mã vạch, số serial trên sản phẩm không xác định được hoặc sai so với Phiếu bảo hành.</p>
                                 <p>– Tự ý tháo dỡ, sửa chữa bởi các cá nhân hoặc kỹ thuật viên không phải là nhân viên CÔNG TY DOLA</p>
                                 <p>– Sản phẩm bị cháy nổ hay hỏng hóc do tác động cơ học, biến dạng, rơi, vỡ, va đập, bị xước, bị hỏng do ẩm ướt, hoen rỉ, chảy nước, động vật xâm nhập vào, thiên tai, hỏa hoạn, sử dụng sai điện áp quy định.</p>
                                 <p>– Phiếu bảo hành, Tem bảo hành bị rách, không còn Tem bảo hành, Tem bảo hành dán đè, hoặc Tem bảo hành bị sửa đổi (kể cả Tem bảo hành gốc).</p>
                                 <p>– Trường hợp sản phẩm của Quý khách hàng dán Tem bảo hành của CÔNG TY DOLA hay nhầm lẫn thông tin trên Phiếu bảo hành, Phiếu mua hàng: Trong trường hợp này, bộ phận bảo hành sẽ đối chiếu với số phiếu xuất gốc lưu tại Công ty, hóa đơn, phần mềm của Công ty hay thông tin của nhà phân phối, hãng, các Quý khách hàng khác mua cùng sản phẩm cùng thời điểm, nếu có sự sai lệch thì sản phẩm của Quý khách không được bảo hành (có thể Tem bảo hành của Công ty bị thất thoát và bị lợi dụng dán lên thiết bị hay nhầm lẫn nhỏ khi nhập, in ra). Kính mong Quý khách hàng thông cảm!</p>
                                 <p>– Bảo hành không bao gồm vận chuyển hàng và giao hàng.</p>
                                 <p><strong>2. BẢO TRÌ</strong></p>
                                 <p>Bảo trì, bảo dưỡng: bao gồm lau chùi sản phẩm, sửa chữa những hỏng hóc nhỏ có thể sửa được (không bao gồm thay thế thiết bị). Thời gian bảo trì, bảo dưỡng tùy thuộc vào sự thỏa thuận giữa DOLA và Quý khách hàng.</p>
                              </div>
                           </div>
                           --}}
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 col-xl-12">
                                    <div class="productRelate product-lq">
                                        <h3 class="title-index">
                                            <a class="title-name" href="#lq" id="lq"
                                                title="SẢN PHẨM LIÊN QUAN">SẢN PHẨM <b>LIÊN QUAN</b>
                                            </a>
                                        </h3>
                                        <div class="product-relate-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                                @foreach ($productlq as $lq)
                                                    <div class="swiper-slide">
                                                        @include('layouts.product.item', ['pro' => $lq])
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="swiper-button-next">
                                            </div>
                                            <div class="swiper-button-prev">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var swiperdanhmuc3 = new Swiper('.product-relate-swiper', {
                                        slidesPerView: 4,
                                        slidesPerColumn: 1,
                                        slidesPerColumnFill: 'row',
                                        spaceBetween: 10,
                                        loopAdditionalSlides: 5,
                                        grabCursor: true,
                                        roundLengths: true,
                                        slideToClickedSlide: false,
                                        autoplay: {
                                            delay: 2000,
                                            disableOnInteraction: false
                                        },
                                        navigation: {
                                            nextEl: '.product-relate-swiper .swiper-button-next',
                                            prevEl: '.product-relate-swiper .swiper-button-prev',
                                        },
                                        breakpoints: {
                                            300: {
                                                slidesPerView: 4,
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

                           
                                </script>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4 col-xl-3 ">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="product-like">
                                            @include('layouts.menu.danhmuc')
                                            @include('layouts.menu.tintuc')
                                            <div class="title-header-col">
                                                <span>CÓ THỂ <b>BẠN THÍCH</b></span>
                                            </div>
                                            <div class="list goiy-list">
                                                @foreach ($goiy as $item)
                                                    @php
                                                        $anhgoiy = json_decode($item->images);
                                                    @endphp
                                                    <div class="product-list">
                                                        <div class="product-thumbnail">
                                                            <a class="image_thumb scale_hover"
                                                                href="{{ route('detailProduct', ['cate' => $item->cate_slug, 'type' => $item->type_slug ? $item->type_slug : 'loai', 'id' => $item->slug]) }}"
                                                                title="{{ $item->name }}">
                                                                <img src="{{ $anhgoiy[0] }}" alt="{{ $anhgoiy[0] }}"
                                                                    class=" images1" data-src="{{ $anhgoiy[0] }}"
                                                                    width="234" height="234">
                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                    href="{{ route('detailProduct', ['cate' => $item->cate_slug, 'type' => $item->type_slug ? $item->type_slug : 'loai', 'id' => $item->slug]) }}"
                                                                    title="{{ $item->name }}">{{ $item->name }}</a>
                                                            </h3>
                                                           
      <div class="price-box">
         @if ($item->price > 0)
         @if ($item->discount > 0)
         <span class="special-price font-weight-bold">{{ number_format($item->discount) }}₫</span>
         <del class="old-price"> {{ number_format($item->price) }}₫</del>
         <div class="button-cunghang ">
            <button class="but1 themgio" data-id="{{$item->id}}">Thêm vào giỏ hàng</button>
          
         </div>
         @else
         <span class="special-price font-weight-bold">{{ number_format($item->price) }}₫</span>
         {{-- <del class="old-price"> {{ number_format($item->price) }}₫</del> --}}
         <div class="button-cunghang ">
            <button class="but1 themgio" data-id="{{$item->id}}">Thêm vào giỏ hàng</button>
           
         </div>
         @endif
         @else
         <span class="special-price font-weight-bold dangcapnhat">Đang cập nhật</span>
      
           
           
     
         @endif
      </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="popup-video">
        <div class="body-popup">
        </div>
        <div class="close-popup-video">
            <i class="fa fa-close"></i>
            Đóng
        </div>
    </div>
    <script>
        var swiperdanhmuc4 = new Swiper('.gallery-thumbs', {
            slidesPerView: 3,
            slidesPerColumn: 2,
            slidesPerColumnFill: 'row',
            spaceBetween: 10,
            loopAdditionalSlides: 5,
            grabCursor: true,
            roundLengths: true,
            slideToClickedSlide: false,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
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
    <script>
        function incrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }
    </script>
        <script>
document.addEventListener('DOMContentLoaded', function () {
    const addCartButton = document.querySelector('.btn_add_cart');
    if (addCartButton) {
        addCartButton.addEventListener('click', function (e) {
            e.preventDefault();
            const form = this.closest('form');
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    toastr.success(data.message); // Hiển thị thông báo thành công

                    // Cập nhật số lượng sản phẩm trong giỏ hàng
                    const cartCountElements = document.querySelectorAll('.count_item_pr');
                if (cartCountElements.length > 0) {
                    cartCountElements.forEach(element => {
                        element.textContent = data.cartCount; // Cập nhật số lượng từ server
                    });
                }
                } else {
                    toastr.error(data.message); // Hiển thị thông báo lỗi
                }
            })
            .catch(error => {
                console.error('Lỗi:', error);
                toastr.error('Đã xảy ra lỗi. Vui lòng thử lại.');
            });
        });
    } else {
        console.error('Phần tử .btn_add_cart không tồn tại.');
    }
});
         </script>

@endsection
