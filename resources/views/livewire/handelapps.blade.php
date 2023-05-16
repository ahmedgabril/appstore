
    <div class="mt-3 minpage">
        @include('livewire.appsmodel.handlmodel')
        <div class="row">
            <!-- Single Select -->
            <div class="col-md-12">

                <!-- Portlet card -->
                <div class="mb-3 text-white card mb-md-0 bg-primary">
                    <div class="card-body">
                        <div class="card-widgets">
                            {{--                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>--}}
                            <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            {{--                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>--}}
                        </div>
                        <h5 class="mb-0 card-title">

                            <button type="button" class="btn btn-success" style="background-color: #000000!important" data-bs-toggle="modal" data-bs-target="#adddata">
                                <i class="ms-2 mdi mdi-plus-circle-outline">  اضافه تطبيق</i>
                            </button>
                        </h5>

                        <div id="cardCollpase1" class="pt-3 collapse show">


                            <div class="mb-3 row g-2">
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <input type="search" class="form-control" wire:model="search"
                                               style="background-color: #1a1e24;"
                                               id="floatingInputGrid" placeholder="name@example.com" value="" />
                                        <label for="floatingInputGrid">بحث </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="orderby" id="floatingSelectGrid" aria-label="Floating label select example">
                                            <option value="desc">عرض من الاحدث الي الاقدم</option>
                                            <option value="asc">عرض من الاقدم الي الاحدث</option>
                                        </select>
                                        <label for="floatingSelectGrid">فلتره النتائج</label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class=" form-floating">
                                        <select class=" form-select" wire:model="rownumber" id="floatingSelectGrid" aria-label="Floating label select example">
                                            <option value="10">10</option>
                                            <option value="20" >20</option>
                                            <option value="30"value="10">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>




                                        </select>
                                        <label for="floatingSelectGrid"> عدد الاعمده</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <table class="table mb-0 table-striped table-centered able w-100 nowrap">

                                    <thead class="table-dark text-center">
                                    <tr>
                                        <th> Id</th>
                                        <th>اسم التطبيق</th>

                                        <th>القسم</th>
                                        <th>التصنيف</th>

                                        <th>منشئ التطبيق</th>
                                        <th>تاريخ الانشاء</th>

                                        <th class="text-center"> <i class=" dripicons-gear noti-icon" style="font-size: 20px"></i></th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @php
                                        $sum="";
                                    @endphp
                                    @forelse($apps as $index => $app)
                                        <tr class="text-center">
                                            <td class="d-none">{{ $sum = $apps->firstitem() + $index}}</td>
                                            <td>{{$apps->firstitem() + $index}}</td>
                                            <td>{{$app->name}}</td>
                                            <td><a href="addcat?search={{$app->catogeryapp->catname}}" class="text-success">{{$app->catogeryapp->catname}}</a></td>
                                            <td class="text-success">{{$app->appstype}}</td>
                                            <td><span class="text-success">{{$app->create_by}}</span></td>
                                            <td>{{substr($app->created_at,0,10)}}</td>



                                            <td class="table-action">
                                                <a href="javascript: void(0);" wire:click="editcatapp({{$app->id}})"
                                                   data-bs-toggle="modal" data-bs-target="#showdata" class="action-icon text-warning"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript: void(0);" wire:click="editcatapp({{$app->id}})"  data-bs-toggle="modal" data-bs-target="#updatedata"
                                                   class="action-icon text-success"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" wire:click="confirmdelete({{$app->id}},'{{$app->name}}')" class="action-icon text-danger"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>

                                    @empty
                                        <div class=" container text-white bg-danger" style="padding: 17px;
    text-align: center;
    font-size: 18px;
       position: absolute;
    width: 96%;">لايوجد نتائج </div>

                                    @endforelse


                                    </tbody>
                                </table>
                                <div class="float-start mt-3">  عرض   <span class="text-success">  {{$sum}}  </span>  من اجمالي <strong class="text-success">{{$apps->total()}} </strong> </div>

                                <div class="mt-3">{{$apps->links()}}</div>
                            </div>




                        </div>
                    </div>
                    <!-- end card-->
                </div>
            </div>



        </div>

    </div>
