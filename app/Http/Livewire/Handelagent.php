<?php

namespace App\Http\Livewire;


use Analytics;
use Carbon\Carbon;
use App\Models\User;

use App\Models\get_cretetor_detal;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\Hash;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;

class Handelagent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,$password,
        $gobtitle,$phone,$time,
        $totalProfits,
        $getcd=[];
    public $getcr=[];
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




        // $client = new BetaAnalyticsDataClient(['credentials' =>storage_path('app/analytics/service-account-credentials.json')]);
        // $property_id = '371758930';

  
        // $startOfMonth = Carbon::now()->subMonth()->startOfMonth();

        // // Get the end date of last month
        // $endOfMonth = Carbon::now()->subMonth()->endOfMonth();
        
        // // Format the dates as strings in the desired format
        // $startDateString = $startOfMonth->format('Y-m-d');
        // $endDateString = $endOfMonth->format('Y-m-d');
        // $response = $client->runReport([
        //     'property' => 'properties/' . $property_id,
        //     'dateRanges' => [
        //         new DateRange([
        //             'start_date' => 'today',
        //             'end_date' => 'today',
        //         ]),
        //     ],
        //     'dimensions' => [
        //         // new Dimension([ 'name' => 'eventname', ]),
        //         // new Dimension([ 'name' => 'eventname', ]),
        //         new Dimension([ 'name' => 'pageLocation', ]),

        //     ],
        //     'metrics' => [
          
        //         // new Metric([ 'name' => 'eventCount', ]),
        //         new Metric([ 'name' => 'activeUsers', ]),
        //         // new Metric([ 'name' => 'eventcount', ]),
               



        //     ]
        // ]);
    


           $this->gobtitle = "agent";
        return view('livewire.handelagent',

            [
                
                'userinfo' =>

           User::where('name', 'like', '%'.$this->search.'%')
               ->where('gobtitle',$this->gobtitle )
                ->orderBy('id',$this->orderby)
                ->paginate($this->rownumber),

                // 'getlastmanth' => $response,

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

        ]);
    }
    protected $messages = [
        'name.required' => 'اسم المستخدم مطلوب',
        'name.min' => 'اقل عدد للاحرف (3)',
        'name.unique' => 'اسم المستخدم مسجل من قبل',
    ];

    public function createusers()
    {

        $validatedData = $this->validate([
            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name',
        ]);

        $getusers =   User::create([
            'name'=>$this->name,
            'phone'=>$this->phone,
            'gobtitle'=>$this->gobtitle,
            'create_by'=>auth()->user()->name,

            'password'=>Hash::make($this->password),
        ]);

        $this->resetinput();
        $this->dispatchBrowserEvent('closemodel',['mesg'=>'تم اضافه البيانات بنجاح']);

    }



    public function editusers(int $getid){
        $this->gloableid =$getid;
        $resid = User::find( $getid);


        $this->name = $resid->name;
        $this->phone = $resid->phone;


    }

    public function getprofit($getcname){

        
        $this->getcd = get_cretetor_detal::where('createtor_name',$getcname)->select('totalprofet','totalclick','totalvistor')->get();

  
        // $this->totalProfits = collect($this->getcd)->sum('totalprofet');


    }
    public  function  showdata($id){

        $data =   User::findOrFail($id);
         
   
       $getallcretetor = User::where('fathar',$data->name)->get()->pluck('name')->toArray();
       $this->getcr = $getallcretetor;
  
     $getd= get_cretetor_detal::where('agent_name',$data->name)->select('totalprofet')->get();
 
  
       $this->totalProfits = collect($getd)->sum('totalprofet');
      $this->name = $data->name;
        $this->time = substr($data->created_at,0,10);
        $this->phone = $data->phone;
       

      

    }

    public function updateusers(){

        $validatedData = $this->validate([
            'name' => 'required|min:3|regex:/^\S*$/u|unique:users,name,'.$this->gloableid,

        ]);
        if ($this->password == ""){

            $data =   User::findOrFail($this->gloableid);
            $this->password = $data->password;

        }else{
            $this->password =   Hash::make($this->password);
        }

        $getuser= User::findOrFail($this->gloableid);


        $getuser->update([

            'name'=>$this->name,
            'phone'=>$this->phone,
          'gobtitle'=>$this->gobtitle,
            'password'=>$this->password,
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
        $this->name = "";
        $this->gobtitle = "";
        $this->phone = "";
        $this->password = "";
        $this->resetValidation();
        $this->resetErrorBag();
    }


}
