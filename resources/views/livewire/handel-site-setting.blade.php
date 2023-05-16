<div>

    <div class="container">
        <div class="row">
            <form wire:submit.prevent="updatesitesetting">


                <div class="card bg-primary text-white mb-md-0 mb-3 mt-5">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false"
                               aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                        </div>
                        <h5 class="card-title mb-0"> اعدات الموقع</h5>

                        <div id="cardCollpase2" class="collapse pt-3 show row">

                            <div class=" col-md-6 form-group mb-3">

                                <label class="form-label mb-2 mt-2"> العنوان</label>

                                <textarea data-toggle="maxlength" wire:model="title"
                                          class="form-control" maxlength="50" rows="3"
                                          placeholder="اقصي عدد احرف مسموح به هو 50 حرف"></textarea>
                                @error('shortdes') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>
                            <div class=" col-md-6 form-group mb-3">

                                <label class="form-label mb-2 mt-2">وصف مختصر</label>

                                <textarea data-toggle="maxlength" wire:model="shortdes"
                                          class="form-control" maxlength="130" rows="3"
                                          placeholder="اقصي عدد احرف مسموح به هو 130 حرف"></textarea>
                                @error('shortdes') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>




                            <div class=" col-md-6 form-group mb-3">

                                <label class=" mb-2 mt-2"> لوجو الموقع</label>

                                <input class="form-control mb-2"
                                       style="line-height: 7" wire:model="logo"
                                       accept="image/*"
                                       type="file"  />
                                <div wire:loading wire:target="logo">Uploading...logo</div>
                                @error('logo') <span class="text-danger ">{{ $message }}</span> @enderror



                            </div>
                            <div class=" col-md-6 form-group mb-3">

                                <label class=" mb-2 mt-2">خلفيه الموقع الرئسيه</label>

                                <input class="form-control mb-2"
                                       style="line-height: 7" wire:model="hearo_img"
                                       accept="image/*"
                                       type="file" />
                                <div wire:loading wire:target="hearo_img">Uploading... hearo_img</div>
                                @error('hearo_img') <span class="text-danger ">{{ $message }}</span> @enderror



                            </div>




                                @if($getlogotemp && $logo == null)

                               <div class="col-md-6 mb-3" style="position: relative">

                                        <img src="{{asset('storage/'.$getlogotemp)}}" height="200" width="400">

                                    </div>
                            @else
                                <div class="col-md-6  mb-3" style="position: relative">
                                    @if ($logo)

                                        <a  href="#"
                                            style="    position: absolute;
                                                                    margin-right: 5px;
                                                                    margin-top: 6px;

                                                                    background-color: red;"
                                            wire:click.prevent="removesumnal" class="btn-close" ></a>

                                        <img src="{{$logo->temporaryUrl() }}" height="200" width="400">

                                    @endif

                                </div>


                            @endif



                                <!--hero_img-->
                                @if($getheroimgtemp && $hearo_img == null)

                                    <div class="col-md-6 mb-3" style="position: relative">




                                        <img src="{{asset('storage/'.$getheroimgtemp)}}" height="200" width="400">



                                    </div>
                            @else
                                <div class="col-md-6  mb-3" style="position: relative">
                                    @if ($hearo_img)

                                        <a  href="#"
                                            style="    position: absolute;
                                                                    margin-right: 5px;
                                                                    margin-top: 6px;

                                                                    background-color: red;"
                                            wire:click.prevent="removehero" class="btn-close" ></a>

                                        <img src="{{$hearo_img->temporaryUrl() }}" height="200" width="400">

                                    @endif

                                </div>



                            @endif




                            <div class="col-md-8 mb-3 me-auto ms-auto mt-3 ">
                                <button type="submit" class="btn-success btn-lg   btn btn-block d-block w-100">حفظ</button>

                            </div>

                        </div>
                    </div>
                </div> <!-- end card-->




            </form>

        </div>
    </div>
    @push('script')

        <script>

            window.addEventListener('update',event => {

                swal( event.detail.msg  , {
                    icon: "success",
                    buttons: false,
                    timer: 1800,
                });
            });
        </script>

    @endpush


</div>

