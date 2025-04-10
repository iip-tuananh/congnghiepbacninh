<div class="opacity_menu"></div>
<header class="header header-tuan">
    <div class="container" style="position: relative;">
        <div class="row row-header align-items-center">
            <div class="col-md-4 col-lg-3 col-12 header-logo" style="    text-align: center;">
                <div class="menu-bar d-lg-none d-flex">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14">
                        <path fill="#ffffff"
                            d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                            class=""></path>
                    </svg>
                </div>
                <a href="{{ route('home') }}" class="logo " title="Logo">
                    <img width="995" height="50" class="logotop" src="{{ $setting->logo }}"
                        alt="{{ $setting->company }}">
                </a>
            </div>
            <div class="col-lg-4 col-12 header-search">
                <div class="search-header">


                  
                    <div class="custom-search-container">
						<form id="custom-search-form" class="custom-search-form" action="{{ route('search_result') }}" method="GET" role="search">
							@csrf
							<input type="text" name="key" id="custom-search-input" required
								class="custom-search-input" placeholder="Search something..." autocomplete="off">
							<button type="submit" id="custom-search-button" class="custom-search-button">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
									<path d="M10 2a8 8 0 105.293 14.293l4.707 4.707a1 1 0 001.414-1.414l-4.707-4.707A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"></path>
								</svg>
							</button>
						</form>
                        <div id="custom-search-results" class="custom-search-results"></div>
                    </div>


                </div>
            </div>
            <div class="col-md-8 col-lg-5 col-2 header-control">
                <ul class="ul-control">
                    <li class="header-wishlist d-md-flex d-none">
                        <div class="icon">
                            <i class='bx bx-phone bx-tada' style='color:#ff4900 ; font-size:44px'  ></i>
                        </div>
                         <a class="thumb" title="Liên hệ " href="tel:+{{ $setting->phone1 }}">
                            <div class="title">
                                Liên Hệ
                            </div>
                            <div class="content">
                                {{ $setting->phone1 }}

                            </div>
                            </a>
                    </li>
                    <li class="header-cart block-cart d-flex">
                        <div class="icon">
                            {{-- <i class='bx bx-cart bx-tada' style='color:#ff4900 ; font-size:36px'  ></i>                        </div> --}}
                       
                        {{-- <a class="thumb" href="{{ route('listCart') }}" title="Giỏ hàng" id="giohang-tuan">
                            <div class="title">
                                Giỏ hàng
                            </div>
                            <div class="content">
                                <span class="count count_item_pr">0</span>
                                Sản phẩm
                            </div>
                        </a> --}}
                    
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="header-menu">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-3 d-lg-block d-none">
                <div class="menu_mega indexs">
                    <div class="title_menu">
                        <span class="title_">Danh mục sản phẩm</span>
                    </div>
                    <div id="section-verticalmenu" class="block block-verticalmenu float-vertical float-vertical-left">
                        <div class="aside-vetical-menu">
                            <aside class="blog-aside">
                                <div class="block_content aside-content ">
                                    <div id="verticalmenu" class="list_menu_header verticalmenu nav-category "
                                        role="navigation">
                                        <div class="ul nav vertical-nav ul_menu site-nav-vetical">
                                            {{-- render-menu --}}
                                            @foreach ($categoryhome as $category)
                                                <div class="nav_item nav-item lv1 li_check ">
                                                    @if (count($category->typeCate) > 0 || count($category->tagCate) > 0)
                                                        <a href="{{ route('allListProCate', ['danhmuc' => $category->slug]) }}"
                                                            title="{{ $category->name }}"
                                                            style="background-image: url('{{asset($category->avatar)}}')">
                                                            {{ languageName($category->name) }} </a>
                                                     
                                                        <div class="ul_content_right_1">
                                                            <div class="row">
                                                                @foreach ($category->typeCate as $type)
                                                                    <div
                                                                        class="nav_item nav-item lv2 col-lg-4 col-md-4">
                                                                        <a href="{{ route('allListType', ['danhmuc' => $category->slug, 'loaidanhmuc' => $type->slug]) }}"
                                                                            title="{{ languageName($type->name) }}">{{ languageName($type->name) }}</a>
                                                                        <div class="ul_content_right_2">
                                                                            @foreach ($type->typetwo as $ttwo)
                                                                                @if (count($type->typetwo) > 0)
                                                                                    <div class="nav_item nav-item lv3">
                                                                                        <a href="{{ route('allListTypeTwo', ['danhmuc' => $category->slug, 'loaidanhmuc' => $type->slug, 'loai2' => $ttwo->slug]) }}"
                                                                                            title="{{ languageName($ttwo->name) }}">{{ languageName($ttwo->name) }}</a>
                                                                                    </div>
                                                                                @else
                                                                                    <div class="nav_item nav-item lv3">
                                                                                        <a href="#"
                                                                                            title="Tạm hết hàng">Tạm
                                                                                            hết hàng</a>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @else
                                                        <a href="{{ route('allListProCate', ['danhmuc' => $category->slug]) }}"
                                                            title="{{ $category->name }}"
                                                            style="background-image: url('{{asset($category->avatar)}}')">
                                                            {{ languageName($category->name) }} </a>
                                                        {{-- <div class="ul_content_right_1">
                                                            <div class="row">
                                                                <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                                        href="#"
                                                                        title="Sản phẩm tạm thời hết"> Sản phẩm
                                                                        tạm thời hết !</a>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    @endif
                                                </div>
                                            @endforeach
                                            {{-- end render --}}
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu-des col-lg-9">
                <nav class="header-nav">
                    <ul class="item_big">
                        <li>
                            <a class="logo-sitenav d-lg-none d-block" href="{{route('home')}}" title="Logo">
                                <img width="172" height="50"
                                    src="{{ $setting->logo }}"   style="width: 172px; height: 50px;"
                                    alt="{{ $setting->company }}">
                            </a>
                        </li>
                        <li class="nav-item active  ">
                            <a class="a-img" href="{{ route('home') }}" title="Trang chủ">
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="a-img" href="{{ route('allProduct') }}" title="SảnPhẩm">
                               Tất cả sản phẩm
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="a-img" href="{{ route('aboutUs') }}" title="Giới thiệu">
                                Về Chúng Tôi
                            </a>
                        </li>
                    

                        {{-- <li class="nav-item  ">
                            <a class="a-img" href="{{ route('allListBlog') }}" title="Tin tức">
                                Tin tức
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="a-img" href="{{ route('lienHe') }}" title="Liên hệ">
                                Liên hệ
                            </a>
                        </li> --}}
                        <li class="d-block d-lg-none title-danhmuc"><span>Danh mục sản phẩm</span></li>
                        <li class="nav-item d-block d-lg-none  danhmuc">
                            @foreach ($categoryhome as $pro)
                            <a class="a-img caret-down" href="{{ route('allListProCate', ['danhmuc' => $pro->slug]) }}" title="{{$pro->name}}" style="background-image: url('{{asset($pro->avatar)}}')">
                                {{languageName($pro->name)}}
                            </a>
                            <br>
                                
                            @endforeach
                        </li>


                     
                    </ul>
                </nav>
              
                <div class="control-menu d-none">
                    <a href="#" id="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="#fff"
                                d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c-12.5-12.5-12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </a>
                    <a href="#" id="next">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="#fff"
                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 0-45.3l-192 192z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<h1 class="d-none">{{ $setting->company }} - </h1>

<!-- filepath: c:\xampp\htdocs\cnbacninh\resources\views\layouts\header\index.blade.php -->

<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<style>

</style>
