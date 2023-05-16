<div>

@section('title')
جميع التطبيقات 

@stop

<div class="container">
    <div class="mx-2 row d-flex me-2" dir="rtl" style="margin-top: 110px">

        <h2 class="mb-2 text-center ">حمل واستمتع باحدث التطبيقات   </h2>

        @forelse($alldata as $data)

            <div class="mt-3 col-6 col-md-3">
                <div class="pt-0 card customcard" style="    overflow-y: scroll;">
                    <img src="{{asset('storage/'.$data->imgsumnail)}}"
                    height="170"
                         class="card-img-top" alt="{{$data->name}}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/pageinfo/{{$data->name}}"
                             class="text-center text-success stretched-link">
                                {{ $data->name}}</a></h5>
                        <!-- <p class="card-text">
                            {{ $data->shortdes}}
                        </p> -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div>

        @empty
            <div class="text-center text-danger col-md-12"
                 style="    font-size: 50px;
    margin-top: 10%;"> لاتوجد اي بيانات في الوقت الحالي لعرضها </div>


        @endforelse

        <div class="mt-16 col-md-12 d-flex justify-content-center">
            {{$alldata->links()}}
        </div>


    </div>

</div>

</div>


