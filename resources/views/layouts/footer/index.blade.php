<footer class="footer">
	
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 d-none d-xl-block">
					 CHÍNH SÁCH:
				</div>
				<div class="col-xl-10 col-12">
					 <div class="section_chinhsach">
	<div class="container">



		<div class="chinhsach-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab;">
			<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

				<a href="javascript:0" class="swiper-slide swiper-slide-active" title="GIAO HÀNG MIỄN PHÍ" style="width: 246px; margin-right: 30px;">
                    <i class='bx bx-timer bx-tada' style='color:#ff4900; font-size:40px' ></i>					<div class="text">
						<span class="title">GIAO HÀNG NHANH</span>
						<span class="des">Nội thành Hà Nội</span>
					</div>
				</a>

				<a href="javascript:0" class="swiper-slide swiper-slide-next" title="CAM KẾT" style="width: 246px; margin-right: 30px;">
                    <i class='bx bxs-calendar-check' style='color:#ff4900 ;font-size:40px' ></i>					<div class="text">
						<span class="title">CAM KẾT</span>
						<span class="des">Hoàn toàn chính hãng</span>
					</div>
				</a>

				<a href="javascript:0" class="swiper-slide" title="Gọi {{$setting->phone1}}" style="width: 246px; margin-right: 30px;">
                    <i class='bx bxs-phone-call bx-tada' style='color:#ff4900;font-size:40px' ></i>					<div class="text">
						<span class="title">Gọi {{$setting->phone1}}</span>
						<span class="des">Để hỗ trợ ngay</span>
					</div>
				</a>

				<a href="javascript:0" class="swiper-slide" title="ĐỔI TRẢ" style="width: 246px; margin-right: 30px;">
                    <i class='bx bx-sync bx-tada bx-flip-horizontal' style='color:#ff4900;font-size:40px' ></i>					<div class="text">
						<span class="title">ĐỔI TRẢ</span>
						<span class="des">Dễ dàng đổi trả</span>
					</div>
				</a>
			</div>
			
		</div>

	</div>
</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mid-footer">
		<div class="container">
			<div class="row">
			

				<div class="col-12 col-md-12 col-lg-3 link-list col-footer ">

					<a href="{{route('home')}}" class="logo-ft" title="Logo">	
						<img style="    max-height: 100px;
    width: auto;" width="995" height="220" class="lazyload loaded" src="{{$setting->logo}}" data-src="{{$setting->logo}}" alt="Dola Tool" data-was-processed="true">
					</a>
					{{-- <div class="content-ft">
						{{$setting->description}}
					</div> --}}
					<div class="group-address">
						<ul>
							<li>
								<i class='bx bx-map bx-flashing' style='color:#ff4900;font-size:25px' ></i>
								<span>
									
									{{$setting->address1}}
									
								</span></li>
							<li>
								<i class='bx bxs-phone-call bx-tada' style='color:#ff4900;font-size:25px' ></i>	
								<a title="{{$setting->phone1}}}" href="tel:{{$setting->phone1}}}">{{$setting->phone1}}</a>
							</li>
							<li>
								<i class='bx bx-envelope bx-fade-right' style='color:#ff4900;font-size:25px' ></i>
								<a title="{{$setting->email}}" href="mailto:{{$setting->email}}">{{$setting->email}}</a>
							</li>
						</ul>
					</div>	

				</div>
				<div class="col-12 col-md-6 col-lg-2 link-list col-footer footer-click">
					<h4 class="title-menu title-menu2">
						Chính sách
						<i class="open_mnu down_icon"></i>
					</h4>
					<ul class="list-menu hidden-mobile">
						
						
                        @foreach ($pageContent as $item)
                        @if ($item->type == 'ho-tro-khanh-hang')
                        <li>
                            <a href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                        </li>
                        @endif
                    
                    @endforeach
						
					</ul>
				</div>
				<div class="col-12 col-md-6 col-lg-2 link-list col-footer footer-click">
					<h4 class="title-menu title-menu2">
						Dịch Vụ
						<i class="open_mnu down_icon"></i>
					</h4>
					<ul class="list-menu hidden-mobile">
						@foreach ($servicehome as $item)
                            
						<li><a href="{{route('serviceList',['slug'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></li>
                        @endforeach
						
						
						
					</ul>
				</div>
				<div class="col-12 col-md-6 col-lg-2 link-list col-footer footer-click">
					<h4 class="title-menu title-menu2">
						Danh mục nổi bật
						<i class="open_mnu down_icon"></i>
					</h4>
					<ul class="list-menu hidden-mobile">
						@foreach ($categoryhome as $item)
                            
						<li><a href="/may-khoan" title="{{languageName($item->name)}}">{{languageName($item->name)}}</a></li>
                        @endforeach
						
						
						
					</ul>
				</div>
				<div class="col-12 col-md-6 col-lg-3"> 
					<h4 class="title-menu">
						Liên hệ
					</h4>
					<ul class="call-footer">
						
						<li>
							<span class="title">MUA ONLINE (08:30 - 20:30)</span>
							<a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
							<span class="content">Tất cả các ngày trong tuần (Trừ tết Âm Lịch)</span>
						</li>
						
						
						<li>
							<span class="title">GÓP Ý &amp; KHIẾU NẠI (08:30 - 20:30)</span>
							<a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
							<span class="content">Tất cả các ngày trong tuần (Trừ tết Âm Lịch)</span>
						</li>
						
					</ul>
					<h4 class="title-menu">
						Liên kết sàn
					</h4>
					<ul class="social">
						<li><a href="#" title="Shopee"><img width="32" height="32" title="Shopee" class="lazyload loaded" src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/shopee.png?1737361902764" data-src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/shopee.png?1737361902764" data-was-processed="true"></a></li>
						<li><a href="#" title="Lazada"><img width="32" height="32" title="Lazada" class="lazyload loaded" src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/lazada.png?1737361902764" data-src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/lazada.png?1737361902764" data-was-processed="true"></a></li>
						<li><a href="#" title="Tiki"><img width="32" height="32" title="Tiki" class="lazyload loaded" src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/tiki.png?1737361902764" data-src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/tiki.png?1737361902764" data-was-processed="true"></a></li>
						<li><a href="#" title="Sendo"><img width="32" height="32" title="Sendo" class="lazyload loaded" src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/sendo.png?1737361902764" data-src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/sendo.png?1737361902764" data-was-processed="true"></a></li>

					</ul>


				</div>
			</div>
		</div>
	</div>
	
</footer>