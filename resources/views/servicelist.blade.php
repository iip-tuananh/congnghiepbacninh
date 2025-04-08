@extends('layouts.main.master')
@section('title')
{{$cateService->name}}
@endsection
@section('description')
{{$cateService->description}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="content-wrapper">
   <!-- Lines -->
   <section class="content-lines-wrapper">
      <div class="content-lines-inner">
         <div class="content-lines"></div>
      </div>
   </section>
   <!-- Header Banner -->
   <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/img/banner.jpg')}}" style="background-image: url(&quot;{{url('frontend/img/banner.jpg')}}&quot;);">
      <!-- Left Panel -->
      {{-- <div class="left-panel"></div> --}}
   </section>
   <!-- Services 3 -->
   <section class="services section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <h2 class="section-title">{{$cateService->name}}</h2>
            </div>
         </div>
         <div class="row">
            @if (count($list) > 0)
            @foreach ($list as $item)
            <div class="col-md-4">
               <div class="services2 mb-60">
                  <div class="services2-img"><img src="{{$item->image}}" alt="" class="w-100"></div>
                  <div class="services2-content">
                      <div class="icon"><img src="{{url('frontend/img/icon-2.png')}}" alt=""></div>
                      <h3 class="services2-title">{{$item->name}}</h3>
                      <p class="services2-text line_3">{{languageName($item->description)}}</p>
                      <div class="butn-dark mt-20"> <a href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}"><span>Chi Tiết</span></a> </div>
                  </div>
                  <div class="title-box">
                      <h3 class="mb-0">{{$item->name}}</h3>
                  </div>
              </div>
            </div>
            @endforeach
            {{$list->links()}}
            @else
            <h3>Nội Dung Đang Cập Nhật</h3>
            @endif
         </div>
      </div>
   </section>
</div>
@endsection
