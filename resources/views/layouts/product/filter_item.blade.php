@if (count($product) == 0)
<div class="col-12">
    <p class="text-center">Không có sản phẩm phù hợp.</p>
</div>
@else
@foreach ($product as $pro)
<div class="col-6 col-md-4 col-xl-3 col-fix">
    <div class="item_product_main">
        @include('layouts.product.item', ['pro' => $pro])
    </div>
</div>
@endforeach
@endif