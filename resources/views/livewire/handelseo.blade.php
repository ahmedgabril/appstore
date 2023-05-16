<div>

        <div class="container">
            <div class="row">
               
                    <form wire:submit.prevent="upseodata">


                        <div class="mt-5 mb-3 text-white card bg-primary mb-md-0">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false"
                                       aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                </div>
                                <h5 class="mb-0 card-title text-success">اداره بيانات  السيو </h5>

                                <div id="cardCollpase2" class="pt-3 collapse show row">

                                <div class="mb-3 col-md-6 form-group">

                                        <label class="mt-2 mb-2 form-label"> اسم الموقع </label>

                                        <textarea data-toggle="maxlength" wire:model="sitename"
                                                class="form-control" maxlength="130" rows="3"
                                                placeholder="اقصي عدد احرف مسموح به هو 100 حرف"></textarea>
                                        @error('sitename') <span class="text-danger ">{{ $message }}</span> @enderror

                                        </div>

                                    <div class="mb-3 col-md-6 form-group">

                                <label class="mt-2 mb-2 form-label">وصف  الموقع</label>

                                <textarea data-toggle="maxlength" wire:model="sitedes"
                                          class="form-control" maxlength="130" rows="3"
                                          placeholder="اقصي عدد احرف مسموح به هو 600 حرف"></textarea>
                                @error('sitedes') <span class="text-danger ">{{ $message }}</span> @enderror

                            </div>

                             
                      

                           
                           
                           
                                    <div class="mt-3 mb-3 col-md-8 me-auto ms-auto ">
                                        <button type="submit" class="btn-success btn-lg btn btn-block d-block w-100">حفظ</button>

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

