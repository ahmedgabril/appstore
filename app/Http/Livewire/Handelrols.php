<?php

namespace App\Http\Livewire;

use App\Models\catogeryapp;
use App\Models\catogerytype;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Handelrols extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,
        $premation=[];
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

        return view('livewire.handelrols',
            ['data' => Role::where('name', 'like', '%'.$this->search.'%')->
            orderBy('id',$this->orderby)->
            paginate($this->rownumber),
             'getprem'=> Permission::all()->pluck('name')->toArray(),

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

            'name' => 'required|min:3|unique:roles,name',
            'premation' => 'required',

        ]);
    }
    protected $messages = [
        'name.required' => 'اسم الوظيفه مطلوب',
        'name.min' => 'اقل عدد للاحرف (3)',
        'name.unique' => 'اسم الوظيفه مسجل من قبل',
        'premation.required' => 'اختر صلاحيه واحده علي الاقل',
    ];

    public function createroles()
    {

        $validatedData = $this->validate([
            'name' => 'required|min:3|unique:roles,name',
            'premation' => 'required',

        ]);

         $role = Role::create($validatedData);

        $role->syncPermissions($this->premation);
    
        User::where('name',auth()->user()->name)->update([
            'create_by'=>auth()->user()->name,
       ]);
        $this->resetinput();
        $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم اضافه البيانات بنجاح']);

    }



    public function editroles(int $getid){
        $this->gloableid =$getid;
        $resid = Role::find( $getid);

            $this->name = $resid->name;
            $this->premation = $resid->getAllPermissions()->pluck('name')->toArray();






    }


    public function updateroles(){


        $validatedData = $this->validate([
            'name' => 'required|min:3|unique:roles,name,'.$this->gloableid,

            'premation' => 'required',
        ]);

     $getrol =  Role::findOrFail($this->gloableid);

        $getrol->syncPermissions($this->premation);
        $getrol->update([

            'name'=>$this->name,

        ]);

        User::where('name',auth()->user()->name)->update([
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

        Role::destroy($this->idfordelete);
        $this->dispatchBrowserEvent('deletesuccess');

    }

    public function resetinput()
    {
        $this->name = "";
        $this->premation ="";
        $this->resetValidation();
        $this->resetErrorBag();
    }


}
