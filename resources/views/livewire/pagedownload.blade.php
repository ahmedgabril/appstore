<div class="" style="margin-top: 40px">
@section('title')

{{$data->name}}
@stop
    <div class="container">
        <div class="row">



            <div class="mt-5 mb-2 col-md-12 d-flex justify-content-center">
                <div class="col-md-3 me-2">

                    <h3 class="text-end text-success">{{$data->name}}</h3>
                    <p class="text-muted text-wrap text-end" style="font-size: 15px;
                    line-height: 30px;
                        ">{{$data->shortdes}}</p>



                </div>

                <div class="mx-2 col-md-3">
                    <img src="/storage/{{$data->imgsumnail}}"
                         style="border-radius: 7%"
                         width="180" height="180" alt="appimg">

                </div>
            </div>
        </div>


    <div class="mt-0 row">

                     <div class="mt-2 mb-1 text-center col-md-12">
                         <h2 class="text-center text-warning getready">من فضلك انتظر ثواني للانتهاء من تجهيز الروابط</h2>
                         <h2 class="text-center text-success done">تم الانتهاء يمكنك التحميل الان</h2>


                     </div>

        <div class="mt-0 mb-1 col-md-12 me-auto ms-auto d-flex justify-content-center">

            <div class="timer-container">
                <div class="timer-border"></div>
                <div class="timer-text">
                    <span id="timer">15</span>
                </div>
            </div>


        </div>

  <div class="col-md-12 me-1 ms-1 downurl" >
          @if($data->iosurl)

            <div class="mt-0 mb-5 col-md-6 me-auto ms-auto">
                <a href="{{$data->iosurl}}" class="text-center  btn btn-success btn-lg me-1 ms-1"
                   style="display: block;
                   border-radius: 15px;"
                >
                    تحميل للايفون من ابل ستور (حسب الجهاز)
                    <svg xmlns="http://www.w3.org/2000/svg"
                         style="margin-top: -7px;"
                         width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>   </a>
            </div>
        @endif
      @if($data->androidurl)
            <div class="mt-1 mb-5 col-md-6 me-auto ms-auto d-block">

                <a href="{{$data->androidurl}}" class="text-center  btn btn-success btn-lg me-1 ms-1"
                   style="display: block;
                   border-radius: 15px;"
                >
                    تحميل للاندرويد من جوجل بلاي (حسب الجهاز)
                    <svg xmlns="http://www.w3.org/2000/svg"
                         style="margin-top: -7px;"
                         width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>   </a>
            </div>
        @endif

        @if($data->apk)
            <div class="mt-5 mb-5 col-md-6 me-auto ms-auto">
                <a href="{{$data->apk}}" class="text-center  btn btn-success btn-lg me-1 ms-1"
                   style="display: block;
                   border-radius: 15px;"
                >
                    تحميل  (apk)
                    <svg xmlns="http://www.w3.org/2000/svg"
                         style="margin-top: -7px;"
                         width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>   </a>
            </div>
        @endif

  </div>



    </div>
    @push('forntcss')

        <style>

            .timer-container {
                position: relative;
                width: 300px;
                height: 300px;
            }

            .timer-border {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                border: 3px solid #033a75
                z-index: 1;
                box-sizing: border-box;
            }

            .timer-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                z-index: 2;
                color: #ffffffab;
            }

            #timer {
                font-size: 50px;
                font-weight: bold;
            }
            .downurl{
                display: none;
            }
            .done{
                display: none;
            }


        </style>
    @endpush

    @push('forntjs')


        <script>

            $(document).ready(function() {
                var timer = 15;
                $('.timer-container').show();
                $('.getready').show();
                var interval = setInterval(function() {
                    timer--;
                    if (timer >= 0) {
                        $("#timer").text(timer);
                        var percent = (timer / 15) * 100;
                        $(".timer-border").css("background-image", "linear-gradient(" + (90 + percent) + "deg, transparent 50%, #0acf97 50%), linear-gradient(90deg, #0acf97 50%, transparent 50%)");
                    }
                    else {
                        clearInterval(interval);
                     $('.downurl').show();
                     $('.timer-container').hide();
                     $('.getready').hide();
                     $('.done').show();

                    }
                }, 1000);
            });



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

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

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


    </div>

</div>
