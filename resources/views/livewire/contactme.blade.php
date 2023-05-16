<div>

        <div class="container">
            <div class="row">
                    <form wire:submit.prevent="updatecontact">


                        <div class="mt-5 mb-3 text-white card bg-primary mb-md-0">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false"
                                       aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                </div>
                                <h5 class="mb-0 card-title"></h5> اداره بيانات صفحه من نحن</h5>

                                <div id="cardCollpase2" class="pt-3 collapse show row">

                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">email</label>
                                        <input type="email" class="form-control" wire:model="email"/>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">phone</label>

                                        <input type="number" class="form-control" wire:model="phone"/>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">YouTube-url</label>

                                        <input type="text" class="form-control" wire:model="youtubeurl"/>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">Facebook-url</label>

                                        <input type="text" class="form-control" wire:model="facebookurl"/>
                                    </div>

                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">Instagram-aurl</label>

                                        <input type="text" class="form-control" wire:model="instaurl"/>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label class="mt-2 mb-2">TicTok-url</label>

                                        <input type="text" class="form-control" wire:model="tectook"/>
                                    </div>
                                    <div class="mb-3 col-md-12 form-group">
                                        <label class="mt-2 mb-2">رساله قصيره</label>

                                        <textarea rows="3"  class="form-control" wire:model="shortdes"></textarea>
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
