@if (count($data) > 0)
<div class="search-results-container">
        @foreach ($data as $item)
            @php
                $img = json_decode($item->images);
            @endphp
            <li class="search-result-item">
                <a href="{{ route('detailProduct', [
                    'cate' => $item->cate_slug,
                    'type' => $item->type_slug ? $item->type_slug : 'loai',
                    'id' => $item->slug
                ]) }}" class="search-result-link">
                    <img src="{{$img[0] }}" alt="{{ $item->name }}" class="search-result-image">
                    <div class="search-result-info">
                        <h4 class="search-result-name">{{ $item->name }}</h4>
                        <p class="search-result-price">
                            <span class="old-price">{{ number_format($item->discount, 0, ',', '.') }}đ</span>
                            @if ($item->discount)
                            <span class="current-price">{{ number_format($item->price, 0, ',', '.') }}đ</span>
                            @endif
                        </p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@else
<a href="javascript:;" class="btn border-0 rounded-0 w-100 my-0 all-result d-block mb-2 font-weight-bold">Không thấy kết quả phù hợp</a>
@endif
<style>
    .search-results-container {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    max-width: 400px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.search-tabs {
    display: flex;
    margin-bottom: 10px;
}

.tab-button {
    flex: 1;
    padding: 10px;
    border: none;
    background: #f5f5f5;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    text-align: center;
    transition: background 0.3s ease;
}

.tab-button.active {
    background: #ffb400;
    color: #fff;
}

.tab-button:hover {
    background: #ffb400;
    color: #fff;
}

.search-results-count {
    font-size: 14px;
    color: #333;
    margin-bottom: 10px;
}

.search-results-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.search-result-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.search-result-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: inherit;
    width: 100%;
}

.search-result-image {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 10px;
}

.search-result-info {
    flex: 1;
}

.search-result-name {
    font-size: 14px;
    font-weight: bold;
    margin: 0 0 5px;
    color: #333;
}

.search-result-price {
    font-size: 14px;
    color: #ff5722;
}

.current-price {
    font-weight: bold;
}

.old-price {
    text-decoration: line-through;
    color: #999;
    margin-left: 10px;
}
</style>