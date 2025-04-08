<div class="blog_noibat">
    <h2 class="h2_sidebar_blog" style="white !important">
       <a href="{{route('allListBlog')}}" title="Tin mới nhất">Tin mới nhất</a>
    </h2>
    <div class="blog_content">
       @foreach ($blognew as $item)
           <div class="item clearfix">
           <div class="post-thumb">
               <a class="image-blog scale_hover"
                   href="{{route('detailBlog', $item->slug)}}"
                   title="{{languageName($item->title)}}">
               <img class="img_blog"
                   src="{{$item->image}}"
                   data-src="{{$item->image}}"
                   alt="{{languageName($item->title)}}">
               </a>
               <span class="num">
                   {{ $loop->iteration }} 
               </span>
           </div>
           <div class="contentright">
               <h3><a class="line-clamp line-clamp-2 text-two-line"
                   title="{{languageName($item->title)}}"
                   href="{{route('detailBlog', $item->slug)}}" >{{languageName($item->title)}}</a>
               </h3>
               <div class="time-post">
                   {{date('d/m/Y', strtotime($item->created_at))}}
               </div>
           </div>
           </div>
       @endforeach
    </div>
 </div>