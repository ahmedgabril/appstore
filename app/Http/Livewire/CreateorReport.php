<?php

namespace App\Http\Livewire;

use Carbon\Carbon;


use Google_Client;


// use Spatie\Analytics\Period;
use Livewire\Component;
use App\Models\addsconfig;
use Illuminate\Support\Str;
use Google_Service_Analytics;
use Google\Service\AnalyticsReporting;
use Google_Service_AnalyticsReporting;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google_Service_AnalyticsReporting_Metric;
use Google_Service_AnalyticsReporting_OrderBy;
use Google_Service_AnalyticsReporting_DateRange;
use Google_Service_AnalyticsReporting_Dimension;
use Google_Service_AnalyticsReporting_ReportRequest;
use Google_Service_AnalyticsReporting_GetReportsRequest;
use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;

class CreateorReport extends Component
{





    public $getreport_name;
    public $activeUsers;
    public $pagePaths = [];
    public $getrelres = [];
    public $getpagePath;
    public $clickprice,
    $gettotalvistorperclic,
    $gettotalvistorperveiw,
    $getviewprice,
    $getclickprice,
    $costveiw,
    $profet,
    $totalVisitors,
    $startDate,
    $endDate;

    public  function mount($name){
        $this->getreport_name = $name;
        $this->clickprice = addsconfig::where('c_name', $this->getreport_name)->first();

    }


    protected $listeners  =['getdata'];



  
    public function render()
    {


  
        return view('livewire.createor-report',[

            'getalldata'=> $this->getdata() ,

        ]);
    }




 public function getdata(){



        $client = new BetaAnalyticsDataClient(['credentials' =>storage_path('app/analytics/service-account-credentials.json')]);
        $property_id = '371758930';
    
  
        if($this->startDate == null && $this->endDate == null){
    
            $getdatestatus = [
                'start_date' => 'today',
                'end_date' => 'today',
            ];
          
     
     } else{
      
        $getdatestatus= [
            'start_date' =>$this->startDate ,
            'end_date' => $this->endDate,
        ];
    
    }
     
    
    
        $response = $client->runReport([
            'property' => 'properties/' . $property_id,
            'dateRanges' => [
                new DateRange($getdatestatus),
            ],
            'dimensions' => [
                // new Dimension([ 'name' => 'eventname', ]),
                // new Dimension([ 'name' => 'eventname', ]),
                new Dimension([ 'name' => 'pageLocation', ]),
    
            ],
            'metrics' => [
          
                // new Metric([ 'name' => 'eventCount', ]),
                new Metric([ 'name' => 'activeUsers', ]),
                // new Metric([ 'name' => 'eventcount', ]),
               
            ]
        ]);
        $totalVisitors =[];
        $totalVisitorsview =[];
    
     
    foreach ($response->getRows() as $row) {
    
    
         $pubValue = "";
        
         if ( $row->getDimensionValues()[0]->getValue()) {
             $getpub = parse_url(  $row->getDimensionValues()[0]->getValue(), PHP_URL_QUERY);
             $pattern = '/^.*?pub=([\w\-]+)/';
             if (preg_match($pattern, $getpub, $matches)) {
                 $pubValue = $matches[1];
    
      
             }
    
    
    
             if ($pubValue ==   $this->getreport_name && Str::contains($row->getDimensionValues()[0]->getValue(), "pagedownload"))
             
             {
               
                 $totalVisitors[] = $row->getMetricValues()[0]->getValue() ;
    
    
             } 
     
     
             if ($pubValue ==   $this->getreport_name && Str::contains($row->getDimensionValues()[0]->getValue(), "pageinfo"))
              {
               
               $totalVisitorsview[]= $row->getMetricValues()[0]->getValue() ; 
    
              
           
           } 
    
    
         }
    
    
        }
    
    
    
            $gettotalclick = array_sum($totalVisitors);
          $this->gettotalvistorperclic =  $gettotalclick ;
            $gettotalperveiw = array_sum($totalVisitorsview);
            $this->gettotalvistorperveiw =  $gettotalperveiw ;
           $getformat= $this->clickprice->cost_veiw / 1000 ;
            $getcostview = number_format( $getformat, 5, '.', '');
             $this->costveiw =      $getcostview;
    
            $getfinleresofclick = number_format(($gettotalclick * $this->clickprice->cost_click), 2);
            $this->getclickprice =     $getfinleresofclick ;
         
            $getfinleresoforview = number_format($gettotalperveiw  *  $getcostview, 5, '.', '');
           $this->getviewprice = $getfinleresoforview;
     
    
    
          $profet =   number_format($getfinleresofclick +  $getfinleresoforview, 5, '.', '');
    
           
        $this->profet = $profet;
    
    
    }
    
}
