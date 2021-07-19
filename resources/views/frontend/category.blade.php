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
    </style>
@endsection
@section("content")
    <div class="banner pb-5">
        <div class="h2 py-5 mb-4 text-center text-white text-uppercase">{{$thisCat->name}}</div>
        <div class="row m-0 px-5">
            <div class="col-md-3 d-md-block d-none">
                <div>
                    <div class=" text-left w-100 btn btn-danger rounded-0" type="button" data-toggle="collapse"
                         data-target="#camera"
                         aria-expanded="true" aria-controls="camera">
                        Camera
                    </div>
                    <div class="collapse bg-white" id="camera">
                        @php
                            $listCategory = \App\Models\Category::where('type','=',0)->get();
                        @endphp
                        @foreach($listCategory as $cat)
                            <a href="{{route("category",$cat->slug)}}">
                                <div class="bg-white border-bottom py-2 w-100 btn text-left rounded-0">
                                    {{$cat->name}}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class=" text-left w-100 btn btn-danger rounded-0" type="button" data-toggle="collapse"
                         data-target="#elevator"
                         aria-expanded="true" aria-controls="camera">
                        Thang máy
                    </div>
                    <div class="collapse bg-white" id="elevator">
                        @php
                            $listCategory = \App\Models\Category::where('type','=',0)->get();
                        @endphp
                        @foreach($listCategory as $cat)
                            <a href="{{route("category",$cat->slug)}}">
                                <div class="bg-white border-bottom py-2  w-100 btn text-left rounded-0">
                                    {{$cat->name}}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-12 bg-light rounded">
                @if($products->count() != 0 )
                    <div class="row text-left">
                        @foreach($products as $index => $product)
                            @if($index >= ($page-1)*$step && $index < ($page*$step))
                                <div class="col-md-3 p-3 col-sm-6 col-12">
                                    <a href="{{route('products',$product->slug)}}" class="text-dark">
                                        <div class="card">
                                            <div class="card-body">
                                                @php
                                                    $tmp = str_replace(['[',']','"'],"",$product->avatar);
                                                    $product->avatars = explode(",",$tmp);
                                                @endphp
                                                <img
                                                    src="{{env('APP_URL')."/".$product->avatars[0]}}"
                                                    class="w-100">
                                            </div>
                                            <div class="card-title px-3">
                                                <div class="font-weight-bold overflow-hidden">{{$product->name}}</div>
                                                <div class="text-danger h4">{{number_format($product->price)}} đ</div>
                                                <div class="text-mute">{{number_format($product->origin_price)}} đ</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
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
