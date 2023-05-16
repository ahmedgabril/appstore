<div class="mt-3" >

<div class="container">
    <div class="mt-5 row">

    <div class="col-md-8 me-auto ms-auto">
                    <div class="mb-3">
                        <label class="mb-2 form-label">تقارير مخصصه</label>
                        <div id="reportrange" class="form-control getdate" wire:ignore

                             data-toggle="date-picker-range"    data-target-display="#selectedValue"  data-cancel-class="btn-light">
                            <i class="mdi mdi-calendar"></i>&nbsp;
                            <span id="selectedValue"></span> <i class="mdi mdi-menu-down"></i>
                        </div>
                    </div>
                </div>






   
                <div class="tb">


<div class="row " style="overflow-x: auto" >

                    <table class="table mb-0 table-striped table-centered"  >

                        <thead class="text-center" style="background-color:#b94f3c">
                        <tr>
                          
                
                            <th> عدد النقرات </th>
                            <th> سعر النقره</th>
                            <th> الارباح </th>

                        </tr>
                        </thead>

                        <tbody >



<!-- <div  wire:loading.delay> ........................</div>       -->
 <tr >

<td class="text-center"><span class="text-success">{{ $gettotalvistorperclic}}</span></td>
<td  class="text-center"><span class="text-success"> {{$clickprice->cost_click}} <storang class="text-warning">$</storang>  </span></td>

<td  class="text-center"><span class="text-success">  {{ $getclickprice }} <storang class="text-warning">$</storang> </span></td>

</tr>

<thead class="text-center" style="background-color:#727cf5">
                        <tr>
                          
                
                            <th> عدد الزيارات </th>
                            <th> سعر الزياره</th>
                            <th> الارباح </th>

                        </tr>
                        </thead>


<tr>
  
<td class="text-center"><span class="text-success">{{ $gettotalvistorperveiw}}</span></td>
<td  class="text-center"><span class="text-success">  {{ $costveiw}} <storang class="text-warning">$</storang>  </span></td>

<td  class="text-center"><span class="text-success">  {{$getviewprice }} <storang class="text-warning">$</storang> </span></td>

</tr>



<thead class="text-center" style="background-color:#2a39e7">
                        <tr>
                          
                
                           
                            <th></th>
                            <th>اجمالي عدد الزيارات + مجموع النقرات</th>
                            <th></th>

                        </tr>
                        </thead>
<tr col-span="12" class="text-center">


<td></td>
<td  class="text-center" style="height:30px"><span class="text-success" style="font-size:20px">  {{$profet}}<storang class="text-warning">$</storang> </span></td>

<td></td>


</tr>
                       

</tbody>
          

</table>




            </div>







</div>



</div>



</div>
</div>
@push('css')
    <style>

       

    </style>
@endpush

@push('script')




<!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->


<script>

$(function (){
    $('#reportrange').on('apply.daterangepicker', function(event, picker) {
        var startDate = picker.startDate.format('YYYY-MM-DD');
        var endDate = picker.endDate.format('YYYY-MM-DD');
       @this.startDate = startDate;
       @this.endDate = endDate;
        Livewire.emit('getdata');
    });

});



</script>



@endpush
    </div>

