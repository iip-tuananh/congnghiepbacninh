<!DOCTYPE html>
<html lang="zxx">

<head>

    @include('layouts.header.head')
    <link rel="icon" href="{{ $setting->favicon }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    @yield('css')

    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/main.scss.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.scss.css') }}" type="text/css" media="all" />
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/index.scss.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/index.scss.css') }}" type="text/css" media="all" />
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@4.5.1/dist/css/swiper.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{ asset('frontend/css/breadcrumb_style.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/toastr.scss.css') }}">

    <link href="{{ asset('frontend/css/paginate.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
        media="all" />

    <link href="{{ asset('frontend/css/blog_article_style.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
        media="all" />
    <link href="{{ asset('frontend/css/sidebar_style.scss.css?1737361902764') }}" rel="stylesheet" type="text/css"
        media="all" />
    <!-- JS -->
    <script src="https://unpkg.com/swiper@4.5.1/dist/js/swiper.min.js"></script>
    <link rel="preload" as='style' type="text/css"
        href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.banner-slider', {
                loop: true, // Lặp vô hạn
                autoplay: {
                    delay: 3000, // Thời gian giữa các slide (ms)
                    disableOnInteraction: false, // Không dừng khi tương tác
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                effect: 'fade', // Hiệu ứng chuyển slide
            });
        });
    </script>
    <link rel="stylesheet" href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    </style>
    <script src="{{ asset('frontend/js/stats.min.js') }}"></script>

</head>

