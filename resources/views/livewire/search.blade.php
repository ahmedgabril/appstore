<div>

    <div class="modal fade" wire:ignore.self  id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
{{--                <div class="modal-header" dir="ltr">--}}
{{--                    <h5 class="modal-title" id="scrollableModalTitle">بحث</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>--}}
{{--                </div>--}}
                <div class="modal-body">
              <div class="row" style="overflow-x: hidden;">
                  <div class="colo-md-12 mb-2 mt-3 form-group">
                      <input type="search" class="form-control ds-input"
                             wire:model="searchbyname"
                             id="search-input" placeholder="ابحث عن تطبيق او لعبه"
                             dir="auto" >
                  </div>

                  <div class="col-md-12 mt-3">

                          @if(is_array($datares )|| is_object($datares ))
                              @forelse($datares as $data)
                                <a href="/pageinfo/{{$data->name}}">
                                    <div class="col-md-12 d-flex  mb-3 justify-content-end">
                                        <div class="col-md-5  me-2">

                                            <h5 class="text-end text-success">{{$data->name}}</h5>
                                            <p class="text-muted text-wrap text-end" style="font-size: 12px;
                    line-height: 20px;
                        ">{{$data->shortdes}}</p>



                                        </div>

                                        <div class="col-md-5 me-2">
                                            <img src="/storage/{{$data->imgsumnail}}"
                                                 style="border-radius: 7%"
                                                 width="150" height="120" alt="appimg">

                                        </div>
                                    </div>
                                </a>


                              @empty

                                  <div class="text-danger text-center">لاتوجد نتائج لبحثك</div>
                              @endforelse
                          @endif

                  </div>


              </div>

                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><


</div>
@push('forntjs')

    <script>
        $(function (){
            $('#scrollable-modal').on('hidden.bs.modal',function (){
                Livewire.emit('resetserch');



            });

        })

    </script>


@endpush
