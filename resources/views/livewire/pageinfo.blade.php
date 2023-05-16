<div class="" style="margin-top: 110px">

 @if ($getalldata)
     


@section('title')

{{$getalldata->name }}


@stop
    <div class="container">

            <div class="row ">

                <div class="col-lg-8 ms-auto">
                    <div class="card">
                        <div class="row g-0 align-items-center">

                            <div class="col-9 ">
                                <div class="card-body" dir="rtl" style="background-color: #37404a;">
                                    <h5 class="card-title text-success">{{$getalldata->name}}</h5>
                                    <p class="card-text"> {{$getalldata->shortdes}}</p>
                                </div> <!-- end card-body-->
                            </div> <!-- end col -->

                            <div class="col-3 ">
                                <img src="/storage/{{$getalldata->imgsumnail}}"
                                     style="border-radius: 7%"
                                     alt="appimg" class="card-img">
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-->
                    <a href="#" id="scroll-to-bottom" class="text-center btn btn-success btn-lg"
                       style="display: block"
                    >
                        تحميل
                        <svg xmlns="http://www.w3.org/2000/svg"
                             style="margin-top: -7px;"
                             width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                        </svg>   </a>
                </div>



                </div>

                    <div class="mt-5 col-md-10 me-auto ms-auto">

                        @if(json_decode($getalldata->screenshots,false))
                        <h3 class="mt-5 mb-5 text-center">صور لقطات الشاشه</h3>
                        <div class="container swiper mySwiper"
                             style="margin-bottom:20px"
                        >

                            <div class="swiper-wrapper">
                                @foreach(json_decode($getalldata->screenshots,false) as $index => $screen)

                                    <div class="swiper-slide"

                                         wire:key="{{$index}}">

                                        <img src="{{asset('storage/'.$screen)}}" alt="{{$getalldata->name}}"></div>
                                @endforeach

                            </div>



                            <div class="swiper-pagination"></div>
{{--                            <div class="swiper-button-next"></div>--}}
{{--                            <div class="swiper-button-prev"></div>--}}

                        </div>
                        @endif
                    </div>
        @if($getalldata->youtubeurl)

            <div class="mt-5 mb-5 col-md-10 me-auto ms-auto">
                @php

                    $pattern = "/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=))([\w-]{11})(?:.*)$/";
                  preg_match($pattern, $getalldata->youtubeurl, $matches);
                   $youtube_id = $matches[1];
                @endphp
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$youtube_id}}"
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                    gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            </div>
        @endif


        <div class="mt-5 row">

                 <div class="text-center col-md-12 me-auto ms-auto" dir="rtl">

                 @for($i=1;$i <= $getalldata->rate; $i++ )
                         <svg xmlns="http://www.w3.org/2000/svg" width="20"
                              height="20" fill="currentColor" class="bi bi-star text-success me-1" viewBox="0 0 16 16">
                             <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                         </svg>


                     @endfor

                     <span class="text-muted ms-2 me-2"> تاريخ النشر : </span>

                          {{substr($getalldata->created_at,0,10)}}





                 </div>


                    <div class="mt-3 col-md-8 me-auto ms-auto d-flex justify-content-center" dir="rtl">
                        <div class="ms-2 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-android2" viewBox="0 0 16 16">
                                <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/>
                            </svg>

                            {{$getalldata->type}} {{$getalldata->vergin}}
                        </div>


                        <div class="ms-2 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                                <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                            </svg>
                            <span>الاصدار: {{$getalldata->vergin}}</span>
                        </div>


                        <div class="ms-2 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                                <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223Z"/>
                                <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z"/>
                                <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z"/>
                                <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z"/>
                            </svg>
                            <span>{{$getalldata->size}} MB</span>
                        </div>



                    </div>


                    <div class="mt-4 col-md-8 me-auto ms-auto">
                        <div class="mt-3">
                            {!!$getalldata->fulldes!!}
                        </div>
                    </div>
                    <div>
</div>
                  
<div class="mt-5 mb-5 col-md-6 me-auto ms-auto">
    @php
        $url = request()->fullUrl();
        $pubValue = '';
        $getpub = parse_url($url, PHP_URL_QUERY);
        $pattern = '/^.*?pub=([\w\-]+)/';
        if (preg_match($pattern, $getpub, $matches)) {
            $pubValue = $matches[0];
        
        }

      
        if ($pubValue) {
            echo '<a href="/pagedownload/' . $getalldata->name.'?'.$pubValue . '" id="downloadapp" class="text-center btn btn-success btn-lg downloadapp" style="display: block; border-radius: 15px; margin-left: 15px; margin-right: 15px;">
                تحميل التطبيق
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -7px;" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            </a>'; 
        }else{

            echo '<a href="/pagedownload/' . $getalldata->name.'" id="downloadapp" class="text-center btn btn-success btn-lg downloadapp" style="display: block; border-radius: 15px; margin-left: 15px; margin-right: 15px;">
                تحميل التطبيق
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -7px;" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            </a>';     
        }
    @endphp
</div>

                </div>


                </div>

    
                @endif

</div>
@push('forntcss')

<style>







</style>
    @endpush

@push('forntjs')


        <script>



            $(document).ready(function() {


                // Show the button after the user scrolls down a bit


                // Scroll to the bottom when the button is clicked
                $('#scroll-to-bottom').click(function() {
                    $('html, body').animate({ scrollTop: $(document).height() }, 1000);
                    return false;
                });
            });
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                //
                // navigation: {
                //     nextEl: ".swiper-button-next",
                //     prevEl: ".swiper-button-prev",
                // },

                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                },
            });
        </script>
@endpush


