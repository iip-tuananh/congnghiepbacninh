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
<link rel="preload" as="style"  href="{{asset('frontend/css/mew_blog.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/mew_blog.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/mew_style_index.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/mew_style_index.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<section class="bread-crumb">
   <div class="container">
      <ul class="breadcrumb" >
         <li class="home">
            <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li><strong ><span>Tin tức</span></strong></li>
      </ul>
   </div>
</section>
<div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
   <meta itemprop="name" content="Tin tức">
   <meta itemprop="description" content="">
   <div class="container">
      <div class="row">
         <div class="right-content col-lg-9 col-12">
            <h1 class="title-page"><span>Tin tức</span></h1>
            <div class="list-blogs">
               <div class="row row-fix">
                  @foreach ($blog as $item)
                  <div class="col-lg-4 col-md-6 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                           <img src="{{$item['image']}}"  
                              data-src="{{$item['image']}}"  alt="{{languageName($item->title)}}">
                           </a>
                           <div class="time-post">
                              {{$item->created_at->format('N')}}
                              <span>T{{$item->created_at->format('m')}}</span>
                           </div>
                        </div>
                        <div class="block-content">
                           <h3>
                              <a class="line-clamp line-clamp-cus " href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                           </h3>
                           <p class="justify line-clamp line-clamp-3">{{languageName($item->description)}} </p>
                           </p>
                        </div>
                     </div>
                  </div>
                
                     
                  @endforeach
               </div>
               <div class="custom-pagination">
                  @if ($blog->onFirstPage())
                      <span class="disabled">« Trước</span>
                  @else
                      <a href="{{ $blog->previousPageUrl() }}">« Trước</a>
                  @endif
              
                  @foreach ($blog->getUrlRange(1, $blog->lastPage()) as $page => $url)
                      @if ($page == $blog->currentPage())
                          <span class="current">{{ $page }}</span>
                      @else
                          <a href="{{ $url }}">{{ $page }}</a>
                      @endif
                  @endforeach
              
                  @if ($blog->hasMorePages())
                      <a href="{{ $blog->nextPageUrl() }}">Tiếp »</a>
                  @else
                      <span class="disabled">Tiếp »</span>
                  @endif
              </div>
              <style>
               .custom-pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
}

.custom-pagination a {
    padding: 5px 10px;
    border: 1px solid #ddd;
    text-decoration: none;
    color: #033972;
    border-radius: 5px;
}

.custom-pagination a:hover {
    background-color: #033972;
    color: #fff;
}

.custom-pagination .current {
    padding: 5px 10px;
    border: 1px solid #033972;
    background-color: #033972;
    color: #fff;
    border-radius: 5px;
}

.custom-pagination .disabled {
    padding: 5px 10px;
    border: 1px solid #ddd;
    color: #ccc;
    border-radius: 5px;
}
              </style>
            </div>
         </div>
         <div class="blog_left_base col-lg-3 col-12">
           @include('layouts.menu.danhmuc')
           @include('layouts.menu.tintuc')
         </div>
      </div>
   </div>
</div>
<div class="ab-module-article-mostview"></div>

@endsection