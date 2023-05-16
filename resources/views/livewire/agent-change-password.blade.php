<div >
    <div class="container">
        <div class="row">
            <h1 class="text-center text-success mb-5">تغير كلمه السر</h1>
            <form wire:submit.prevent="changepass">
            <div class="form-group col-md-6 me-auto ms-auto mb-1 d-flex">

                <input class="form-control mb-2 pass"
                       wire:model="password" type="password" autocomplete="off" placeholder=" كلمه المرور"/>


                <button class=" btn btn-success me-0" style="    height: 50px;">حفظ </button>


                    @error('password') <span class="text-danger me-2 ">{{ $message }}</span> @enderror


            </div>
            </form>
        </div>

    </div>


</div>
