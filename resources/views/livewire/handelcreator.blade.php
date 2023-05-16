<div class="mt-3 minpage">
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

                        <button type="button" class="btn btn-success" style="background-color: #000000!important" data-bs-toggle="modal" data-bs-target="#adduser">
                            <i class="ms-2 mdi mdi-plus-circle-outline">  اضافه منشئ محتوي</i>
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
                                    <th>الوكيل </th>
                                    <th>اضيف بواسطه </th>
                                    <th>التقارير</th>
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
                                        <td>{{$user->fathar}}</td>
                                        <td><span class=" text-success">{{$user->create_by}}</span></td>
                                        <td>
                                            <a href="/createor_report/{{$user->name}}" class="text-warning">التقارير</a>
                                        </td>

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
                        <h4 class="modal-title" id="myLargeModalLabel">اضافه منشئ محتوي </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <form wire:submit.prevent="createusers" autocomplete="off">


                            <div class="modal-body">
                                <div class="row">
                                <div class="mb-1 form-group">
                                    <label class="mt-0 mb-1"> الاسم </label>
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
                                <div class="mb-2 col-md-12 form-group" >
                                    <label class="mt-1 mb-1"> الوكيل </label>
                                    <div wire:ignore class="form-group " >
                                        <select class="form-control select2 addagent"   data-toggle="select2"
                                                wire:model="fathar" >

                                            @foreach($getfathar as $index => $fathar)
                                                <option ></option>

                                                <option value="{{$fathar}}" wire:key="{{$index}}">{{$fathar}}</option>


                                            @endforeach

                                        </select>
                                    </div>

                                    @error('fathar') <a href="/handelagent"><span class="text-danger ">{{ $message }}</span> </a>@enderror

                                </div>


                                    <div class="mb-1 form-group col-md-12">
                                        <label class="mt-1 mb-1"> الموبايل</label>
                                        <input class="mb-2 form-control"  wire:model="phone" autocomplete="off" type="number" placeholder=" الموبايل"/>
                                        @error('phone') <span class="text-danger ">{{ $message }}</span> @enderror

                                    </div>


                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">سعر النقره</label>
                                        <input type="text"  class="form-control"
                                        placeholder="مثال:0.04" wire:model="cost_click"/>
                                        @error('cost_click') <span class="text-danger">{{ $message }}</span> @enderror

                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">سعر المشاهده لكل   (1000)</label>

                                        <input type="text" class="form-control"
                                         wire:model="cost_veiw" placeholder="مثال:0.04"/>
                                        @error('cost_veiw') <span class="text-danger ">{{ $message }}</span> @enderror

                                    </div>
                             
                                <div class="modal-footer justify-content-start">
                                    <button type="submit" class="btn btn-primary">اضافه</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                                </div>

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
                        <h4 class="modal-title" id="myLargeModalLabel">تحديث بيانات صانع المحتوي </h4>
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

                            <div class="mb-2 col-md-12 form-group" >
                                <label class="mt-1 mb-1"> الوكيل </label>
                                <div wire:ignore class="form-group " >
                                    <select class="form-control select2 updateagent"   data-toggle="select2"
                                            wire:model="fathar" >

                                        @foreach($getfathar as $index => $fathar)
                                            <option ></option>

                                            <option value="{{$fathar}}" wire:key="{{$index}}">{{$fathar}}</option>


                                        @endforeach

                                    </select>
                                </div>

                                @error('fathar') <a href="/handelagent"><span class="text-danger ">{{ $message }}</span> </a>@enderror

                            </div>

                            <div class="mb-1 form-group">
                                <label class="mt-2 mb-2"> الموبايل</label>
                                <input class="mb-2 form-control"  wire:model="phone" type="text" placeholder=" الموبايل"/>
                                @error('phone') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>


                            <div class="row">
                                
                            <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">سعر النقره</label>
                                        <input type="text"  class="form-control"
                                        placeholder="مثال:0.04" wire:model="cost_click"/>
                                        @error('cost_click') <span class="text-danger">{{ $message }}</span> @enderror

                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">سعر المشاهده لكل   (1000)</label>

                                        <input type="text" class="form-control"
                                         wire:model="cost_veiw" placeholder="مثال:0.04"/>
                                        @error('cost_veiw') <span class="text-danger ">{{ $message }}</span> @enderror

                                    </div>
                             
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
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">عرض بيانات صانع المحتوي </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <form wire:submit.prevent="updateusers">
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-1 form-group col-md-6">
                                    <label class="mt-0 mb-1" > اسم المستخدم</label>
                                    <input class="mb-2 form-control"  readonly wire:model="name" type="text" placeholder="اسم المستخدم"/>

                                </div>

                                <div class="mb-1 form-group col-md-6">
                                    <label class="mt-0 mb-1" > تاريخ الانشاء</label>
                                    <input class="mb-2 form-control"  readonly wire:model="time" type="text" />

                                </div>

                            </div>

                            <div class="mb-1 form-group col-md-12">
                                <label class="mt-0 mb-1" >الوكيل  </label>
                                <input class="mb-2 form-control"  readonly wire:model="fathar" type="text" />

                            </div>



                        <div class="mb-1 form-group col-md-12">
                             <label class="mt-0 mb-1" >الموبايل </label>
                              <input class="mb-2 form-control"  readonly wire:model="phone" type="text" />

                         </div>

                    <div class="row">
                                
                                <div class="mb-3 col-md-6 form-group">
                                            <label class="mt-2 mb-2">سعر النقره</label>
                                            <input type="text" readonly  class="form-control"
                                            placeholder="مثال:0.04" wire:model="cost_click"/>
                                            @error('cost_click') <span class="text-danger">{{ $message }}</span> @enderror
    
                                        </div>
                                        <div class="mb-3 col-md-6 form-group">
                                            <label class="mt-2 mb-2">سعر المشاهده لكل   (1000)</label>
    
                                            <input type="text" class="form-control"
                                            readonly
                                             wire:model="cost_veiw" placeholder="مثال:0.04"/>
                                            @error('cost_veiw') <span class="text-danger ">{{ $message }}</span> @enderror
    
                                        </div>
                                 
                                </div>



                            <div class="modal-footer justify-content-start">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                            </div>
                        </div>
                    </form>

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




            Livewire.hook('message.processed', (message, component) => {


                $('.addagent').select2({
                    dropdownParent: $('#adduser'),
                    placeholder: "اختر وكيل",

                });






            $('.updateagent').select2({
                dropdownParent: $('#updateuser'),
                placeholder: "اختر وكيل",

            });



            });




            $('.addagent').select2({
                dropdownParent: $('#adduser'),
                placeholder: "اختر وكيل",

            });






            $('.updateagent').select2({
                dropdownParent: $('#updateuser'),
                placeholder: "اختر وكيل",

            });


            $('.addagent').on('change',function (){
            @this.fathar = $(this).val();


            });

            $('.updateagent').on('change',function (){
            @this.fathar = $(this).val();


            });



            $('#adduser').on('hidden.bs.modal',function (){
            @this.fathar = null;
                Livewire.emit('reseterrorpage');



            });


            $('#updateuser').on('hidden.bs.modal',function (){
            @this.fathar = null;

                Livewire.emit('reseterrorpage');



            });
            $('#showdata').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');
            @this.fathar="";


            });

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




            $('#adduser').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');
            });
            $('#updateuser').on('hidden.bs.modal',function (){
                Livewire.emit('reseterrorpage');

            });



        });

        window.addEventListener('deletesuccess',event=>{

            swal("تمت عمليه الحذف بنجاح ", {
                icon: "success",
                buttons: false,
                timer: 1600,
            });
        })







    </script>



@endpush