@push('css')


@endpush


    @push('script')
        <script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>

{{--<script src="{{asset('assets/js/ckedior.js')}}"></script>--}}




        <script>



            // document.addEventListener("DOMContentLoaded", () => {
            //
            // })

                var edetor = CKEDITOR.replace( 'editor1', {
                    on: {
                        instanceReady: function( ev ) {
                            // Output paragraphs as <p>Text</p>.
                            this.dataProcessor.writer.setRules( 'p', {
                                indent: false,
                                breakBeforeOpen: true,
                                breakAfterOpen: false,
                                breakBeforeClose: false,
                                breakAfterClose: true
                            });
                        }
                    }
                } )





                edetor.on('change',function (event){


                @this.set('fulldes',edetor.getData())

                });

                var edetor2 = CKEDITOR.replace( 'editor2', {
                    on: {
                        instanceReady: function( ev ) {
                            // Output paragraphs as <p>Text</p>.
                            this.dataProcessor.writer.setRules( 'p', {
                                indent: false,
                                breakBeforeOpen: true,
                                breakAfterOpen: false,
                                breakBeforeClose: false,
                                breakAfterClose: true
                            });
                        }
                    }
                } )





                edetor2.on('change',function (event){


                @this.set('fulldes',edetor2.getData())

                });


                window.addEventListener('updes', event => {

                    edetor2.setData(@this.fulldes);



                })









            window.addEventListener('closemodel', event => {
                $('#adddata').modal('hide');
                $('#updatedata').modal('hide');


                swal( event.detail.mesg  , {
                    icon: "success",
                    buttons: false,
                    timer: 1800,
                });


            })


            window.addEventListener('show-delete-confirm', event => {
                swal({
                    title: "هل انت متآكد?",
                    text: " البيانات التي سوف يتم حذفها لن يتم الحصول عليها مره اخري",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {

                            Livewire.emit('deleteconfirmed');
                        }

                    })

            })






            $(function(){

                // Livewire.hook('message.processed', (message, component) => {
                //
                //     $('.catdata').select2({
                //         dropdownParent: $('#adddata'),
                //         placeholder: "Select a state",
                //         // allowClear: true,
                //
                //     });
                //     $('.updatedata').select2({
                //         dropdownParent: $('#updatedata'),
                //         placeholder: "Select a state",
                //         // allowClear: true,
                //
                //     });
                //
                //
                //
                // })

                //
                // $('.catdata').select2({
                //     dropdownParent: $('#adddata'),
                //     placeholder: "Select a state",
                //     // allowClear: true,
                //
                // });
                //
                //
                // $('.updatedata').select2({
                //     dropdownParent: $('#updatedata'),
                //     placeholder: "Select a catogery",
                //     // allowClear: true,
                //
                // });

                $('#adddata').on('hidden.bs.modal',function (){
                    Livewire.emit('reseterrorpage');



                });
                $('#updatedata').on('hidden.bs.modal',function (){
                    Livewire.emit('reseterrorpage');
                    edetor2.setData('');


                });
                $('#adddata').on('hidden.bs.modal',function (){
                    Livewire.emit('reseterrorpage');
                    edetor.setData('');


                });



            });

            window.addEventListener('deletesuccess',event=> {

                swal("تمت عمليه الحذف بنجاح ", {
                    icon: "success",
                    buttons: false,
                    timer: 1600,
                });
            });



            $('.catdata').on('change',function (){
            @this.catogeryapp_id = $(this).val();


            });


            $('.updatedata').on('change',function (){
            @this.catogeryapp_id = $(this).val();


            });
        </script>



    @endpush



