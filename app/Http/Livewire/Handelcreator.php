<?php

namespace App\Http\Livewire;


use App\Models\User;
use Livewire\Component;
use App\Models\addsconfig;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class Handelcreator extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,$password,
        $gobtitle,$phone,$time,$fathar,
        $cost_veiw,
        $cost_click;
      
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
        $this->gobtitle = "createtor";
        return view('livewire.handelcreator',

            ['userinfo' =>

                User::where('name', 'like', '%'.$this->search.'%')
                    ->where('gobtitle',$this->gobtitle )
                    ->orderBy('id',$this->orderby)
                    ->paginate($this->rownumber),
                'getfathar' => User::where('gobtitle','agent')->pluck('name')->all(),

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
//            'email' => 'unique:users,email',
//            'roles' => 'required',
            'fathar' => 'required',
            'cost_veiw'=>'required|numeric',
            'cost_click'=>'required|numeric',


        ]);
    }
    protected $messages = [
        'name.required' => 'اسم المستخدم مطلوب',
        'name.min' => 'اقل عدد للاحرف (3)',
        'name.unique' => 'اسم المستخدم مسجل من قبل',
        'email.unique' => ' البريد الالكتروني  مسجل من قبل',
        'fathar.required' => 'اختر وكيل علي الاقل اذا كان غير موجود في القائمه فا اضغط هنا  لاضافه وكيل اولا ..',
    ];

    public function createusers()
    {
     $this->validate([
            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name',

            'fathar' => 'required',
            'cost_veiw'=> 'required|numeric',
            'cost_click'=>  'required|numeric',

        ]);

        $getusers =   User::create([
            'name'=>$this->name,
//            'email'=>$this->email,
            'phone'=>$this->phone,
            'fathar'=>$this->fathar,
            'gobtitle'=>$this->gobtitle,
            'create_by'=>auth()->user()->name,
            'password'=>Hash::make($this->password),
        ]);

        addsconfig::create([
            'cost_click'=> $this->cost_click,
            'cost_veiw'=>  $this->cost_veiw,
             'c_name' => $this->name,
             'user_id' => $getusers->id,
        ]);
        $this->resetinput();
        $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم اضافه البيانات بنجاح']);

    }



    public function editusers(int $getid){
        $this->gloableid =$getid;
        $resid = User::find( $getid);


        $this->name = $resid->name;
       $this->fathar = $resid->fathar;
        $this->phone = $resid->phone;
        $getname = addsconfig::where('c_name',$resid->name)->first();
        $this->cost_veiw =$getname->cost_veiw;
        $this->cost_click =$getname->cost_click;


    }
    public  function  showdata($id){

        $data =   User::findOrFail($id);

        $this->name = $data->name;
        $this->time = substr($data->created_at,0,10);
        $this->phone = $data->phone;
        $this->fathar = $data->fathar;
        $getname = addsconfig::where('c_name',$data->name)->first();
        $this->cost_veiw =$getname->cost_veiw;
        $this->cost_click =$getname->cost_click;
   

    }

    public function updateusers(){

       $this->validate([
            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name,'.$this->gloableid,

           'fathar' => 'required',
           'cost_veiw'=>'required|numeric',
           'cost_click'=>'required|numeric',
        ]);

       if ($this->password == ""){

           $data =   User::findOrFail($this->gloableid);
           $this->password = $data->password;

       }else{
           $this->password =   Hash::make($this->password);
       }

        $getuser= User::findOrFail($this->gloableid);
        $conf = addsconfig::where('user_id',$this->gloableid)->first();

        $conf->update([
            'cost_veiw' => $this->cost_veiw ,
            'cost_click' => $this->cost_click,
            'c_name' => $this->name,
      
             ]);

        $getuser->update([

            'name'=>$this->name,
            'fathar'=>$this->fathar,
            'password'=> $this->password,

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

        $getusername= User::findOrFail($this->idfordelete);
        
        $getid = addsconfig::where('user_id',$this->idfordelete)->first();
        addsconfig::destroy($getid->id);
        User::destroy($this->idfordelete);
      

        $this->dispatchBrowserEvent('deletesuccess');

    }

    public function resetinput()
    {
        $this->name = "";
        $this->gobtitle = null;
        $this->phone = "";
        $this->password = "";
        $this->cost_click = "";
        $this->cost_veiw = "";
//        $this->roles=null;
        $this->fathar=null;
        $this->resetValidation();
        $this->resetErrorBag();
    }


}
