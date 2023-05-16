
<div  wire:ignore.self   class="mb-5 modal fade" id="adddata" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true" >
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalFullscreenLabel">اضافه تطبيق </h4>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form wire:submit.prevent="adddata" >
                <div class="modal-body">
                <div class="row">


                    <div class="mb-3 col-md-3 form-group">
                        <label class="mt-2 mb-2">اسم التطبيق</label>
                        <input class="mb-2 form-control"  wire:model="name" type="text" placeholder="اسم التطبيق"/>
                        @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>

                    <div class="col-md-3">
                        <label class="mt-2 mb-2">اسم القسم</label>

                        <div class=" form-floating">

                            <select class=" form-select" wire:model="catogeryapp_id" id="floatingSelectGrid" aria-label="Floating label select example">
                                <option ></option>

                                @foreach($catogerys as $index => $catogery)--}}
                                <option value="{{$catogery->id}}" wire:key="{{$index}}">{{$catogery->catname}}</option>


                                             @endforeach



                            </select>
                        @error('catogeryapp_id') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                    </div>
{{--                    <div class="mb-3 col-md-3" >--}}
{{--                        <label class="mt-2 mb-2"> القسم التابع له</label>--}}
{{--                        <div wire:ignore class="form-group " >--}}
{{--                            <select class="form-control select2 catdata" data-toggle="select2"--}}
{{--                                    wire:model="catogeryapp_id" >--}}

{{--                                @foreach($catogerys as $index => $catogery)--}}
{{--                                    <option ></option>--}}
{{--                                    <option value="{{$catogery->id}}" wire:key="{{$index}}">{{$catogery->catname}}</option>--}}


{{--                                @endforeach--}}

{{--                            </select>--}}
{{--                        </div>--}}

{{--                        @error('catogeryapp_id') <span class="text-danger ">{{ $message }}</span> @enderror--}}

