<?php

namespace App\Http\Livewire;

use App\Models\app;
use App\Models\catogeryapp;
use App\Models\catogerytype;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use mysql_xdevapi\Exception;
use function Pest\Laravel\json;

class Handelapps extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $name,$type,$size,
     $fulldes,$shortdes,$rate,
     $catogeryapp_id,$youtubeurl,
     $imgsumnail,$vergin,$screenshots=[],
     $iosurl,$apkurl,$androidurl;
     public $imagetmp,$deletename,$imgres,$appstype;
     public $screenstmp = [];
    public $orderby = "desc";
    public $rownumber = 10;
    public $search= '';
    public  $gloableid;
    public $page = 1;
    public  $idfordelete;
    protected $listeners= ['deleteconfirmed'=>'removecat','reseterrorpage'=>'resetinput'];

    protected $queryString = [

        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render()
    {

        return view('livewire.handelapps',
            ['apps' => app::query()->with('catogeryapp',function ($query){
                $query->select('id', 'catname');

            })
                ->where('name', 'like', '%'.$this->search.'%')
                ->orderBy('id',$this->orderby)
                ->paginate($this->rownumber),

                'catogerys' => catogeryapp::get(),
                'appstypedata' => catogerytype::get(),

            ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingrownumber()
    {
        $this->resetPage();
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'name' => 'required|min:3|max:60|unique:apps,name',
            'type' => 'required|max:50',
            'shortdes' => 'required|string|max:130',
            'fulldes' => 'required',
            'imgsumnail' => 'required|image|max:1024',
//            'screenshots.*' => 'image|max:12288',
            'youtubeurl' => 'nullable|url',
            'androidurl' => ' required|url',
            'iosurl' => 'nullable|url',
            'apkurl' => 'nullable|url',
            'catogeryapp_id' => 'required|int',
            'rate' => 'int|max:5',
            'appstype' => 'required',
        ]);
    }
    protected $messages = [
        'name.required' => 'اسم التطبيق مطلوب',
        'name.min' => 'اقل عدد للاحرف (3)',
        'name.max' => 'اكثر عدد للاحرف (60 حرف)',
        'name.unique' => 'اسم التطبيق مسجل من قبل',
        'type.required' => 'نوع التطبيق مطلوب',
        'rate.max' => 'تقيم التطبيق من 1الي 5',
        'catogeryapp_id.required' => 'اسناد التطبيق الي قسم اجباري',
        'shortdes.required' => 'اكثر عدد للاحرف (130 حرف)',
        'shortdes.max' => 'وصف التطبيق  المختصر اجباري',
        'fulldes.required' => 'وصف التطبيق  المفصل اجباري',
        'imgsumnail.required' => 'الصوره المصغره اجباري',
        'imgsumnail.max' => 'اقصي حجم للصوره 1 ميجا بيكسل',
        'appsdata.required' => 'تصنيف التطبيق مطلوب',
//        'screenshots.*.max' => 'اقصي حجم للصور 12 ميجا بيكسل',

    ];

    public function removeimg($key){
        unset($this->screenshots[$key]);
//array_splice($this->screenshots[$key]);
    }

    public function removesumnal(){
      $this->imgsumnail = "";
//array_splice($this->screenshots[$key]);
    }

    public function adddata()
    {

       $valdat= $this->validate([
            'name' => 'required|min:3|max:60|unique:apps,name',
            'type' => 'required|max:50',
            'shortdes' => 'required|string|max:130',
            'fulldes' => 'required',
            'imgsumnail' => 'required|image|max:1024',
//            'screenshots.*' => 'image|max:12288',
           'youtubeurl' => 'nullable|url',
           'androidurl' => ' required|url',
           'iosurl' => 'nullable|url',
           'apkurl' => 'nullable|url',
            'catogeryapp_id' => 'required|int',
            'rate' => 'int|max:5',
            'appstype' => 'required',

        ]);




      if(!empty($this->screenshots)) {
          foreach ($this->screenshots as $key => $photos) {
              $this->screenshots[$key] = $photos->store('images/'.$this->name,'public');



          }
       $this->screenshots = json_encode($this->screenshots);


          app::create([
              'name' => $this->name,
              'appstype' => $this->appstype,
              'type' => $this->type,
              'shortdes' => $this->shortdes,
              'fulldes' => $this->fulldes,
              'youtubeurl' => $this->youtubeurl,
              'androidurl' => $this->androidurl,
              'iosurl' => $this->iosurl,
//              'apkurl' => $this->apkurl,
              'rate' => $this->rate,
              'catogeryapp_id' => $this->catogeryapp_id,
              'size' => $this->size,
              'create_by'=>auth()->user()->name,

              'vergin' => $this->vergin,
              'imgsumnail' => $this->imgsumnail->store('sumnail/'.$this->name,'public'),
              'screenshots' => $this->screenshots,

          ]);
          $this->resetdata();

          $this->resetinput();
          $this->fulldes = "";
          $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم اضافه البيانات بنجاح']);

      }


    }



    public function editcatapp(int $getid){

        $this->gloableid =  $getid;
        $resid = app::find( $getid);
        if($resid){

            $this->name = $resid->name;
            $this->appstype = $resid->appstype;
            $this->type = $resid->type;
            $this->size = $resid->size;
            $this->rate = $resid->rate;
            $this->shortdes = $resid->shortdes;
            $this->fulldes = $resid->fulldes;
            $this->vergin = $resid->vergin;
            $this->youtubeurl = $resid->youtubeurl;
            $this->iosurl = $resid->iosurl;
            $this->androidurl = $resid->androidurl;
            $this->apkurl = $resid->apkurl;
            $this->catogeryapp_id = $resid->catogeryapp_id;
            $this->imagetmp = $resid->imgsumnail;
            $this->screenstmp =json_decode($resid->screenshots,true);
//            json_decode($resid->screenshots,false);
           $this->dispatchBrowserEvent('updes');



        }else{
            return  $this->redirect('/handelapp');


        }
    }


    public function updatealldata(){



        $this->validate([
            'name' => 'required|min:3|max:40|unique:apps,name,'.$this->gloableid,
            'type' => 'required||max:50',
            'shortdes' => 'required|string|max:130',
            'fulldes' => 'required',
//            'imgsumnail' => 'image|max:1024',
//            'screenshots.*' => 'image|max:12288',
            'youtubeurl' => 'nullable|url',
            'androidurl' => ' required|url',
            'iosurl' => 'nullable|url',
            'apkurl' => 'nullable|url',
            'catogeryapp_id' => 'required|int',
            'rate' => 'int|max:5',
            'appstype' => 'required',

        ]);




        if(!empty($this->imgsumnail) ){



                Storage::deleteDirectory('public/sumnail/'.$this->name);
                $this->imgres =  $this->imgsumnail->store('sumnail/'.$this->name,'public');

        }else{

            $this->imgres = $this->imagetmp;

        }

        if(!empty($this->screenshots)) {
            Storage::deleteDirectory('public/images/'.$this->name);


            foreach ($this->screenshots as $key => $photos) {
                $this->screenshots[$key] = $photos->store('images/'.$this->name,'public');


            }
        }else{
            $this->screenshots = $this->screenstmp;

        }




        $this->screenshots = json_encode($this->screenshots);


         app::where('id',$this->gloableid)->update([



            'name' => $this->name,
            'appstype' => $this->appstype,
            'type' => $this->type,
            'shortdes' => $this->shortdes,
            'fulldes' => $this->fulldes,
            'youtubeurl' => $this->youtubeurl,
            'androidurl' => $this->androidurl,
            'iosurl' => $this->iosurl,
//              'apkurl' => $this->apkurl,
            'rate' => $this->rate,
            'catogeryapp_id' => $this->catogeryapp_id,
            'size' => $this->size,
            'vergin' => $this->vergin,
            'imgsumnail' => $this->imgres == null ?$this->imagetmp:$this->imgres,
            'screenshots' => $this->screenshots == null? $this->screenstmp:$this->screenshots,
             'create_by'=>auth()->user()->name,


        ]);


        $this->resetinput();
            $this->dispatchBrowserEvent('closemodel', ['mesg' => 'تم تحديث البيانات بنجاح']);




    }



    public function confirmdelete(int $id ,$name)

    {

      $this->deletename = $name;
        $this->idfordelete = $id;

        $this->dispatchBrowserEvent('show-delete-confirm');
    }


    public function removecat( )

    {

        Storage::deleteDirectory('public/images/'.$this->deletename);
        Storage::deleteDirectory('public/sumnail/'.$this->deletename);






        app::destroy($this->idfordelete);
        $this->dispatchBrowserEvent('deletesuccess');

    }
        public  function resetdata(){

          $this->name ="";
          $this->size ="";
          $this->type ="";
          $this->rate ="";
          $this->youtubeurl ="";
          $this->iosurl ="";
          $this->androidurl ="";
          $this->apkurl ="";
          $this->imgsumnail =null;
          $this->vergin ="";
          $this->shortdes ="";
          $this->screenshots='';

        }
    public function resetinput()
    {
        $this->resetdata();
      $this->catogeryapp_id = '';
        $this->fulldes = '';

        $this->resetValidation();
        $this->resetErrorBag();
    }


}
