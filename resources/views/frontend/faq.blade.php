@php($title="Câu hỏi thường gặp")
@extends('layout.main')
@section("custom-library")
    <link href="{{asset("css/css/faq.css")}}" rel="stylesheet" type="text/css">
    <style>
        .bg-img-faq {
            background-image: url('{{asset("img/background-faq.jpg")}}');
            background-size: cover;
            background-attachment: fixed;
        }

        .change-content-faq {
            color: white;
        }

        .change-content-faq a:hover {
            color: #e27f42;
        }

        .change-content-faq[aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
            transition: 0.35s;
        }

        .change-content-faq[aria-expanded="false"] .fa-chevron-down {
            transition: 0.35s;
        }

        .wrap > .container {
            padding: 0 !important;
        }

        @media only screen and (max-width: 280px) {
            .title-faq, .content-faq, .guide-faq, .document-faq {
                font-size: 80% !important;
                transition: 0.35s;

            }
        }

        @media only screen and (max-width: 360px) {
            .title-faq, .content-faq, .guide-faq, .document-faq {
                font-size: 90% !important;
                transition: 0.5s;

            }
        }

        @media only screen and (max-width: 760px) {
            .title-faq, .content-faq, .guide-faq, .document-faq {
                font-size: 100% !important;
                transition: 0.5s;
            }
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="container-fluid">
            <h4 class="text-dark title-faq pt-4 pb-2 mb-3 font-weight-bold"><u><i class="far fa-question-circle"></i>
                    CÂU HỎI
                    THƯỜNG GẶP:</u></h4>
        </div>
        <div class="bg-img-faq p-3 mb-2">
            <div class="container-fluid bg-title-faq p-3" id="accordion">
                @foreach($faqs as $index => $faq)
                    <div class="content-faq">
                        <div class="card card-header p-0 px-3" id="heading{{$index+1}}">
                            <a class="text-decoration-none row change-content-faq collapsed" href="#"
                               data-toggle="collapse"
                               data-target="#collapse{{$index+1}}" aria-expanded="false" aria-controls="collapse"
                               style="color: rgb(255, 102, 8);">
                                <p class="py-3 mb-0  col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 font-weight-bold">
                                    {{$index+1}}. {{$faq->question}}</p>
                                <p class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 py-3 mb-0 m-auto  font-weight-bold text-center">
                                    <i class="fas fa-chevron-down rorate"></i></p>
                            </a>
                        </div>
                        <div class="collapse" id="collapse{{$index+1}}" aria-labelledby="heading{{$index+1}}"
                             data-parent="#accordion"
                             style="">
                            <div class="card card-body border-top pl-4 p-1">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $(".change-content-faq").click(function () {
                    $(this).css("color", "#ff6608");
                });
            });
        </script>
    </div>
@endsection
