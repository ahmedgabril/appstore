
<div  wire:ignore.self class="modal fade" id="addroles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">اضافه وظيفه </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form wire:submit.prevent="createroles">
                <div class="modal-body">
            <div class="row">
                        <div class="form-group  col-md-12 mb-3">
                            <label class="mb-2 mt-2">اسم الوظيفه</label>
                            <input class="form-control mb-2"  wire:model="name" type="text" placeholder="اسم الوظيفه"/>
                            @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                        </div>



                            <div class="row" style="overflow-x: hidden">
                                @foreach($getprem as $index => $prem)
                                <div class="form-check col-md-3 mb-2" wire:key="{{$index}}">
                                    <input type="checkbox"  class="form-check-input" wire:model.defer="premation"
                                           id="customCheckcolor2{{$index}}"  value="{{$prem}}" checked="">
                                    <label class="form-check-label" for="customCheckcolor2{{$index}}"> {{$prem}}</label>
                                </div>
                                @endforeach
                            </div>
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

<div  wire:ignore.self class="modal fade" id="updateroles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">اضافه وظيفه </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form wire:submit.prevent="updateroles">
                <div class="modal-body">
                        <div class="row">
                            <div class="form-group   col-md-12  mb-3">
                                <label class="mb-2 mt-2">اسم الوظيفه</label>
                                <input class="form-control mb-2"  wire:model="name" type="text" placeholder="اسم الوظيفه"/>
                                @error('name') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>


                            <div class="row" style="overflow-x: hidden">
                                @foreach($getprem as $index => $prem)


                                            <div class="form-check col-md-3 mb-2" >
                                                <input type="checkbox" class="form-check-input" wire:model.defer="premation"
                                                       id="customCheckcolor2{{$index}}"
                                                       value="{{$prem}}">


                                                <label class="form-check-label" for="customCheckcolor2{{$index}}"> {{$prem}}</label>
                                            </div>






                                @endforeach

                            </div>

                        </div>


                    <div class="modal-footer justify-content-start">
                        <button type="submit" class="btn btn-primary">تحديث</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                    </div>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
