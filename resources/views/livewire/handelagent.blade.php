<div class="mt-3 minpage">
    <div class="row">






        <div class="col-md-12">

            <!-- Portlet card -->
            <div class="mb-3 text-white card mb-md-0 bg-primary">
                <div class="card-body">
                    <div class="card-widgets">
                             <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                    </div>
                    <h5 class="mb-0 card-title">

                        <button type="button" class="btn btn-success" style="background-color: #000000!important" data-bs-toggle="modal" data-bs-target="#adduser">
                            <i class="ms-2 mdi mdi-plus-circle-outline">  اضافه وكيل</i>
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
                                    <th>اسم المستخدم</th>
                                    <th>اضيف بواسطه </th>
                                    <th class="text-center"> <i class=" dripicons-gear noti-icon" style="font-size: 20px"></i></th>

                                </tr>
                                </thead>

                                <tbody>
                                @php
                                    $sum="";
                                @endphp
                                @forelse($userinfo as $index => $user)
                                    <tr class="text-center">
                                        <td class="d-none">{{ $sum = $userinfo->firstitem() + $index}}</td>
                                        <td>{{$userinfo->firstitem() + $index}}</td>
                                        <td>{{$user->name}}</td>
                                        <td><span class=" text-success">{{$user->create_by }}</span></td>

                                        <td class="table-action">
                                            <a href="javascript: void(0);" wire:click="showdata({{$user->id}})"
                                               data-bs-toggle="modal" data-bs-target="#showdata"   class="text-blue-700 action-icon">
                                                <i class="mdi mdi-eye"></i></a>

                                            <a href="javascript: void(0);" wire:click="editusers({{$user->id}})"  data-bs-toggle="modal" data-bs-target="#updateuser" class="action-icon text-success"> <i class="mdi mdi-pencil"></i></a>
                                            <a href="javascript: void(0);" wire:click="confirmdelete({{$user->id}})" class="action-icon text-danger"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                @empty
                                    <div class="container text-white bg-danger" style="padding: 17px;
    text-align: center;
    font-size: 18px;
       position: absolute;
    width: 96%;">لايوجد نتائج </div>

                                @endforelse


                                </tbody>
                            </table>
                            <div class="mt-3 float-start">  عرض   <span class="text-success">  {{$sum}}  </span>  من اجمالي <strong class="text-success">{{$userinfo->total() == null ? '': $userinfo->total()}} </strong> </div>

                            <div class="mt-3">{{$userinfo->links()}}</div>
                        </div>




                    </div>
                </div>
                <!-- end card-->
            </div>
        </div>
        <!--models-->
        <div  wire:ignore.self class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">اضافه وكيل </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <form wire:submit.prevent="createusers" autocomplete="off">
                        <div class="modal-body">
                            <div class="mb-1 form-group">
                                <label class="mt-0 mb-1"> اسم وكيل</label>
                                <input class="mb-2 form-control"  wire:model="name" type="text" placeholder="اسم المستخدم"/>
                                @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>


                            <div class="mb-1 form-group">
                                <label class="mt-1 mb-1"> الموبايل</label>
                                <input class="mb-2 form-control"  wire:model="phone" autocomplete="off" type="number" placeholder=" الموبايل"/>
                                @error('phone') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-1 form-group">
                                <label class="mt-1 mb-1">كلمه المرور</label>
                                <input class="mb-2 form-control pass"
                                       wire:model="password" type="password" autocomplete="off" placeholder=" كلمه المرور"/>

                                <span class="mdi mdi-eye-off-outline geteyes"></span>

                                @error('password') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>



                            <div class="modal-footer justify-content-start">
                                <button type="submit" class="btn btn-primary">اضافه</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                            </div>
                        </div>
                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!--model for updates data-->
        <div  wire:ignore.self class="modal fade" id="updateuser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">تحديث بيانات المستخدم </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <form wire:submit.prevent="updateusers">
                        <div class="modal-body">
                            <div class="mb-1 form-group">
                                <label class="mt-0 mb-1"> اسم المستخدم</label>
                                <input class="mb-2 form-control"  wire:model="name" type="text" placeholder="اسم المستخدم"/>
                                @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>

                            <div class="mb-1 form-group">
                                <label class="mt-1 mb-1">كلمه المرور</label>
                                <input class="mb-2 form-control pass"
                                       wire:model="password" type="password" autocomplete="off" placeholder=" كلمه المرور"/>

                                <span class="mdi mdi-eye-off-outline geteyes"></span>

                                @error('password') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>


                            <div class="mb-1 form-group">
                                <label class="mt-2 mb-2"> الموبايل</label>
                                <input class="mb-2 form-control"  wire:model="phone" type="text" placeholder=" الموبايل"/>
                                @error('phone') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>





                            <div class="modal-footer justify-content-start">
                                <button type="submit" class="btn btn-primary">تحديث </button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                            </div>
                        </div>
                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!--model for show all data -->
        <div  wire:ignore.self class="modal fade" id="showdata" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">عرض بيانات الوكيل </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <form wire:submit.prevent="updateusers">
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-1 form-group col-md-4">
                                    <label class="mt-0 mb-1" > اسم الوكيل</label>
                                    <input class="mb-2 form-control"  readonly wire:model="name" type="text" placeholder="اسم المستخدم"/>

                                </div>

                                <div class="mb-1 form-group col-md-4">
                                    <label class="mt-0 mb-1" > تاريخ الانشاء</label>
                                    <input class="mb-2 form-control"  readonly wire:model="time" type="text" />

                                </div>



                            <div class="mb-1 form-group col-md-4">
                                <label class="mt-0 mb-1" >  رقم الموبايل </label>
                                <input class="mb-2 form-control"  readonly wire:model="phone" type="text" />

                            </div>
                            </div>
                              
                    <div class="row">

                            <div class="mt-3 mb-5 text-center col-md-6 ">

                             <h4 class="text-success">   اجمالي ارباح الشهر الماضي <span class="text-warning">({{  number_format( $totalProfits, 2) }}) </span></h4>
                            </div>

                            <div class="mt-3 mb-5 text-center col-md-6 ">

                                <h4 class="text-success"> عدد صناع المحتوي  <span class="text-warning">({{count($getcr)}}) </span></h4>
                                </div>
                            
                    </div>
                            <div class="mb-2 col-md-12">
                                <label class="mt-0 mb-3" >  صناع المحتوي :  </label>
                                <div class="row">
                                @foreach($getcr as $index => $data)
                              <div class="mb-2 col-3">

                         
                      
                                  <a href="/createor_report/{{$data}}" class="mb-3 text-success ms-1 me-1" 
                                    style="font-size:20px">{{$data}} - {{$index+1}}</a>

                             <a href="javascript: void(0);" wire:click="getprofit('{{$data}}')"
                                               data-bs-toggle="modal" data-bs-target="#getprofit"   
                                                 class="p-1 mb-2 text-blue-700 ms-1 me-1 action-icon btn-danger">
                             اظهار الربح</a>

                              </div>

                                @endforeach
                                </div>
                            </div>






                            <div class="mt-3 modal-footer justify-content-center">
                                <button type="button" class="text-center btn btn-danger d-block" data-bs-dismiss="modal" style="width:200px">اغلاق</button>

                            </div>
                        </div>
                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

     


        <div  wire:ignore.self class="modal fade" id="getprofit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

               
                        <div class="modal-body bg-primary">


                        <div class="mt-4 mb-3 row">

                        @foreach ($getcd  as $data )
                             <div class="mb-1 form-group col-md-4">
                                    <label class="mt-0 mb-1" >اجمالي النقرات </label>
                                        {{ $data->totalclick }}
                                     </div>


                                     <div class="mb-1 form-group col-md-4">
                                    <label class="mt-0 mb-1" >اجمالي المشاهدات </label>
                                        {{ $data->totalvistor }}
                                     </div>


                                     <div class="mb-1 form-group col-md-4">
                                    <label class="mt-0 mb-1" >اجمالي  الارباح </label>
                                        ${{  number_format( $data->totalprofet, 2) }} 
                                     </div>
                                  @endforeach
                      
                                    </div>
                         


      



                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                            </div>
                        </div>
          

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    </div>

</div>

@push('css')
    <style>

        .geteyes{

            position: absolute;
            left: 40px;
            margin-top: -57px;
            cursor: pointer;
            font-size: 24px;

        }

    </style>
@endpush

@push('script')


    <script>

        $(function() {













            $('#adduser').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');



            });


            $('#updateuser').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');



            });
            $('#showdata').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');


            });
        });

        $(function (){
            $('.geteyes').click(function() {
                var inputType = $('.pass').attr('type');
                if (inputType === 'password') {
                    $('.pass').attr('type', 'text');
                    $(this).removeClass('mdi mdi-eye-off-outline').addClass('mdi mdi-eye-outline');
                } else {
                    $('.pass').attr('type', 'password');
                    $(this).addClass('mdi mdi-eye-off-outline').removeClass('mdi mdi-eye-outline').addClass('mdi mdi-eye-off-outline');
                }
            });

        });

        window.addEventListener('closemodel', event => {
            $('#adduser').modal('hide');
            $('#updateuser').modal('hide');


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

            $('#adduser').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');
            });
            $('#updateuser').on('hidden.bs.modal',function (){
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







    </script>



@endpush
