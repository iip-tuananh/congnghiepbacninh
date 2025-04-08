@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
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
	<!-- Services Page -->
	<section class="section-padding2">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-12">
				<h2 class="section-title2">{{($detail_service->name)}}</h2>
			 </div>
		  </div>
		  <div class="row">
			 <div class="col-md-9">
				{!!languageName($detail_service->content)!!}
			 </div>
			 <div class="col-md-3 sidebar-side">
				<aside class="sidebar blog-sidebar">
				   <div class="sidebar-widget services">
					  <div class="widget-inner">
						 <div class="sidebar-title">
							<h4>Dịch vụ liên quan</h4>
						 </div>
						 <ul>
							@foreach ($serviceLq as $item)
							@if ($item->slug != $detail_service->slug)
							<li><a href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}">{{$item->name}}</a></li>
							@endif
							@endforeach
						 </ul>
					  </div>
				   </div>
				</aside>
			 </div>
		  </div>
	   </div>
	</section>
 </div>
@endsection