<body>
    <div id="gotop"><i class='bx bx-chevron-up'></i></div>
    {{-- <div id="toast-container"></div> --}}
    @include('layouts.header.index')
    @yield('content')
    @include('layouts.footer.index')

    <div class="fixed-bottom-mobile d-md-none d-block">
        <ul>
            <li class="menu-bar ">
                <a href="javascript:void(0)" id="open-sidebar">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMpJREFUSEvtlEEOwiAQRf/cpN7Eruot1GW5hPESdKnHkJXcRE4iprQkqAUnKEaNbJnw5/3hD6HwocLv480CjTwCmEeoDJSYuTtuHXBD0EibtEyJgZhb9xeI2umt/EWLuh1gVxF0DSXq4Rcx6+4sKhDrD01yT7roKlhsRksNQBqELQ6tCY24JuAm1D1uTxOOGhDVoUieQPaQuQSN7LuvHi7FJ4KWEgBekOTEWqc9VLv2dHkzyB8yP6Hum56xBPnkkw47nyb4/iQXILgApVJ9Gbx+jqYAAAAASUVORK5CYII=" />
                    <span>Danh mục mobile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQlJREFUSEvtlb0RgzAMhZ83IZtABWMkJSyRyxJQsgZUYZOwiXMGBPgPpMvRxaUtv0+Wn2yFi4e6WB98QNEk0LqdElLqga4cOcnxAJt4uoiOUCrjQM4BtjhlnQBgQY4Brnhf3TDPvQGwIHFASJyKLoCEAUfiQogP4IgLIDZAIs6EbADXin117jAb8glZeBPJmxbQ97V5JACzKa/1rvEG9FU29eQ6eTmASJQJnaBoUmj9BEBdTJEDlHqhK4dpwt23RPl1dgPz2tTWNFVorKX4BTDX1r0TP5FgHOcEf4Bzd8zaepcqcNGRa84+sRHmSd+N0GNnfG++xpg1YxC7L6J9cJajcJ3/oAmFKfwLRzfQGYlSwKkAAAAASUVORK5CYII=" />
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="{{ route('listCart') }}">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARRJREFUSEvNlMsZgjAQhGc7kU70IpSBx2ARYhGQI5QBXrQT6WQVNTw0r0+Nn7kG5p/Z3Swh8KHA+vghIC75kaYDU42D2H8j3ZhgBNx1iVZoxOlTyGuJkiIFUwXghDZbBQDIBZjP30qhb3IsK4DTD9x3aLPoVmmtSDJJ8R7FAehF4/J47cMSxBs029qLo5Iz5WoKze9gbPbgxglRk0gUoRGduUT9zbRMPiM7GKIardgoM/aXvJY7EOfA/CdtEkNJ7YAxhbtMqjxtNtN07yLlbNK4lwSWpG5AIpdg7ifKfTS9cgN62cGhlaFdLX4At3fjF36ARBZgzkBUohHbmZrtzrgqnv1MV/nTlMB25w0IniB4D/4ZcAE4NYUZAz0FuAAAAABJRU5ErkJggg==" />
                    <span>Giỏ hàng</span>
                    <span class="count count_item_pr">0</span>
                </a>
            </li>


        </ul>
    </div>
    <link rel="preload" as="style"
        href="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/ajaxcart.scss.css?1737361902764" type="text/css">
    <link href="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/ajaxcart.scss.css?1737361902764" rel="stylesheet"
        type="text/css" media="all" />
    <div class="backdrop__body-backdrop___1rvky"></div>

    {{-- <script src="{{ asset('frontend/js/jquery.js') }}'" type="text/javascript"></script> --}}
    {{-- <link rel="preload" as="script" href="{{ asset('frontend/js/swiper.js') }}'" />
    <script src="{{ asset('frontend/js/swiper.js') }}'" type="text/javascript"></script> --}}


    <link rel="preload" as="script" href="{{ asset('frontend/js/main.js') }}" />
    <link rel="preload" as="script" href="{{ asset('frontend/js/index.js') }}" />


    <script src="{{ asset('frontend/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/index.js') }}" type="text/javascript"></script>

    <div id="list-favorite" class="d-none">
        <div class="list-favorite-right container" data-type="wishlist">
            <div class="list-favorite-main">
                <div class="list-favorite-list row">
                </div>
            </div>
        </div>
    </div>

    <div class="d-none">
        <div class="icon">
            <a href="so-sanh-san-pham" class="wishlist_header" title="So sánh sản phẩm">
                <svg width="419pt" height="419pt" viewBox="0 -45 419.24 419" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m359.08 102.91c1.4609 1.5391 3.4766 2.4375 5.6016 2.4844 2.125 0.050781 4.1797-0.75 5.7109-2.2227l46.414-44.898c1.5625-1.5117 2.4414-3.5938 2.4336-5.7656-0.003906-2.1758-0.89453-4.2539-2.4688-5.7539l-46.41-44.41c-3.1953-3.0547-8.2578-2.9414-11.312 0.25-1.4648 1.4922-2.2656 3.5156-2.2188 5.6055 0.046875 2.0898 0.9375 4.0742 2.4688 5.5l32.008 30.426h-64.273c-27.59 0.14453-53.539 13.133-70.191 35.137l-54.852 71.617-79.242-103.46c-1.4961-2.0156-3.8359-3.2305-6.3477-3.2891h-108.4c-4.418 0-8 3.582-8 8 0 4.418 3.582 8 8 8h104.45l79.449 104-79.449 104h-104.45c-4.418 0-8 3.582-8 8 0 4.418 3.582 8 8 8h108.4c2.5195-0.078125 4.8594-1.3086 6.3477-3.3359l79.242-103.41 54.812 71.617c16.66 22.012 42.625 35.004 70.23 35.133h64.273l-32.008 30.426c-2.3555 2.2344-3.1016 5.6875-1.8789 8.6992 1.2227 3.0078 4.1602 4.9648 7.4102 4.9258 2.0625-0.007813 4.043-0.8125 5.5312-2.2461l46.41-44.426c1.5742-1.5039 2.4648-3.5859 2.4688-5.7617 0.007813-2.1758-0.87109-4.2617-2.4336-5.7773l-46.414-44.91c-3.1758-3.0742-8.2422-2.9883-11.312 0.18359-3.0703 3.2539-2.9883 8.3633 0.1875 11.516l32.207 31.371h-64.441c-22.617-0.14062-43.875-10.816-57.5-28.875l-57.461-75.023 57.5-75.227c13.613-18.043 34.855-28.719 57.461-28.875h64.441l-32.207 31.371c-3.1758 3.1094-3.2578 8.1992-0.1875 11.414z" />
                </svg>
            </a>
        </div>
    </div>
    <div id="sidebar-all" class="d-none">
        <div class="sidebar-all-wrap-right container" data-type="wishlist">
            <div class="sidebar-all-wrap-right-main">
                <div class="sidebar-all-wrap-right-main-list row">
                </div>
            </div>
        </div>
    </div>
    <div class="compare-sidebar d-none">
        <div class="sidebarAllMainCompare">
            <div class="sidebarAllHeader">
                <span class="closeSidebar"><i class="lni lni-close"></i></span>
                <span>Danh sách so sánh</span>
            </div>
            <div class="sidebarAllBody"></div>
        </div>
    </div>

    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
    <div style="visibility:hidden; position: absolute; z-index: -1; bottom: 0; left: 0;">
        <svg style="display:none">
            <defs>
                <symbol class="icon" id="icon-cart" viewBox="0 0 16 19" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.594 16.39a.703.703 0 0 1-.703.704h-.704v.703a.703.703 0 0 1-1.406 0v-.703h-.703a.703.703 0 0 1 0-1.407h.703v-.703a.703.703 0 1 1 1.406 0v.704h.704c.388 0 .703.314.703.703Zm0-10.968v6.75a.703.703 0 0 1-1.406 0V6.125H12.78v2.11a.703.703 0 1 1-1.406 0v-2.11h-6.75v2.11a.703.703 0 1 1-1.406 0v-2.11H1.813v10.969h7.453a.703.703 0 1 1 0 1.406H1.109a.703.703 0 0 1-.703-.703V5.422c0-.388.315-.703.703-.703h2.143A4.788 4.788 0 0 1 8 .5a4.788 4.788 0 0 1 4.748 4.219h2.143c.388 0 .703.315.703.703Zm-4.266-.703A3.38 3.38 0 0 0 8 1.906 3.38 3.38 0 0 0 4.672 4.72h6.656Z"
                        fill="currentColor" />
                </symbol>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-detail">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#000"
                        d="M120 256c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm160 0c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm104 56c-30.9 0-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56s-25.1 56-56 56z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-quickview">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#000"
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#ffffff"
                        d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                    </path>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-wishlist-active">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#ff0000"
                        d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                    </path>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-search">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="#000"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000"
                        d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z">
                    </path>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path fill="#ffb700"
                        d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-email">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path fill="#ffb700"
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 20 18"
                    fill="none">
                    <path d="M1 3H4" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                    <path d="M1 15H4" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                    <path d="M12 3L19 3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                    <path d="M12 15L19 15" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                    <path d="M1 9H2.5H3.25M13 9H7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                    <rect x="6" y="1" width="4" height="4" rx="1.5" stroke="#fff"
                        stroke-width="1.5"></rect>
                    <rect x="6" y="13" width="4" height="4" rx="1.5" stroke="#fff"
                        stroke-width="1.5"></rect>
                    <rect x="15" y="7" width="4" height="4" rx="1.5" stroke="#fff"
                        stroke-width="1.5"></rect>
                </svg>
            </symbol>
        </svg>
    </div>
    <div class='jas-sale-pop flex pf middle-xs'></div>

    <div class="addThis_listSharing" style="display: block;">
        <div class="listSharing_action">
            <button type="button" class="addThis_close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g transform="translate(-1341.000000, -90.000000)">
                            <g transform="translate(1341.000000, 90.000000)">
                                <polygon
                                    points="19 6.4 17.6 5 12 10.6 6.4 5 5 6.4 10.6 12 5 17.6 6.4 19 12 13.4 17.6 19 19 17.6 13.4 12">
                                </polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <ul class="addThis_listing">
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="tel:{{ $setting->phone1 }}" rel="nofollow"
                        aria-label="phone">
                        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                                fill="white"></path>
                            <defs>
                                <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219"
                                    y2="40.5458" gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#e8434c"></stop>
                                    <stop offset="100%" stop-color="#d61114"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
                    </a>
                </li>
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="{{ $setting->facebook }}" target="_blank"
                        rel="nofollow noreferrer" aria-label="zalo">
                        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)"></circle>
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                                    fill="white"></path>
                                <path
                                    d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                                    fill="white"></path>
                                <path
                                    d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                                    fill="white"></path>
                                <path
                                    d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                                    fill="#0068FF"></path>
                            </g>
                            <defs>
                                <linearGradient id="paint4_linear" x1="22" y1="0" x2="22"
                                    y2="44" gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#3985f7"></stop>
                                    <stop offset="100%" stop-color="#1272e8"></stop>
                                </linearGradient>
                                <clipPath id="clip0">
                                    <rect width="26.3641" height="24.2" fill="white"
                                        transform="translate(8.78906 9.90234)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
                    </a>
                </li>
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="{{ route('lienHe') }}" aria-label="Liên hệ">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint5_linear)"></circle>
                            <path class="down"
                                d="M22 10C17.0374 10 13 13.7367 13 18.3297C13 24.0297 21.0541 32.3978 21.397 32.7512C21.7191 33.0832 22.2815 33.0826 22.603 32.7512C22.9459 32.3978 31 24.0297 31 18.3297C30.9999 13.7367 26.9626 10 22 10ZM22 22.5206C19.5032 22.5206 17.4719 20.6406 17.4719 18.3297C17.4719 16.0188 19.5032 14.1388 22 14.1388C24.4968 14.1388 26.528 16.0189 26.528 18.3297C26.528 20.6406 24.4968 22.5206 22 22.5206Z"
                                fill="white"></path>
                            <defs>
                                <linearGradient id="paint5_linear" x1="22" y1="0" x2="22"
                                    y2="44" gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#fecf72"></stop>
                                    <stop offset="100%" stop-color="#ef9f00"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Thông tin cửa hàng</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="listSharing_overlay"></div>
    </div>
    <div class="addThis_iconContact">
        <div class="box-item item-contact">
            <div class="svgico">
                <svg width="34" height="35" viewBox="0 0 34 35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.35522 31V25.416H5.41122V30.064H7.61122V31H4.35522ZM8.97509 26.216C8.76176 26.216 8.60709 26.168 8.51109 26.072C8.42043 25.976 8.37509 25.8533 8.37509 25.704V25.544C8.37509 25.3947 8.42043 25.272 8.51109 25.176C8.60709 25.08 8.76176 25.032 8.97509 25.032C9.18309 25.032 9.33509 25.08 9.43109 25.176C9.52709 25.272 9.57509 25.3947 9.57509 25.544V25.704C9.57509 25.8533 9.52709 25.976 9.43109 26.072C9.33509 26.168 9.18309 26.216 8.97509 26.216ZM8.46309 26.824H9.48709V31H8.46309V26.824ZM12.834 24.712L13.842 25.944L13.33 26.344L12.37 25.424L11.41 26.344L10.898 25.944L11.906 24.712H12.834ZM12.362 31.096C12.0527 31.096 11.7754 31.0453 11.53 30.944C11.29 30.8373 11.0847 30.6907 10.914 30.504C10.7487 30.312 10.6207 30.0827 10.53 29.816C10.4394 29.544 10.394 29.24 10.394 28.904C10.394 28.5733 10.4367 28.2747 10.522 28.008C10.6127 27.7413 10.7407 27.5147 10.906 27.328C11.0714 27.136 11.274 26.9893 11.514 26.888C11.754 26.7813 12.026 26.728 12.33 26.728C12.6554 26.728 12.938 26.784 13.178 26.896C13.418 27.008 13.6154 27.16 13.77 27.352C13.9247 27.544 14.0394 27.768 14.114 28.024C14.194 28.2747 14.234 28.544 14.234 28.832V29.168H11.458V29.272C11.458 29.576 11.5434 29.8213 11.714 30.008C11.8847 30.1893 12.138 30.28 12.474 30.28C12.73 30.28 12.938 30.2267 13.098 30.12C13.2634 30.0133 13.41 29.8773 13.538 29.712L14.09 30.328C13.9194 30.568 13.6847 30.7573 13.386 30.896C13.0927 31.0293 12.7514 31.096 12.362 31.096ZM12.346 27.496C12.074 27.496 11.858 27.5867 11.698 27.768C11.538 27.9493 11.458 28.184 11.458 28.472V28.536H13.17V28.464C13.17 28.176 13.098 27.944 12.954 27.768C12.8154 27.5867 12.6127 27.496 12.346 27.496ZM15.135 31V26.824H16.159V27.52H16.199C16.2843 27.296 16.4176 27.1093 16.599 26.96C16.7856 26.8053 17.0416 26.728 17.367 26.728C17.799 26.728 18.1296 26.8693 18.359 27.152C18.5883 27.4347 18.703 27.8373 18.703 28.36V31H17.679V28.464C17.679 28.1653 17.6256 27.9413 17.519 27.792C17.4123 27.6427 17.2363 27.568 16.991 27.568C16.8843 27.568 16.7803 27.584 16.679 27.616C16.583 27.6427 16.495 27.6853 16.415 27.744C16.3403 27.7973 16.279 27.8667 16.231 27.952C16.183 28.032 16.159 28.128 16.159 28.24V31H15.135ZM21.7287 25.08H22.7527V27.52H22.7927C22.8781 27.296 23.0114 27.1093 23.1927 26.96C23.3794 26.8053 23.6354 26.728 23.9607 26.728C24.3927 26.728 24.7234 26.8693 24.9527 27.152C25.1821 27.4347 25.2967 27.8373 25.2967 28.36V31H24.2727V28.464C24.2727 28.1653 24.2194 27.9413 24.1127 27.792C24.0061 27.6427 23.8301 27.568 23.5847 27.568C23.4781 27.568 23.3741 27.584 23.2727 27.616C23.1767 27.6427 23.0887 27.6853 23.0087 27.744C22.9341 27.7973 22.8727 27.8667 22.8247 27.952C22.7767 28.032 22.7527 28.128 22.7527 28.24V31H21.7287V25.08ZM28.5918 24.712L29.5998 25.944L29.0878 26.344L28.1278 25.424L27.1678 26.344L26.6558 25.944L27.6638 24.712H28.5918ZM28.1198 31.096C27.8105 31.096 27.5332 31.0453 27.2878 30.944C27.0478 30.8373 26.8425 30.6907 26.6718 30.504C26.5065 30.312 26.3785 30.0827 26.2878 29.816C26.1972 29.544 26.1518 29.24 26.1518 28.904C26.1518 28.5733 26.1945 28.2747 26.2798 28.008C26.3705 27.7413 26.4985 27.5147 26.6638 27.328C26.8292 27.136 27.0318 26.9893 27.2718 26.888C27.5118 26.7813 27.7838 26.728 28.0878 26.728C28.4132 26.728 28.6958 26.784 28.9358 26.896C29.1758 27.008 29.3732 27.16 29.5278 27.352C29.6825 27.544 29.7972 27.768 29.8718 28.024C29.9518 28.2747 29.9918 28.544 29.9918 28.832V29.168H27.2158V29.272C27.2158 29.576 27.3012 29.8213 27.4718 30.008C27.6425 30.1893 27.8958 30.28 28.2318 30.28C28.4878 30.28 28.6958 30.2267 28.8558 30.12C29.0212 30.0133 29.1678 29.8773 29.2958 29.712L29.8478 30.328C29.6772 30.568 29.4425 30.7573 29.1438 30.896C28.8505 31.0293 28.5092 31.096 28.1198 31.096ZM28.1038 27.496C27.8318 27.496 27.6158 27.5867 27.4558 27.768C27.2958 27.9493 27.2158 28.184 27.2158 28.472V28.536H28.9278V28.464C28.9278 28.176 28.8558 27.944 28.7118 27.768C28.5732 27.5867 28.3705 27.496 28.1038 27.496ZM28.1038 32.552C27.8958 32.552 27.7465 32.5067 27.6558 32.416C27.5705 32.3307 27.5278 32.2213 27.5278 32.088V31.912C27.5278 31.7787 27.5705 31.6667 27.6558 31.576C27.7465 31.4907 27.8958 31.448 28.1038 31.448C28.3118 31.448 28.4585 31.4907 28.5438 31.576C28.6345 31.6667 28.6798 31.7787 28.6798 31.912V32.088C28.6798 32.2213 28.6345 32.3307 28.5438 32.416C28.4585 32.5067 28.3118 32.552 28.1038 32.552Z">
                    </path>
                    <path
                        d="M27.2212 0H10.7532C9.76511 0 8.97461 0.834345 8.97461 1.82643V12.334C8.97461 13.3487 9.78701 14.1604 10.7532 14.1604H22.1051L24.6741 16.8211C24.7839 16.9338 24.9157 17.0015 25.0693 17.0015C25.3768 17.0015 25.6402 16.7535 25.6402 16.4153V14.1604H27.2212C28.2092 14.1604 28.9997 13.3261 28.9997 12.334V1.82643C28.9997 0.811779 28.1873 0 27.2212 0ZM13.2783 9.04195C12.378 9.04195 11.6315 8.2753 11.6315 7.35077C11.6315 6.42631 12.378 5.65966 13.2783 5.65966C14.1785 5.65966 14.925 6.42631 14.925 7.35077C14.925 8.2753 14.2005 9.04195 13.2783 9.04195ZM19.0531 9.04195C18.1528 9.04195 17.4062 8.2753 17.4062 7.35077C17.4062 6.42631 18.1528 5.65966 19.0531 5.65966C19.9533 5.65966 20.6998 6.42631 20.6998 7.35077C20.6998 8.2753 19.9533 9.04195 19.0531 9.04195ZM24.8059 9.04195C23.9056 9.04195 23.1591 8.2753 23.1591 7.35077C23.1591 6.42631 23.9056 5.65966 24.8059 5.65966C25.7061 5.65966 26.4526 6.42631 26.4526 7.35077C26.4526 8.2753 25.7061 9.04195 24.8059 9.04195Z">
                    </path>
                    <path
                        d="M7.9649 12.3782V8.79297H6.16437C5.52762 8.79297 5.00066 9.33418 5.00066 9.98807V16.8878C4.97869 17.5868 5.50564 18.128 6.16437 18.128H7.19637V19.6162C7.19637 19.8192 7.37202 19.9995 7.56964 19.9995C7.67944 19.9995 7.76727 19.9544 7.83312 19.8868L9.52385 18.1505H16.9894C17.6261 18.1505 18.1531 17.6094 18.1531 16.9555V15.2418H10.7535C9.2165 15.2418 7.9649 13.9566 7.9649 12.3782Z">
                    </path>
                </svg>
                <span class="svgico--close">
                    <svg viewBox="0 0 19 19" role="presentation">
                        <path
                            d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                            fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <script>
        $('.addThis_iconContact .item-contact,.addThis_listSharing .addThis_close').on('click', function(e) {
            if ($('.addThis_listSharing').hasClass('active')) {
                $('.addThis_listSharing').removeClass('active');
                $('.addThis_listSharing').fadeOut(150);
            } else {
                $('.addThis_listSharing').fadeIn(100);
                $('.addThis_listSharing').addClass('active');
            }
        });
        $('.listSharing_overlay').on('click', function(e) {
            $('.addThis_listSharing').removeClass('active');
            $('.addThis_listSharing').fadeOut(150);
        })
    </script>
    <script>
        $('.popup-sapo .icon').click(function() {
            $(".popup-sapo").toggleClass("active");
        });
        $('.close-popup-sapo').click(function() {
            $(".popup-sapo").toggleClass("active");
        });
    </script>
    {{-- <a target="_blank" class="livechat-mes" href="">
        <img src="https://bizweb.dktcdn.net/100/485/241/themes/911577/assets/messenger.svg?1705567372895"
            alt="Messenger">
    </a> --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lấy tất cả các nút "Thêm vào giỏ"
            const addToCartButtons = document.querySelectorAll('.themgio');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Ngăn chặn hành động mặc định

                    // Lấy ID sản phẩm từ thuộc tính data-id
                    const productId = this.getAttribute('data-id');

                    // Tạo dữ liệu gửi đi
                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                    formData.append('product_id', productId);
                    formData.append('quantity', 1); // Số lượng mặc định là 1

                    // Gửi request AJAX
                    fetch('{{ route('add.to.cart') }}', {
                            method: 'POST',
                            body: formData,
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                toastr.success(data.message);
                                const cartCountElements = document.querySelectorAll(
                                    '.count_item_pr');
                                if (cartCountElements.length > 0) {
                                    cartCountElements.forEach(element => {
                                        element.textContent = data
                                        .cartCount; // Cập nhật số lượng từ server
                                    });
                                }
                            } else {
                                toastr.error('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng.');
                            }
                        })
                        .catch(error => {
                            console.error('Lỗi:', error);
                            alert('Không thể thêm sản phẩm vào giỏ hàng.');
                        });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lấy tất cả các nút "Thêm vào giỏ"
            const addToCartButtons = document.querySelectorAll('.themgio1');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Ngăn chặn hành động mặc định

                    // Lấy ID sản phẩm từ thuộc tính data-id
                    const productId = this.getAttribute('data-id');

                    // Tạo dữ liệu gửi đi
                    const formData = new FormData();
                    // formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                    formData.append('product_id', productId);
                    formData.append('quantity', 1); // Số lượng mặc định là 1

                    // Gửi request AJAX
                    fetch('{{ route('add.to.cart') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        },
                            body: formData,
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                toastr.success(data.message);
                                const cartCountElements = document.querySelectorAll(
                                    '.count_item_pr');
                                if (cartCountElements.length > 0) {
                                    cartCountElements.forEach(element => {
                                        element.textContent = data
                                        .cartCount; // Cập nhật số lượng từ server
                                    });
                                }
                            } else {
                                toastr.error('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng.');
                            }
                        })
                        .catch(error => {
                            console.error('Lỗi:', error);
                            alert('Không thể thêm sản phẩm vào giỏ hàng.');
                        });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const placeholderText = "Search something...";
    const searchInput = document.getElementById('custom-search-input');
    let index = 0;

    function typePlaceholder() {
        if (index < placeholderText.length) {
            searchInput.setAttribute('placeholder', placeholderText.substring(0, index + 1));
            index++;
            setTimeout(typePlaceholder, 100); // Tốc độ đánh chữ (100ms mỗi ký tự)
        }
    }

    typePlaceholder();
});
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('custom-search-input');
            const searchResults = document.getElementById('custom-search-results');

            // Lắng nghe sự kiện nhập liệu
            searchInput.addEventListener('input', function() {
                const query = searchInput.value.trim();

                if (query.length > 1) {
                    fetch(`/search-ajax?query=${encodeURIComponent(query)}`, {
                            method: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.timkiemAjax) {
                                searchResults.innerHTML = data.timkiemAjax;
                                searchResults.style.display = 'block';
                            } else {
                                searchResults.innerHTML = '<p>No results found</p>';
                                searchResults.style.display = 'block';
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching search results:', error);
                            searchResults.innerHTML =
                                '<p>Error fetching results. Please try again later.</p>';
                            searchResults.style.display = 'block';
                        });
                } else {
                    searchResults.style.display = 'none';
                }
            });

            // Ẩn kết quả khi click ra ngoài
            document.addEventListener('click', function(e) {
                if (!searchResults.contains(e.target) && e.target !== searchInput) {
                    searchResults.style.display = 'none';
                }
            });
        });
    </script>
    <script src="{{ asset('frontend/js/toat.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}');
            @endif

            @if (session('error'))
                toastr.error('{{ session('error') }}');
            @endif

            @if (session('info'))
                toastr.info('{{ session('info') }}');
            @endif

            @if (session('warning'))
                toastr.warning('{{ session('warning') }}');
            @endif
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('{{ route('get.cart.count') }}')
                .then(response => response.json())
                .then(data => {
                    const cartCountElement = document.querySelector('.count_item_pr');
                    if (cartCountElement) {
                        cartCountElement.textContent = data.cartCount;
                    }
                })
                .catch(error => {
                    console.error('Lỗi khi lấy số lượng giỏ hàng:', error);
                });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBar = document.getElementById('open-sidebar');
            const headerNav = document.querySelector('.header-nav');

            if (menuBar && headerNav) {
                menuBar.addEventListener('click', function() {
                    headerNav.classList.toggle('current');
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBar = document.getElementById('drop-moblie');
            const headerNav = document.querySelector('.has-mega');
            const headerNav2 = document.querySelector('.fa.fa-caret-down'); // Sửa class ở đây

            if (menuBar && headerNav && headerNav2) {
                menuBar.addEventListener('click', function() {
                    headerNav.classList.toggle('current');
                    headerNav2.classList.toggle('current'); // Thêm hoặc xóa class 'current'
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const clickFilter = document.getElementById('open-filters');
            const menuFilter = document.querySelector('.menuloc');
            const asi = document.querySelector('.menuleft');

            if (clickFilter && menuFilter && asi) {
                clickFilter.addEventListener('click', function() {
                    console.log('Nút "open-filters" đã được click'); // Kiểm tra sự kiện click
                    clickFilter.classList.toggle('swap'); // Thêm hoặc xóa class 'openf'
                    menuFilter.classList.toggle('swap-sidebar'); // Thêm hoặc xóa class 'openf'
                    asi.classList.toggle('hidden-tuan-mobile'); // Thêm hoặc xóa class 'openf'
                });
            } else {
                console.log(
                'Không tìm thấy phần tử clickFilter hoặc menuFilter'); // Kiểm tra nếu phần tử không tồn tại
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const goTopButton = document.getElementById('gotop');

            if (goTopButton) { // Kiểm tra nút có tồn tại không
                // Lắng nghe sự kiện click
                goTopButton.addEventListener('click', function() {
                    console.log('Nút "Lên đầu trang" đã được nhấn');
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });

                // Hiển thị hoặc ẩn nút khi cuộn trang
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 200) {
                        goTopButton.style.display = 'block';
                    } else {
                        goTopButton.style.display = 'none';
                    }
                });
            } else {
                console.error('Không tìm thấy nút #gotop');
            }
        });
    </script>
    @yield('js')
</body>

</html>
