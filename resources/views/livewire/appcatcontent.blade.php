<div>



        <div class="container">
            <div class="row d-flex me-2 mx-2 " dir="rtl" style="margin-top: 150px">

                <h1 class=" mb-3"> قسم {{$catnames->catname}}  </h1>

                @forelse($alldata as $data)

                    <div class="col-6 col-md-3 mt-3">
                        <div class="card customcard pt-0">
                            <img src="{{asset('storage/'.$data->imgsumnail)}}"
                                 height="200"
                                 class="card-img-top" alt="{{$data->name}}">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/pageinfo/{{$data->name}}"
                                                          class="text-success stretched-link">
                                        {{ $data->name}}</a></h5>
                                <p class="card-text">
                                    {{ $data->shortdes}}
                                </p>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div>

                @empty
                    <div class="text-danger text-center col-md-12"
                         style="    font-size: 50px;
            margin-top: 10%;"> لاتوجد اي بيانات في الوقت الحالي لعرضها </div>


                @endforelse

                <div class="col-md-12 d-flex justify-content-center mt-16">
                    {{$alldata->links()}}
                </div>


            </div>

        </div>

</div>
