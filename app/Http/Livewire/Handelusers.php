<?php

namespace App\Http\Livewire;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Handelusers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,$email,$password,
        $gobtitle ="admin",$phone,$time;
    public $roles=[];
    public $perm =[] ;
    public $datainfo=[];
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
        $this->gobtitle = "admin";

        return view('livewire.handelusers',
            ['userinfo' =>
                User::where('name', 'like', '%'.$this->search.'%')
                    ->where('gobtitle',$this->gobtitle )
                    ->orderBy('id',$this->orderby)
                    ->paginate($this->rownumber),
            'getroles' => Role::all()->pluck('name')->toArray(),

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

            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name',
            'email' => 'unique:users,email',
            'roles' => 'required',

        ]);
    }
    protected $messages = [
        'name.required' => 'اسم المستخدم مطلوب',
        'name.min' => 'اقل عدد للاحرف (3)',
        'name.unique' => 'اسم المستخدم مسجل من قبل',
//        'email.required' => 'البريد الالكتروني مطلوب',
        'name.unique' => ' البريد الالكتروني  مسجل من قبل',
        'roles.required' => 'اختر وضيفه علي الاقل اذا كان غير موجود وظائف فا اضغط هنا  لاضافه وظيفه اولا ..',
    ];

    public function createusers()
    {

        $validatedData = $this->validate([
            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name',
            'email' => 'unique:users,email',
            'roles' => 'required',
        ]);

      $getusers =   User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'gobtitle'=> $this->gobtitle,
            'password'=>Hash::make($this->password),
           'create_by'=>auth()->user()->name,

      ]);

        $getusers->syncRoles($this->roles);
        $this->resetinput();
        $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم اضافه البيانات بنجاح']);

    }



    public function editusers(int $getid){
        $this->gloableid =$getid;
        $resid = User::find( $getid);


            $this->name = $resid->name;
            $this->email = $resid->email;
            $this->phone = $resid->phone;
            $this->roles = $resid->getRoleNames()->toArray();


    }
        public  function  showdata($id){

          $data =   User::findOrFail($id);

             $this->name = $data->name;
             $this->time = substr($data->created_at,0,10);
             $this->phone = $data->phone;
            $this->datainfo = $data->getRoleNames()->toArray();
         $this->perm =  $data->getAllPermissions()->pluck('name')->toArray();

        }

    public function updateusers(){

      $this->validate([
            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name,'.$this->gloableid,
            'email' => 'unique:users,email,'.$this->gloableid,
            'roles' => 'required',
        ]);

        $getuser= User::findOrFail($this->gloableid);

        $getuser->syncRoles($this->roles);

        $getuser->update([

            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
           'gobtitle'=>$this->gobtitle,
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

        User::destroy($this->idfordelete);
        $this->dispatchBrowserEvent('deletesuccess');

    }

    public function resetinput()
    {
        $this->name     = "";
        $this->gobtitle = "";
        $this->email    = "";
        $this->phone    = "";
        $this->password = "";
        $this->roles    ="";
        $this->resetValidation();
        $this->resetErrorBag();
    }


}
