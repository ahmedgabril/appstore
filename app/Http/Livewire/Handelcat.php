<?php

namespace App\Http\Livewire;

use App\Models\catogeryapp;
use App\Models\catogerytype;
use Livewire\Component;
use Livewire\WithPagination;

class Handelcat extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
     public $catname;
     public $orderby = "desc";
    public $rownumber = 5;
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

        return view('livewire.handelcat',
            ['cats' => catogeryapp::where('catname', 'like', '%'.$this->search.'%')->
            orderBy('id',$this->orderby)->
            paginate($this->rownumber),

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

            'catname' => 'required|min:3|unique:catogeryapps,catname',

        ]);
    }
    protected $messages = [
        'catname.required' => 'اسم القسم مطلوب',
        'catname.min' => 'اقل عدد للاحرف (3)',
        'catname.unique' => 'اسم القسم مسجل من قبل',
    ];

    public function createcat()
    {
        $validatedData = $this->validate([
            'catname' => 'required|min:3|unique:catogeryapps,catname',

        ]);

        catogeryapp::create([
           'catname'=> $this->catname,
            'create_by'=>auth()->user()->name,

        ]);
        $this->resetinput();
        $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم اضافه البيانات بنجاح']);

    }



    public function editcatapp(int $getid){
        $this->gloableid =$getid;
        $resid = catogeryapp::find( $getid);
        if($resid){

            $this->catname = $resid->catname;




        }else{
          return  $this->redirect('/addcat');


        }
    }


    public function updatescats(){

        $validatedData = $this->validate([
            'catname' => 'required|min:3|unique:catogeryapps,catname,'.$this->gloableid,
        ]);

      $cat= catogeryapp::where('id',$this->gloableid)->update([

          'catname'=>$this->catname,
          'create_by'=>auth()->user()->name,

      ]);

        $this->resetinput();
        $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم تحديث البيانات بنجاح']);

    }



    public function confirmdelete(int $id)
    {
       $this->idfordelete = $id;

     $this->dispatchBrowserEvent('show-delete-confirm');
    }


    public function removecat( )

    {

     catogeryapp::destroy($this->idfordelete);
     $this->dispatchBrowserEvent('deletesuccess');

    }

    public function resetinput()
    {
       $this->catname = "";
       $this->cattype = "";
        $this->resetValidation();
        $this->resetErrorBag();
    }


}