{{--                    </div>--}}


                    <div class="mb-3 form-group col-md-3">
                        <label class="mt-2 mb-2">تصنيف التطبيق</label>

                        <div class="form-floating">
                            <select class="form-select" wire:model="appstype" id="floatingSelectGrid"
                                    aria-label="Floating label select example">

                                <option class="text-muted">اختر تصنيف للتطبيق</option>

                                @foreach($appstypedata as $type)

                                    <option value="{{$type->appstype}}">{{$type->appstype}}</option>
                                @endforeach



                            </select>
                            @error('appstype') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                    </div>

                    <div class="mb-3 col-md-3 form-group">
                        <label class="mb-3 "> نظام التشغيل</label>
                        <input class="mb-2 form-control"  wire:model="type" type="text" placeholder=" نظام التشغيل"/>
                        @error('type') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>

                    <div class="mb-3 col-md-3 form-group">
                        <label class="mt-2 mb-2">حجم التطبيق</label>
                        <input class="mb-2 form-control"  wire:model="size" type="text" placeholder=" حجم التطبيق"/>
{{--                        @error('size') <span class="text-danger ">{{ $message }}</span> @enderror--}}

                    </div>



                    <div class="mb-3 col-md-3 form-group">
                        <label class="mt-2 mb-2"> الاصدار</label>
                        <input class="mb-2 form-control"  wire:model="vergin" type="text" placeholder="مثال الاصدار 3.4"/>
                        @error('vergin') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>
                    <div class="mb-3 col-md-3 form-group">
                        <label class="mt-2 mb-2">   عدد النجوم</label>
                        <input class="mb-2 form-control"
                              maxlength="1"
                         wire:model="rate" type="text" placeholder=" عدد النجوم "/>
                        @error('rate') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>




                    <div class="mb-3 col-md-3 form-group">
                        <label class="mt-2 mb-2"> رابط تحميل يوتيوب</label>
                        <input class="mb-2 form-control"  wire:model="youtubeurl" type="text" placeholder=" رابط تحميل يوتيوب"/>
                        @error('youtubeurl') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label class="mt-2 mb-2"> رابط جوجل بلاي</label>
                        <input class="mb-2 form-control"  wire:model="androidurl" type="text" placeholder=" رابط جوجل بلاي"/>
                        @error('androidurl') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label class="mt-2 mb-2"> رابط تحميل ابل </label>
                        <input class="mb-2 form-control"  wire:model="iosurl" type="text" placeholder="رابط تحميل ابل"/>
                        @error('iosurl') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label class="mt-2 mb-2"> رابط تحميل خارجي</label>
                        <input class="mb-2 form-control"  wire:model="apkurl" type="text" placeholder=" رابط تحميل خارجي"/>
                        @error('apkurl') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>
                    <div class="col-md-12" style="position: relative">
                        @if ($imgsumnail)

                            <a  href="#"
                                style="    position: absolute;
                                        margin-right: 5px;
                                        margin-top: 6px;

                                        background-color: red;"
                                wire:click.prevent="removesumnal" class="btn-close" ></a>

                            <img src="{{$imgsumnail->temporaryUrl() }}" height="200" width="400">

                        @endif

                    </div>

                    <div class="mb-3 col-md-6 form-group">

                            <label class="mt-2 mb-2 form-label">وصف مختصر</label>

                            <textarea data-toggle="maxlength" wire:model="shortdes"
                             class="form-control" maxlength="130" rows="3"
                            placeholder="اقصي عدد احرف مسموح به هو 130 حرف"></textarea>
                       @error('shortdes') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>

                    <div class="mb-3 col-md-6 form-group">

                            <label class="mt-2 mb-2 "> الصوره المصغره</label>

                        <input class="mb-2 form-control"
                               style="line-height: 7" wire:model="imgsumnail"
                               accept="image/*"
                               type="file"  placeholder=" صوره التطبيق المصغره"/>
                        <div wire:loading wire:target="imgsumnail">Uploading...</div>
                        @error('imgsumnail') <span class="text-danger ">{{ $message }}</span> @enderror



                    </div>

                    <div class="row d-flex">
{{--                        @if (is_array($screenshots) || is_object($screenshots))--}}

{{--                            @foreach($screenshots as $key => $screen)--}}
{{--                             <div class="col-md-3 " style="position: relative">--}}

