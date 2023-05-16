
<div  wire:ignore.self class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">اضافه قسم </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form wire:submit.prevent="createcat">
            <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="mb-2 mt-2">اسم القسم</label>
                        <input class="form-control mb-2"  wire:model="catname" type="text" placeholder="اسم القسم"/>
                        @error('catname') <span class="text-danger ">{{ $message }}</span> @enderror

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





<div  wire:ignore.self class="modal fade" id="updatecat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">تعديل بيانات القسم</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form wire:submit.prevent="updatescats">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="mb-2 mt-2">اسم القسم</label>
                        <input class="form-control mb-2"  wire:model="catname" type="text" placeholder="اسم القسم"/>
                        @error('catname') <span class="text-danger ">{{ $message }}</span> @enderror

                    </div>



                    <div class="modal-footer justify-content-start">
                        <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>

                    </div>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
