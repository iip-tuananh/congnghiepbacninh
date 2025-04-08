@extends('layouts.main.master')
@section('title')
Dự án tiêu biểu
@endsection
@section('description')
Dự án tiêu biểu
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
@endsection
@section('css')
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
   <section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="{{url('frontend/img/banner.jpg')}}" data-overlay-darkgray="5" style="background-image: url(&quot;{{url('frontend/img/banner.jpg')}}&quot;);">
      <!-- Left Panel -->
      {{-- <div class="left-panel"></div> --}}
   </section>
   <!-- Projects -->
   <section class="projects section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <h2 class="section-title">Dự Án <span>Nổi Bật</span></h2>
            </div>
         </div>
         <div class="row">
            @foreach ($duan as $item)
            @php
                $img = json_decode($item->images);
            @endphp
            <div class="col-md-6 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <div class="item">
                  <div class="position-re o-hidden"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}" class="lazy" alt=""> </div>
                  <div class="con">
                     <h6><a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}">PROJECT</a></h6>
                     <h5><a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></h5>
                     <div class="line"></div>
                     <a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}"><i class="ti-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            @endforeach
            {{$duan->links()}}
         </div>
      </div>
   </section>
</div>
@endsection

