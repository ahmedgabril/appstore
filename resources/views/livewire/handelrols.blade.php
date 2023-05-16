<div class="mt-3 minpage">
    @include('livewire.rolemodel.handelrole')
    <div class="row">

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

                        <button type="button" class="btn btn-success" style="background-color: #000000!important" data-bs-toggle="modal" data-bs-target="#addroles">
                            <i class="ms-2 mdi mdi-plus-circle-outline">  اضافه وظيفه</i>
                        </button>
                    </h5>

                    <div id="cardCollpase1" class="pt-3 collapse show">


                        <div class="mb-3 row g-2">
                            <div class="col-md-5">
                                <div class="form-floating">
                                    <input type="search" class="form-control"
                                           wire:model="search" id="floatingInputGrid"
                                           style="background-color: #091526;"
                                           placeholder="name@example.com" value="" />
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


                        <div class="row " style="overflow-x: auto">

                            <table class="table mb-0 table-striped table-centered">

                                <thead class="text-center table-dark">
                                <tr>
                                    <th> Id</th>
                                    <th>اسم الوظيفه</th>
                                    <th>تاريخ الانشاء</th>
                                    <th>منشئ الوظيفه</th>
                                    <th class="text-center"> <i class=" dripicons-gear noti-icon" style="font-size: 20px"></i></th>

                                </tr>
                                </thead>

                                <tbody>
                                @php
                                    $sum="";
                                @endphp
                                @forelse($data as $index => $role)
                                    <tr class="text-center">
                                        <td class="d-none">{{ $sum = $data->firstitem() + $index}}</td>
                                        <td>{{$data->firstitem() + $index}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{substr($role->created_at,0,10)}}</td>
                                        <td><span class="text-success">{{Auth::User()->create_by }}</span></td>

                                        <td class="table-action">
                                            <a href="javascript: void(0);" wire:click="editroles({{$role->id}})"
                                               data-bs-toggle="modal" data-bs-target="#updateroles"
                                               class="action-icon text-success"> <i class="mdi mdi-pencil"></i></a>
                                            <a href="javascript: void(0);"
                                               wire:click="confirmdelete({{$role->id}})" class="action-icon text-danger">
                                                <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                @empty
                                    <div class="container text-white bg-danger" style="padding: 17px;
    text-align: center;
    font-size: 18px;
       position: absolute;
    width: 96%;">لايوجد نتائج لبحثك</div>

                                @endforelse


                                </tbody>
                            </table>
                            <div class="mt-3 float-start">  عرض   <span class="text-success">  {{$sum}}  </span>  من اجمالي <strong class="text-success">{{$data->total()}} </strong> </div>

                            <div class="mt-3">{{$data->links()}}</div>
                        </div>




                    </div>
                </div>
                <!-- end card-->
            </div>
        </div>



    </div>

</div>



@push('script')


    <script>


        window.addEventListener('closemodel', event => {
            $('#addroles').modal('hide');
            $('#updateroles').modal('hide');


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

            $('#addroles').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');
            });
            $('#updateroles').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');

            });



        })

        window.addEventListener('deletesuccess',event=>{

            swal("تمت عمليه الحذف بنجاح ", {
                icon: "success",
                buttons: false,
                timer: 1600,
            });
        })

        $(function() {

            Livewire.hook('message.processed', (message, component) => {

                $('.addroles').select2({
                    dropdownParent: $('#addroles'),
                    placeholder: "Select a state",
                    // allowClear: true,

                });
                $('.updateroles').select2({
                    dropdownParent: $('#addroles'),
                    placeholder: "Select a state",
                    // allowClear: true,

                });


            })


            $('.addroles').select2({
                dropdownParent: $('#addroles'),
                placeholder: "Select a user",
                // allowClear: true,

            });


            $('.updateroles').select2({
                dropdownParent: $('#updateroles'),
                placeholder: "Select a user",
                // allowClear: true,

            });

        });

        $('.addroles').on('change',function (){
        @this.user = $(this).val();


        });


        $('.updateroles').on('change',function (){
        @this.user = $(this).val();


        });

    </script>



@endpush
