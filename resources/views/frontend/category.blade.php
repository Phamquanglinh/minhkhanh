@php
    $title = $thisCat->name;
@endphp
@extends("layout.main")
@section("custom-library")
    <style>
        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("https://phamhuynhtrongnhan.com/wp-content/uploads/2020/04/Camera-analog-l%C3%A0-g%C3%AC-Nh%E1%BB%AFng-%C6%B0u-v%C3%A0-nh%C6%B0%E1%BB%A3c-%C4%91i%E1%BB%83m-c%E1%BB%A7a-d%C3%B2ng-camera-quan-s%C3%A1t-n%C3%A0y.jpg");
            background-size: auto 300px;
            background-repeat: no-repeat;
        }

        .hover-zoom:hover {
            transition: 0.6s;
            transform: rotate(25deg) scale(1.2);
            border-radius: 50%;
            opacity: 0.5;
        }
    </style>
@endsection
@section("content")
    <div class="banner pb-5">
        <div class="h2 py-5 mb-4 text-center text-white text-uppercase">{{$thisCat->name}}</div>
        <div class="row m-0 px-5">
            <div class="col-md-3 d-md-block ">
                <div class="filter">
                    <form action="#" method="post" class="bg-light pt-5 rounded p-2">
                        @csrf
                        <div class="h4">Tìm theo tên</div>
                        <hr>

                        <div class="form-group">
                            <input class="form-control rounded-0" name="name"
                                   value="{{isset($_REQUEST['name'])?$_REQUEST['name']:null}}"
                                   placeholder="Tìm theo tên sản phẩm ....">
                        </div>
                        <hr>
                        {{--                        <div class="sliderId pb-3 pt-2 col-12 px-0">--}}
                        {{--                            <input value="0" min="0" max="100" step=".1" type="range" class="fromRangeInput">--}}
                        {{--                            <input value="100" min="0" max="100" step=".1" type="range" class="toRangeInput">--}}
                        {{--                        </div>--}}
                        <div class="h4">Sắp xếp theo giá</div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" id="price-ASC" value="price-ASC"
                                   checked>
                            <label class="form-check-label" for="price-ASC">
                                Giá tăng dần
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" id="price-DESC" value="price-DESC">
                            <label class="form-check-label" for="price-DESC">
                                Giá giảm dần
                            </label>
                        </div>
                        <div class="h4">Sắp xếp theo ngày cập nhật</div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" id="updated_at-ASC"
                                   value="updated_at-ASC">
                            <label class="form-check-label" for="updated_at-ASC">
                                Cũ nhất
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" id="updated_at-DESC"
                                   value="updated_at-DESC">
                            <label class="form-check-label" for="updated_at-DESC">
                                Mới nhất
                            </label>
                        </div>
                        <script>
                            @if(isset($_REQUEST['sort']))
                            $(window).ready(function () {
                                $("#{{$_REQUEST['sort']}}").prop("checked", true);
                            });
                            @endif
                        </script>
                        <button class="btn mt-3 btn-danger rounded-0" type="submit">Lọc</button>
                    </form>
                </div>
                <div>
                    @for($i=0;$i<2;$i++)
                        <div class=" text-left w-100 btn btn-danger rounded-0" type="button" data-toggle="collapse"
                             data-target="#{{$i==0?"camera":"elevator"}}"
                             aria-expanded="true" aria-controls="camera">
                            <i class="fas fa-hand-point-right"></i> {{$i==0?"Camera":"Thang máy"}}
                        </div>
                        <div class="collapse bg-white" id="{{$i==0?"camera":"elevator"}}">
                            @php
                                $trades = \App\Models\Trade::get();
                            @endphp
                            @foreach($trades as $trade)
                                @php
                                    $listCategory = $trade->categories()->where("type",'=',$i)->get();
                                @endphp
                                @if($listCategory->count() >0 )
                                    <div class="bg-secondary text-white border-bottom py-2 w-100 btn text-left rounded-0">Nhà phân phối {{$trade->name}}</div>
                                @endif
                                @foreach($listCategory as $cat)
                                    <a href="{{route("category",$cat->slug)}}">
                                        <div class="bg-white border-bottom py-2 w-100 btn text-left rounded-0">
                                            {{$cat->name}}
                                        </div>
                                    </a>
                                @endforeach
                            @endforeach
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-9 col-12 bg-light rounded">
                @if($products->count() != 0 )
                    <div class="row text-left">
                        @foreach($products as $index => $product)
                            <div class="col-md-3 p-3 col-sm-6 col-12">
                                <div class="card ">
                                    <a href="{{route('products',$product->slug)}}" class="text-dark link-style-none ">
                                        <div class="overflow-hidden ">
                                            <div class="card-body hover-zoom">
                                                @php
                                                    $tmp = str_replace(['[',']','"'],"",$product->avatar);
                                                    $product->avatars = explode(",",$tmp);
                                                @endphp
                                                <img
                                                    src="{{env('APP_URL')."/".$product->avatars[0]}}"
                                                    class="w-100">
                                            </div>
                                        </div>
                                        <div class="card-title px-3">
                                            <div class="font-weight-bold overflow-hidden">{{$product->name}}</div>
                                            <div class="text-danger h4">{{number_format($product->price)}} đ</div>
                                            <div class="text-secondary">
                                                <del>{{number_format($product->origin_price)}} đ</del>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="p-2">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                @for($index=1;$index<($products->count()/$step)+1;$index++)
                                    <li class="page-item"><a class="page-link"
                                                             href="{{route("category",[$thisCat->slug,$index])}}">{{$index}}</a>
                                    </li>
                                @endfor
                            </ul>
                        </nav>
                    </div>
                @else

                @endif
            </div>
        </div>
    </div>
@endsection
