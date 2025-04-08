<footer class="main-footer dark ft-cus">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <img  class="logo-ft" src="{{ $setting->logo}}" alt="" srcset="" style="width: 200px; height: auto;" >
                       
                        <h3>{{$setting->company}}</h3>
                    </div>
                    <p style="color: white;"><i class="ti-headphone-alt"></i>&nbsp; {{$setting->phone1}}</p>
                    <p style="color: white;"><i class="ti-email"></i>&nbsp; {{$setting->email}}</p>
                    <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Địa chỉ: {{$setting->address1}}</p>
                    {{-- <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Xưởng Sản Xuất: {{$setting->address2}}</p> --}}
                    {{-- <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Vp Miền Nam: Toà nhà Paris Hoàng Kim - Quận 2 - Tp. Hồ Chí Minh</p>
                    <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Xưởng Sản Xuất: Long Khánh- Biên Hoà- Đồng Nai</p>
                    <p style="color: white;"><i class="ti-book"></i>&nbsp; GPKD: 0110578241 - Cấp Ngày: 20/12/2023</p> --}}
                </div>
            </div>
            <div class="col-md-6 mb-30">
                <div class="row">
                    <div class="col-md-6" style="margin-top: 100px">
                        <div class="item fotcont">
                            <div class="fothead">
                                <h6 style="color: white;">Chính Sách & Điều Khoản</h6>
                            </div>
                            @foreach ($pageContent as $item)
                                @if ($item->type == 'ho-tro-khanh-hang')
                                <p style="color: white;"> <a style="color: bisque" href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a></p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        {!! $setting->iframe_map !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</footer>
