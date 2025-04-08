@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    @yield('css')
    <section class="section_slider" >
		<div class="home_slide swiper-container position-relative">
			<div class="swiper-wrapper">
			 @foreach ($banner as $item)
			 <div class="swiper-slide text-center">
				 <a class="d-block w-100 h-100 rounded-10 modal-open" href="{{$item->link}}" title="{{$item->title}}">
					 <img class="d-block w-100" style="width: 100%; height: 100%; object-fit: cover;"
					 src="{{$item->image}}"
					 alt="{{$item->image}}" />
				 </a>
			 </div>
			 @endforeach
			</div>
			<div class="swiper-button-prev msl_prev"></div>
			<div class="swiper-button-next msl_next"></div>
		</div>
		<script rel="dns-prefetch">
			var swiperHomeSlider = new Swiper('.home_slide', {
				spaceBetween: 10,
				navigation: {
					nextEl: '.msl_next',
					prevEl: '.msl_prev',
				},
				loop: true,
				speed: 1000,
				autoplay: {
					delay: 3000,
					disableOnInteraction: true,
				},
				breakpoints: {
					0: {
						slidesPerView: 1,
						effect: 'fade'
					},
					576: {
						slidesPerView: 1,
						effect: 'fade'
					},
					768: {
						slidesPerView: 1
					},
					992: {
						slidesPerView: 1
					},
					1200: {
						slidesPerView: 1
					}
				}
			});
		</script>
    </section>
    <section class="section_danhmuc">
        <div class="container">
            <div class="row">

                <h3 class="title-index">
                    <a class="title-name" href="{{ route('flashSale') }}" title="DANH MỤC NỔI BẬT"><span class="vienchu">SẢN PHẨM </span><b>NỔI BẬT</b>
                    </a>
                </h3>
                <div class="danhmuc-slider swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($homePro as $pro)
                            <div class="swiper-slide">
                                @include('layouts.product.item', ['pro' => $pro])
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
    </section>
    <script>
       // Dừng khi hover

        var swiperdanhmuc = new Swiper('.danhmuc-slider', {
            slidesPerView: 5,
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
                nextEl: '.danhmuc-slider .swiper-button-next',
                prevEl: '.danhmuc-slider .swiper-button-prev',
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
{{-- flash sale --}}
<section class="section_flashsale">
    <div class="container">
       <h3 class="title-index">
          <a class="title-name" href="{{route('flashSale')}}" title="DEAL CỰC HẤP DẪN">
          <b>DEAL</b> <span class="vienchu">CỰC HẤP DẪN</span>
          <style>
           .vienchu {
    font-family: 'Arial', sans-serif; /* Font chữ */
    font-weight: bold; /* Chữ đậm */
    color: #fff; /* Màu chữ trắng */
    text-shadow: 
        -1px -1px 0 #06428d, /* Viền trên trái */
        1px -1px 0 #06428d,  /* Viền trên phải */
        -1px 1px 0 #06428d,  /* Viền dưới trái */
        1px 1px 0 #06428d,   /* Viền dưới phải */
        -1px 0 0 #06428d,    /* Viền trái */
        1px 0 0 #06428d,     /* Viền phải */
        0 -1px 0 #06428d,    /* Viền trên */
        0 1px 0 #06428d;     /* Viền dưới */
    text-align: center; /* Căn giữa chữ */
}
.vienchu:hover {
    color: #f25c05;
    text-shadow: none /* Màu chữ khi hover */}
          </style>
          </a>
       </h3>
    </div>
    <div class="thumb-flasale lazyload " 
        style="background-image: url({{ url('frontend/img/deal.png') }}); ">
       <div class="container">
          <div class="count-down">
             <span class="title-timer">Thời gian có hạn</span>
             <div class="timer-view" data-countdown="countdown" data-date="2024-06-20-00-00-00">
             </div>
          </div>
          <div class="product-flash-swiper swiper-container">

             <div class="swiper-wrapper">

                @foreach ($sales as $sale)
                @if($pro->discount >= 0)
                <div class="swiper-slide">
                    @include('layouts.product.item', ['pro' => $sale])
                </div>
                @else
                Hiện tại chưa có sản phẩm nào giảm giá
                @endif
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
         var swiperdanhmuc = new Swiper('.product-flash-swiper', {
                slidesPerView: 5,
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
                    nextEl: '.product-flash-swiper .swiper-button-next',
                    prevEl: '.product-flash-swiper .swiper-button-prev',
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
 </section>




   {{-- phần theo danh mục  --}}
   @foreach ($categoryhome as $key => $item)
   @if (count($item->product) > 0)
    <section class="section_product_new">
        @if($key % 2 == 0)
        <div class="container ">
            <h3 class="title-index">
                <a class="title-name" href="#noibat" id="noibat" title="{{languageName($item->name)}} "><span class="vienchu"> {{languageName($item->name)}}</span> <b>NỔI BẬT</b>
                </a>
            </h3>
            <div class="product-block product-swiper1 swiper-container">
                <div class="swiper-wrapper">   
                    @foreach ($item->product as $pro)
                    <div class="swiper-slide">
                       @include('layouts.product.item', ['pro' => $pro])
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev">
                </div>
            </div>
        </div>
        @else
        <div class="container editnen">
            <h3 class="title-index">
                <a class="title-name" href="#noibat" id="noibat" title="{{languageName($item->name)}} "><span class="vienchu"> {{languageName($item->name)}}</span> <b>NỔI BẬT</b>
                </a>
            </h3>
            <div class="product-block product-swiper1 swiper-container">
                <div class="swiper-wrapper">   
                    @foreach ($item->product as $pro)
                    <div class="swiper-slide">
                       @include('layouts.product.item', ['pro' => $pro])
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev">
                </div>
            </div>
        </div>
        @endif
    </section>
   @endif
   @endforeach
    {{-- end phần theo danh mục --}}
<script>
     var swiperdanhmuc = new Swiper('.product-swiper1', {
                slidesPerView: 5,
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
                    nextEl: '.product-swiper1 .swiper-button-next',
                    prevEl: '.product-swiper1 .swiper-button-prev',
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






{{-- video review --}}
{{-- 
    <section class="section_3_banner">
        <div class="container">
            <h3 class="title-index">
                <a class="title-name" href="#" title="REVIEW"> VIDEO <b>REVIEW</b>
                </a>
            </h3>
            <div class="banner-slider3 swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($video as $item)
                    <div class="swiper-slide">
                        <div class="image-effect">
                            <img width="420" height="250" class="lazyload"
                                src="{{url('frontend/img/placeholder_1x1.png')}}"
                                data-src="{{$item->image}}"
                                alt="{{$item->name}}">
                        </div>
                        <div class="position-absolute w-100 h-100 video_open lazy_bg"
                                                   data-video="{{$item->link}}"
                                                   data-background="url({{url('frontend/images/play-button.png')}})">
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
    </section>
    <script>
        var swiperdanhmuc = new Swiper('.banner-slider3', {
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
                       nextEl: '.banner-slider3 .swiper-button-next',
                       prevEl: '.banner-slider3 .swiper-button-prev',
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
                           slidesPerView: 3,
                           slidesPerColumn: 2
                       },
                       1200: {
                           slidesPerView: 3,
                           slidesPerColumn: 2
                       }
                   }
               });
       
       
           
   </script> --}}



    <section class="section_blog">
        <div class="container">
            <h3 class="title-index">
                <a class="title-name" href="#tintuc" id="tintuc"title="TIN TỨC MỚI NHẤT"><span class="vienchu">TIN TỨC </span><b>MỚI NHẤT</b>
                </a>
            </h3>
            <div class="row">
                <div class="col-md-5">
                    @foreach ($hotnews as $key => $blog)
                        @if ($key == 0) {{-- Hiển thị blog đầu tiên --}}
                        <div class="item-blog-big">
                            <div class="block-thumb">
                                <a class="thumb" href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}" title="{{ languageName($blog->title) }}">
                                    <img width="400" height="240" 
                                        src="{{$blog->image}}"
                                        data-src="{{$blog->image}}" alt="{{ languageName($blog->title) }}">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}" title="{{ languageName($blog->title) }}">{{ languageName($blog->title) }}</a>
                                </h3>
                                <div class="time-post">
                                    Ngày đăng:
                                    <span>{{ $blog->created_at->format('d/m/Y') }}</span>
                                </div>
                                <p class="justify line-clamp line-clamp-3">{{ languageName($blog->description) }}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                
                <div class="col-md-7">
                    @foreach ($hotnews as $key => $blog)
                        @if ($key > 0 && $key <= 3) {{-- Hiển thị 3 blog tiếp theo --}}
                        <div class="item-blog-small">
                            <div class="block-thumb">
                                <a class="thumb" href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{ languageName($blog->title) }}">
                                    <img width="140" height="75"
                                        src="{{$blog->image}}"
                                        data-src="{{$blog->image}}" alt="{{ languageName($blog->title) }}">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{ languageName($blog->title) }}">{{ languageName($blog->title) }}</a>
                                </h3>
                                <div class="time-post">
                                    Ngày đăng:
                                    <span>{{ $blog->created_at->format('d/m/Y') }}</span>
                                </div>
                                <p class="justify line-clamp line-clamp-2">{{ languageName($blog->description) }}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
