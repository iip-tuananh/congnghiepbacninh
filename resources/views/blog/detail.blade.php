@extends('layouts.main.master')
@section('title')
{{ languageName($blog_detail->title) }}
@endsection
@section('description')
{{ languageName($blog_detail->description) }}
@endsection
@section('image')
{{ url('' . $blog_detail->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
   <div class="container">
      <ul class="breadcrumb">
         <li class="home">
            <a href="{{route('home')}}"><span>Trang chủ</span></a>
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                  class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor"
                     d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                     class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li>
            <a href="{{route('allListBlog')}}"><span>Tin tức</span></a>
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor"
                     d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                     class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li><strong><span>{{languageName($blog_detail->title)}}</span></strong>
         </li>
      </ul>
   </div>
</section>
<section class="blogpage">
   <div class="container layout-article" itemscope itemtype="https://schema.org/Article">
      <div class="bg_blog">
         
      
         <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
               <img class="d-none"
                  src="{{$setting->logo}}"
                  alt="{{$setting->company}}" />
              
            </div>
            <meta itemprop="name" content="{{$setting->company}}">
         </div>
         <article class="article-main">
            <div class="row">
               <div class="right-content col-lg-9 col-12 ">
                  <div class="article-details clearfix">
                     <h1 class="article-title">{{languageName($blog_detail->title)}}
                     </h1>
                     <div class="posts">
                        <div class="time-post f">
                           <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                              class="svg-inline--fa fa-clock fa-w-16">
                              <path fill="currentColor"
                                 d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                 class=""></path>
                           </svg>
                           {{date(($blog_detail->created_at))}}
                        </div>
                        <div class="time-post">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                              class="svg-inline--fa fa-user fa-w-14">
                              <path fill="currentColor"
                                 d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                 class=""></path>
                           </svg>
                           <span>{{$blog_detail->author}}</span>
                        </div>
                     </div>
                     <div class="rte article-content">
                      {!!languageName($blog_detail->content)!!}
                     </div>
                  </div>
                  <div class=" blog-lienquan">
                     <h3 class="title-index">
                        <a class="title-name" id="tinlq" href="#tinlq">TIN <b>LIÊN QUAN</b>
                        </a>
                     </h3>
                     <div class="list-blogs related-blogs">
                        <div class="blog-detail-swiper swiper-container">
                           <div class="swiper-wrapper">
                            @foreach ($bloglq as $lq)
                            {{-- @php
                                dd($lq->image);
                            @endphp --}}
                                <div class="swiper-slide">
                                    <div class="item-blog">
                                        <div class="block-thumb">
                                            <a class="thumb"
                                                href="{{route('detailBlog', $lq->slug)}}"
                                                title="{{languageName($lq->title)}}">
                                            <img 
                                                src="{{url('' . $lq->image)}}"
                                                data-src="{{$lq->image}}"
                                                alt="{{languageName($lq->title)}}">
                                            </a>
                                            <div class="time-post">
                                                {{ $lq->created_at->format('N') }}
                                                <span>T{{$lq->created_at->format('m')}}</span>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <h3>
                                                <a class="line-clamp line-clamp-2"
                                                href="{{route('detailBlog', $lq->slug)}}"
                                                title="{{languageName($lq->title)}}">{{languageName($lq->title)}}</a>
                                            </h3>
                                            <p class="justify line-clamp line-clamp-3">
                                                {!!languageName($lq->description)!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                var swiperdanhmuc2 = new Swiper('.blog-detail-swiper', {
                           slidesPerView: 3,
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
                               nextEl: '.blog-detail-swiper .swiper-button-next',
                               prevEl: '.blog-detail-swiper .swiper-button-prev',
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
               
               
                   
           </script>
               <div class="blog_left_base col-lg-3 col-12">
                  @include('layouts.menu.danhmuc')
                  {{-- <script>
                     $(".open_mnu").click(function() {
                         $(this).toggleClass('cls_mn').next().slideToggle();
                     });
                  </script> --}}
                  @include('layouts.menu.tintuc')
               </div>
            </div>
         </article>
      </div>
   </div>
</section>
@endsection