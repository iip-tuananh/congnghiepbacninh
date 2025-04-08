@extends('layouts.main.master')
@section('title')
{{$title_page}}
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
   <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/img/banner.jpg')}}">
      <!-- Left Panel -->
      {{-- <div class="left-panel"></div> --}}
   </section>
   <!-- Blog  -->
   <section class="bauen-blog section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h2 class="section-title">{{$title_page}} </h2>
            </div>
         </div>
         <div class="row">
            @if (count($blog) > 0)
            @foreach ($blog as $item)
            <div class="col-md-6">
               <div class="item">
                  <div class="position-re o-hidden"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}"  class="lazy" alt=""> </div>
                  <div class="con">
                     <span class="category">
                     <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{date_format($item->created_at,'d/m/Y')}} </a>
                     </span>
                     <h5><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h5>
                  </div>
               </div>
            </div>
            @endforeach
            @else
            <h3>Nội dung đang cập nhật</h3>
            @endif
         </div>
         <div class="row">
            <div class="col-md-12 text-center">
               <!-- Pagination -->
               {{$blog->links()}}
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
