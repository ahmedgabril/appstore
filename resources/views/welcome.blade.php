@extends('layouts.forntend')

@section('title')

me-apk-home
@endsection()

@push('forntcss')


@endpush

@section('maincontent')
@include('layouts/frontend-hearo')
<div class="container">
    <h2 class="mb-5 text-center">احدث التطبيقات</h2>
    <div class="swiper mySwiper mynewapss">
        <div class="swiper-wrapper">
            @foreach($latestapps as $data)
                <div class="swiper-slide ">

                    <div class="card customcard">
                        <img src="{{asset('storage/'.$data->imgsumnail)}}"
                             height="150"
                             class="card-img-top" alt="{{$data->name}}">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/pageinfo/{{$data->name}}"
                                                      class="text-success stretched-link">
                                    {{ $data->name}}</a></h5>
                            <!-- <p class="card-text">
                                {{ $data->shortdes}}
                            </p> -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div>

            @endforeach

        </div>
{{--        <div class="swiper-pagination"></div>--}}
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</div>

<div class="container">
    <h2 class="mt-5 mb-5 text-center">احدث الالعاب</h2>
    <div class="mb-5 swiper mySwiper" >
        <div class="swiper-wrapper">
            @foreach($latestgames as $data)
                <div class="swiper-slide ">

                <div class="card customcard">
                        <img src="{{asset('storage/'.$data->imgsumnail)}}"
                             height="150"
                             class="card-img-top" alt="{{$data->name}}">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/pageinfo/{{$data->name}}"
                                                      class="text-success stretched-link">
                                    {{ $data->name}}</a></h5>
                            <!-- <p class="card-text">
                                {{ $data->shortdes}}
                            </p> -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div>

            @endforeach

        </div>
{{--        <div class="swiper-pagination"></div>--}}
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</div>

@stop




@push('forntjs')
<script src="{{asset('assets/js/swaperres.js')}}"></script>

    <script>

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            autoplay: false,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {

                340: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
    </script>

@endpush