{{--                                 <a  href="#"--}}
{{--                                         style="    position: absolute;--}}
{{--                                        margin-right: 5px;--}}
{{--                                        margin-top: 6px;--}}

{{--                                        background-color: red;"--}}
{{--                                         wire:click.prevent="removeimg('{{$key}}')" class="btn-close" ></a>--}}
{{--                                 <img src="{{ $screen->temporaryUrl() }}"class="m-1" height="200" width="100%">--}}

{{--                             </div>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}

                    </div>

                    <div class="col-md-12">
                        <label class="mt-2 mb-2 ">  لقطات الشاشه اوصور التطبيق <span style="font-size: 10px;
    color: #e37979;">(مجموع حجم الصور ١٢ ميجا كحد اقصي)</span></label>

                        <input class="mb-2 form-control"  style="line-height: 7"
                           wire:model="screenshots"
                         type="file" multiple
                       accept="image/*"
                           placeholder=" صوره التطبيق المصغره"/>
                        @error('screenshots') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>
                    </div>

                    <!-- HTML -->
                    <div class="col-md-12" wire:ignore >
                        <label class="mt-0 mb-2 ">  وصف التطبيق </label>

                        <textarea  class="addappdata"

                           name="editor1" ></textarea>


                        {{--                        <div--}}
{{--                              class="snow-editor"--}}


{{--                    style="height: 250px;" >--}}

{{--                        </div>--}}
                        @error('fulldes') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>





                </div>
                    <div class="mb-3 modal-footer justify-content-center">
                        <button type="submit"   class="btn btn-primary btn-lg addfulldes">اضافه</button>
                        <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">اغلاق</button>

                    </div>

            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>





<div  wire:ignore.self class="mb-5 modal fade"   id="updatedata" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalxl" aria-hidden="true" >
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalxl">تعديل تطبيق </h4>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form wire:submit.prevent="updatealldata" >
                <div class="modal-body">
                    <div class="row">


                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2">اسم التطبيق</label>
                            <input class="mb-2 form-control"  wire:model="name" type="text" placeholder="اسم التطبيق"/>
                            @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>

                        <div class="col-md-3">
                            <label class="mt-2 mb-2">اسم القسم</label>

                            <div class=" form-floating">

                                <select class=" form-select" wire:model="catogeryapp_id" id="floatingSelectGrid" aria-label="Floating label select example">
                                    <option ></option>

                                    @foreach($catogerys as $index => $catogery)
                                    <option value="{{$catogery->id}}" wire:key="{{$index}}">{{$catogery->catname}}</option>


                                    @endforeach



                                </select>
                                @error('catogeryapp_id') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>
                        </div>


                        <div class="mb-3 form-group col-md-3">
                            <label class="mt-2 mb-2">تصنيف التطبيق</label>

                            <div class="form-floating">
                                <select class="form-select" wire:model="appstype" id="floatingSelectGrid"
                                        aria-label="Floating label select example">

                                    <option class="text-muted">اختر تصنيف للتطبيق</option>

                                    @foreach($appstypedata as $type)

                                        <option value="{{$type->appstype}}">{{$type->appstype}}</option>
                                    @endforeach



                                </select>
                                @error('appstype') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>
                        </div>

                        <div class="mb-3 col-md-3 form-group">
                            <label class="mb-3 "> نظام التشغيل</label>
                            <input class="mb-2 form-control"  wire:model="type" type="text" placeholder=" نظام التشغيل"/>
                            @error('type') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>

                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2">حجم التطبيق</label>
                            <input class="mb-2 form-control"  wire:model="size" type="text" placeholder=" حجم التطبيق"/>
                            @error('size') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>



                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2"> الاصدار</label>
                            <input class="mb-2 form-control"  wire:model="vergin" type="text" placeholder="مثال الاصدار 3.4"/>
                            @error('vergin') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2">   عدد النجوم</label>
                            <input class="mb-2 form-control"
                                   maxlength="1"
                                   wire:model="rate" type="text" placeholder=" عدد النجوم "/>
                            @error('rate') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>




                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2"> رابط تحميل يوتيوب</label>
                            <input class="mb-2 form-control"  wire:model="youtubeurl" type="text" placeholder=" رابط تحميل يوتيوب"/>
                            @error('youtubeurl') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-3 col-md-4 form-group">
                            <label class="mt-2 mb-2"> رابط جوجل بلاي</label>
                            <input class="mb-2 form-control"  wire:model="androidurl" type="text" placeholder=" رابط جوجل بلاي"/>
                            @error('androidurl') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-3 col-md-4 form-group">
                            <label class="mt-2 mb-2"> رابط تحميل ابل </label>
                            <input class="mb-2 form-control"  wire:model="iosurl" type="text" placeholder="رابط تحميل ابل"/>
                            @error('iosurl') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-3 col-md-4 form-group">
                            <label class="mt-2 mb-2"> رابط تحميل خارجي</label>
                            <input class="mb-2 form-control"  wire:model="apkurl" type="text" placeholder=" رابط تحميل خارجي"/>
                            @error('apkurl') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>

                        @if($imagetmp && $imgsumnail == null)

                            <div class="mb-3 col-md-6" style="position: relative">




                                <img src="{{asset('storage/'.$imagetmp)}}" height="200" width="400">



                            </div>


                        @endif
                        <div class="col-md-12" style="position: relative">
                            @if ($imgsumnail)

                                <a  href="#"
                                    style="    position: absolute;
                                        margin-right: 5px;
                                        margin-top: 6px;

                                        background-color: red;"
                                    wire:click.prevent="removesumnal" class="btn-close" ></a>

                                <img src="{{$imgsumnail->temporaryUrl() }}" height="200" width="400">

                            @endif

                        </div>

                        <div class="mb-3 col-md-6 form-group">

                            <label class="mt-2 mb-2 form-label">وصف مختصر</label>

                            <textarea data-toggle="maxlength" wire:model="shortdes"
                                      class="form-control" maxlength="130" rows="3"
                                      placeholder="اقصي عدد احرف مسموح به هو 130 حرف"></textarea>
                            @error('shortdes') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>

                        <div class="mb-3 col-md-6 form-group">

                            <label class="mt-2 mb-2 "> الصوره المصغره</label>

                            <input class="mb-2 form-control"
                                   style="line-height: 7" wire:model="imgsumnail"
                                   accept="image/*"
                                   type="file"  placeholder=" صوره التطبيق المصغره"/>
                            <div wire:loading wire:target="imgsumnail">Uploading...</div>
                            @error('imgsumnail') <span class="text-danger ">{{ $message }}</span> @enderror



                        </div>



                        @if($screenstmp && $screenshots == null)

                            <div class="row d-flex">


                                @foreach($screenstmp  as  $screen)
                                    <div class="col-md-3 ">

                                        <img src="{{asset('storage/'.$screen)}}"class="m-1" height="200" width="100%">

                                    </div>
                                @endforeach


                            </div>



                        @endif

                        <div class="row d-flex">
{{--                            @if (is_array($screenshots) || is_object($screenshots))--}}

{{--                                @foreach($screenshots as $key => $screen)--}}
{{--                                    <div class="col-md-3 " style="position: relative">--}}

{{--                                        <a  href="#"--}}
{{--                                            style="    position: absolute;--}}
{{--                                        margin-right: 5px;--}}
{{--                                        margin-top: 6px;--}}

{{--                                        background-color: red;"--}}
{{--                                            wire:click.prevent="removeimg('{{$key}}')" class="btn-close" ></a>--}}
{{--                                        <img src="{{ $screen->temporaryUrl() }}"class="m-1" height="200" width="100%">--}}

{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}

                        </div>

                        <div class="col-md-12">
                            <label class="mt-2 mb-2 ">  لقطات الشاشه اوصور التطبيق <span style="font-size: 10px;
    color: #e37979;">(مجموع حجم الصور ١٢ ميجا كحد اقصي)</span></label>

                            <input class="mb-2 form-control"  style="line-height: 7"
                                   wire:model="screenshots"
                                   type="file" multiple
                                   accept="image/*"
                                   placeholder=" صوره التطبيق المصغره"/>
                            @error('screenshots') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                    </div>

                    <!-- HTML -->
                    <div class="col-md-12" wire:ignore >
                        <label class="mt-2 mb-2 ">  وصف التطبيق </label>

                        <textarea  class="addappdata"
                                   style="height: 500px!important;"
                                   name="editor2" ></textarea>


                        @error('fulldes') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>





                </div>
                <div class="mb-3 modal-footer justify-content-center">
                    <button type="submit"   class="btn btn-primary btn-lg updatefulldes">تحديث</button>
                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">اغلاق</button>

                </div>

            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>







<div  wire:ignore.self class="mb-5 modal fade"   id="showdata" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalxl" aria-hidden="true" >
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form wire:submit.prevent="updatealldata" >
                <div class="modal-body">
                    <div class="row">


                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2">اسم التطبيق</label>
                            <input class="mb-2 form-control" disabled  wire:model="name" type="text" placeholder="اسم التطبيق"/>
                            @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-md-3">
                            <label class="mt-2 mb-2">اسم القسم</label>

                            <div class=" form-floating">

                                <select class=" form-select" disabled wire:model="catogeryapp_id" id="floatingSelectGrid" aria-label="Floating label select example" >
                                    <option ></option>

                                    @foreach($catogerys as $index => $catogery)
                                    <option value="{{$catogery->id}}" wire:key="{{$index}}">{{$catogery->catname}}</option>


                                    @endforeach



                                </select>
                                @error('catogeryapp_id') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>
                        </div>


                        <div class="mb-3 form-group col-md-3">
                            <label class="mt-2 mb-2">تصنيف التطبيق</label>

                            <div class="form-floating">
                                <select class="form-select" disabled wire:model="appstype" id="floatingSelectGrid"
                                        aria-label="Floating label select example">

                                    <option class="text-muted">اختر تصنيف للتطبيق</option>

                                    @foreach($appstypedata as $type)

                                        <option value="{{$type->appstype}}">{{$type->appstype}}</option>
                                    @endforeach



                                </select>

                            </div>
                        </div>


                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2"> نظام التشغيل</label>
                            <input class="mb-2 form-control" disabled  wire:model="type" type="text" placeholder=" نظام التشغيل"/>

                        </div>

                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2">حجم التطبيق</label>
                            <input class="mb-2 form-control" disabled  wire:model="size" type="text" placeholder=" حجم التطبيق"/>

                        </div>



                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2"> الاصدار</label>
                            <input class="mb-2 form-control" disabled wire:model="vergin" type="text" placeholder=" الاصدار 3.4"/>

                        </div>
                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2">   عدد النجوم</label>
                            <input class="mb-2 form-control"
                                   maxlength="1"
                                   disabled
                                   wire:model="rate" type="text" placeholder=" عدد النجوم "/>

                        </div>




                        <div class="mb-3 col-md-3 form-group">
                            <label class="mt-2 mb-2"> رابط تحميل يوتيوب</label>
                            <input class="mb-2 form-control" disabled wire:model="youtubeurl" type="text" placeholder=" رابط تحميل يوتيوب"/>

                        </div>
                        <div class="mb-3 col-md-4 form-group">
                            <label class="mt-2 mb-2"> رابط جوجل بلاي</label>
                            <input class="mb-2 form-control" disabled wire:model="androidurl" type="text" placeholder=" رابط جوجل بلاي"/>

                        </div>
                        <div class="mb-3 col-md-4 form-group">
                            <label class="mt-2 mb-2"> رابط تحميل ابل </label>
                            <input class="mb-2 form-control" disabled  wire:model="iosurl" type="text" placeholder="رابط تحميل ابل"/>

                        </div>
                        <div class="mb-3 col-md-4 form-group">
                            <label class="mt-2 mb-2"> رابط تحميل خارجي</label>
                            <input class="mb-2 form-control" disabled wire:model="apkurl" type="text" placeholder=" رابط تحميل خارجي"/>

                        </div>
                        @if($imagetmp && $imgsumnail == null)

                            <div class="mb-3 col-md-6" style="position: relative">




                                <img src="{{asset('storage/'.$imagetmp)}}" height="200" width="400">



                            </div>


                        @endif

                        <div class="mb-3 col-md-6 form-group">


                            <textarea  disabled wire:model="shortdes"
                                      class="form-control"  rows="5"
                                      ></textarea>

                        </div>


                        @if($screenstmp && $screenshots == null)

                            <div class="row d-flex">


                                @foreach($screenstmp  as  $screen)
                                    <div class="col-md-3 ">

                                        <img src="{{asset('storage/'.$screen)}}"class="m-1" height="200" width="100%">

                                    </div>
                                @endforeach


                            </div>



                        @endif


                    </div>

                    <!-- HTML -->
                    <div class="col-md-12" >
                        <label class="mt-2 mb-2 text-center">  وصف التطبيق </label>



                        <textarea
                                   id="reddata"

                                   readonly
                                   style="width: 100%;
                                    padding: 20px;
                                    height: 500px;"

                                   rows="7">

                                    {!!strip_tags($fulldes)!!}

                                        </textarea>





</div>





</div>
<div class="mb-3 modal-footer justify-content-center">
<button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">اغلاق</button>

</div>

</form>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
