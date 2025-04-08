@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
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
   <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/img/banner.jpg')}}">
      <!-- Left Panel -->
      {{-- <div class="left-panel"></div> --}}
   </section>
   <!-- About -->
   <section class="about section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
               <h2 class="section-title">{{$pagecontentdetail->title}}</h2>
               {!!$pagecontentdetail->content!!}
            </div>
         </div>
      </div>
   </section>
</div>

@endsection
