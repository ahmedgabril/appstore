<div >
    <div class="container">
        <div class="row">
            <h1 class="mt-5 mb-5 text-center text-success">تغير كلمه السر</h1>
            <form wire:submit.prevent="changepass">
                <div class="mb-1 form-group col-md-6 me-auto ms-auto d-flex">

                    <input class="mb-2 form-control pass"
                           wire:model="password" type="password" autocomplete="off" placeholder=" كلمه المرور"/>


                    <button class=" btn btn-success me-0" style="    height: 50px;">حفظ </button>


                    @error('password') <span class="text-danger me-2 ">{{ $message }}</span> @enderror


                </div>
            </form>
        </div>

    </div>


</div>
