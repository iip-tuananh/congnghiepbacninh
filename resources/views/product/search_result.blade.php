@extends('layouts.main.master')
@section('title')
    Kết quả tìm kiếm
@endsection
@section('description')
    @php

    @endphp
    Đã tìm thấy {{ $soluong }} kết quả phù hợp cho từ khóa "{!! $keyword !!}"
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
    <style>
        .search_0 {
            color: var(--mainColor);
            font-size: 1.2rem
        }

        .b_search svg {
            max-height: 120px
        }

        .b_search svg .m_color {
            fill: var(--mainColor)
        }

        .t-search {
            font-size: 1rem
        }
    </style>
@endsection
@section('content')
    <div class="contentWarp ">

        <section class="search-layout">
            <div class="container rounded m_white_bg_module" style="min-height: 350px">
                <div class="category-products position-relative mt-4 mb-4 pt-3 pb-2 b_search">
                    <br>

                    <h2 class="h3 mb-3 t-search">Có {{ $soluong }} kết quả tìm kiếm với từ khóa "<b
                            class="keyy">{{ $keyword }}</b>"</h2>
                    <br>
                    <div class="row slider-items">

                        @foreach ($product as $item)
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-6 product-grid-item-lm mb-3 itemtan">
                                @include('layouts.product.item', ['pro' => $item])
                            </div>
                        @endforeach
                        <div class="pagination text-center mt-3 mb-3 pagi-tuan">
                            {{ $product->links() }}
                        </div>
                    </div>
        </section>
    </div>
    <style>
        .keyy {
            color: red;
            font-weight: bold;
            font-size: 1.5rem;
            margin-right: 5px;
            margin-left: 5px;
            cursor: pointer;
            transition: color 0.3s ease;
        }
		.pagi-tuan{
			width: 100%;
		}
    </style>
@endsection
