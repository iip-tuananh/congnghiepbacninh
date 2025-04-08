@extends('layouts.main.master')
@section('title')

@endsection
@section('description')
{{$detail->name}}
@endsection
@section('image')
@php
$img = json_decode($detail->images);
@endphp
{{url(''.$img[0])}}
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
   <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/img/banner.jpg')}}">
      <!-- Left Panel -->
      {{-- <div class="left-panel"></div> --}}
   </section>
   <!-- Project Page -->
   <section class="project-page section-padding2">
      <div class="container">
         <!-- project slider -->
         <div class="row justify-content-center">
            <div class="col-md-12">
               <div class="owl-carousel owl-theme">
                  @foreach ($img as $item)
                  <div class="portfolio-item">
                     <img class="img-fluid" src="{{$item}}" alt="">
                  </div>
                  @endforeach
               </div>
               <div class="row">
                  <div class="col-md-8 offset-md-4">
                     <div class="project-bar">
                        <div class="row justify-content-between align-items-center text-left text-lg-start">
                           <div class="col-4 col-md-4 mb-15">
                              <h5>Vị trí</h5>
                              <h6>{{$detail->location}}</h6>
                           </div>
                           <div class="col-4 col-md-4 mb-15">
                              <h5>Quy mô</h5>
                              <h6>{{$detail->scale}}</h6>
                           </div>
                           <div class="col-4 col-md-4 mb-15">
                              <h5>Ngày bàn giao</h5>
                              <h6>{{$detail->operate}}</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- project content -->
         <div class="row">
            <div class="col-md-12">
               <h2 class="section-title2">{{$detail->name}}</h2>
               {!!languageName($detail->content)!!}
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
