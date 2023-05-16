<?php

namespace App\Http\Livewire;

// use Analytics;
use Carbon\Carbon;
use Google_Client;

// use Spatie\Analytics\Period;
use App\Models\User;
use Livewire\Component;
use App\Models\addsconfig;
use Illuminate\Support\Str;
use Google_Service_Analytics;
use App\Models\get_cretetor_detal;
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

class CreatetorProfile extends Component{

public $test;
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



protected $listeners  =['getdata'];


public function mount(){

    $this->clickprice = addsconfig::where('c_name',Auth()->user()->name)->first();
  

    
}
   

public function getdata(){

  
    $today = Carbon::today();
    $client = new BetaAnalyticsDataClient(['credentials' =>storage_path('app/analytics/service-account-credentials.json')]);
    $property_id = '371758930';




    if($this->startDate == null && $this->endDate == null){

        $getdatestatus = [
            'start_date' => $today->format('Y-m-d'),
            'end_date' => $today->format('Y-m-d'),
        ];
      
 
 } else{
  
    $getdatestatus= [
        'start_date' =>$this->startDate ,
        'end_date' => $this->endDate,
    ];

}

    $response = $client->runReport ([
        'property' => 'properties/' . $property_id,
        'dateRanges' => [
            new DateRange($getdatestatus),
        ],
        'dimensions' => [
   
            new Dimension([ 'name' => 'fullPageUrl', ]),

        ],
        'metrics' => [
      
    
            new Metric([ 'name' => 'activeUsers', ]),
           
        ],
    ]);
    $metadata = $response->getMetadata();


    $totalVisitors =[];
    $totalVisitorsview =[];

foreach ($response->getRows() as $row) {

dd( $row->getDimensionValues()[0]->getValue());
     $pubValue = "";
    
     if ( $row->getDimensionValues()[0]->getValue()) {
         $getpub = parse_url(  $row->getDimensionValues()[0]->getValue(), PHP_URL_QUERY);
         $pattern = '/^.*?pub=([\w\-]+)/';
         if (preg_match($pattern, $getpub, $matches)) {
             $pubValue = $matches[1];

          
         }



         if ($pubValue == Auth()->user()->name && Str::contains($row->getDimensionValues()[0]->getValue(), "pagedownload"))
         
         {
           
             $totalVisitors[] = $row->getMetricValues()[0]->getValue() ;


         } 
 
 
         if ($pubValue == Auth()->user()->name  && Str::contains($row->getDimensionValues()[0]->getValue(), "pageinfo"))
          {
           
           $totalVisitorsview[]= $row->getMetricValues()[0]->getValue() ; 

          
       
       } 


     }


    }



        $gettotalclick = array_sum($totalVisitors);
      $this->gettotalvistorperclic =  $gettotalclick ;
        $gettotalperveiw = array_sum($totalVisitorsview);
        $this->gettotalvistorperveiw =  $gettotalperveiw ;
       $getformat= $this->clickprice ->cost_veiw / 1000 ;
        $getcostview = number_format( $getformat, 5, '.', '');
         $this->costveiw = $getcostview;

        $getfinleresofclick = number_format(($gettotalclick * $this->clickprice->cost_click), 2);
        $this->getclickprice =  $getfinleresofclick ;
     
        $getfinleresoforview = number_format($gettotalperveiw  *  $getcostview, 5, '.', '');
       $this->getviewprice = $getfinleresoforview;
 


      $profet =   number_format($getfinleresofclick +  $getfinleresoforview, 5, '.', '');

       
    $this->profet = $profet;



//     $viewId = '288962352'; // Replace with your actual view ID


//     $client = new Google_Client();
//     $client->setAuthConfig(storage_path('app/analytics/service-account-credentials.json'));
//     $client->setScopes([
//         'https://www.googleapis.com/auth/analytics.readonly',
//     ]);
//     $analytics = new Google_Service_AnalyticsReporting($client);

//     // Create date range for the query
//     $dateRange = new Google_Service_AnalyticsReporting_DateRange();
// if($this->startDate && $this->endDate){
//     $dateRange->setStartDate($this->startDate);  
//     $dateRange->setEndDate($this->endDate);

// }else{

//     $dateRange->setStartDate('today');  
//     $dateRange->setEndDate('today');   
// }

//     // Define dimension for page path
//     $dimension = new Google_Service_AnalyticsReporting_Dimension();
//     $dimension->setName('ga:pagePath');

//     // Define metric for total users
//     $metric = new Google_Service_AnalyticsReporting_Metric();
//     $metric->setExpression('ga:users');

//     // Create report request
//     $request = new Google_Service_AnalyticsReporting_ReportRequest();
//     $request->setViewId($viewId);
//     $request->setDateRanges([$dateRange]);
//     $request->setDimensions([$dimension]);
//     $request->setMetrics([$metric]);
//     $request->setOrderBys([
//         new Google_Service_AnalyticsReporting_OrderBy([
//             'fieldName' => 'ga:pagePath',
//             'sortOrder' => 'DESCENDING',
        
//         ]),
//     ]);
//     $request->setPageSize(30000);

//     // Prepare the batch request
//     $getReportsRequest = new Google_Service_AnalyticsReporting_GetReportsRequest();
//     $getReportsRequest->setReportRequests([$request]);

//     // Execute the query
//     // Execute the query
// $reports = $analytics->reports->batchGet($getReportsRequest);
// $rows = $reports[0]->getData()->getRows();

// $results = [];

// if (!empty($rows)) {
//     foreach ($rows as $row) {
//         $pagePath = $row->getDimensions()[0];
//         $totalVisitors = $row->getMetrics()[0]->getValues()[0];
        
//         $results[] = [
//             'pagePath' => $pagePath,
//             'totalVisitors' => $totalVisitors,
           
//         ];
//     }
// }


// $this->getrelres = $results;

}

 


    public function getuserdata(){

        $client = new Google_Client();
        $client->setApplicationName('My Laravel App');
        $client->setAuthConfig(storage_path('app/analytics/service-account-credentials.json'));
        $client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);
      
        $analytics = new Google_Service_Analytics($client);
        $viewId = '288962352'; // Replace with your Google Analytics view ID
 
        // $response = $analytics->data_realtime->get(
        //     'ga:' . $viewId,
        //     'rt:activeUsers'
        // );
        // $this->activeUsers = $response->totalsForAllResults['rt:activeUsers'];
        
        // Query for real-time page location data
          $response = $analytics->data_realtime->get(
                'ga:' . $viewId,
         
                'rt:activeUsers',
                [
                    'dimensions' => 'rt:pagePath,rt:pageTitle', 
                    // 'filters'    => 'rt:pagePath==pub=' . Auth()->user()->name,
                ],
            );
            $this->pagePaths = collect($response->rows)
            ->map(function ($row) {
                return [
                    'pagePath' => $row[0],
                    'pageTitle' => $row[1],
                    'users' => $row[2],
                ];
            })
            ->toArray();
      
      
        
    }
    public function render()
    {
   
        $today = Carbon::today();

        // Get the start date of the current month
        $startOfMonths = Carbon::now()->startOfMonth();
        
        // Compare the two dates to check if today is the first day of the current month
        $isFirstDayOfMonth = $today->eq($startOfMonths);
        
        // Use the $isFirstDayOfMonth variable to determine the next actions in your code
      

        $client = new BetaAnalyticsDataClient(['credentials' =>storage_path('app/analytics/service-account-credentials.json')]);
        $property_id = '371758930';

  
        $startOfMonth = Carbon::now()->subMonth()->startOfMonth();

        // Get the end date of last month
        $endOfMonth = Carbon::now()->subMonth()->endOfMonth();
        
        // Format the dates as strings in the desired format
        $startDateString = $startOfMonth->format('Y-m-d');
        $endDateString = $endOfMonth->format('Y-m-d');

        if ($isFirstDayOfMonth) {
    

        $response = $client->runReport([
            'property' => 'properties/' . $property_id,
            'dateRanges' => [
                new DateRange([
                    'start_date' =>$startDateString ,
                    'end_date' => $endDateString,
                ]),
            ],
            'dimensions' => [
                // new Dimension([ 'name' => 'eventname', ]),
                new Dimension([ 'name' => 'pageLocation', ]),

            ],
            'metrics' => [
          
                new Metric([ 'name' => 'activeUsers', ]),
                // new Metric([ 'name' => 'eventcount', ]),
               



            ]
        ]);


        $totalVisitors =0 ;
        $totalVisitorsview =0;
    foreach ($response->getRows() as $row) {
         $pubValue = "";
         if ( $row->getDimensionValues()[0]->getValue()) {
             $getpub = parse_url(  $row->getDimensionValues()[0]->getValue(), PHP_URL_QUERY);
             $pattern = '/^.*?pub=([\w\-]+)/';
             if (preg_match($pattern, $getpub, $matches)) {
                 $pubValue = $matches[1];

           
             }

             if ($pubValue == Auth()->user()->name && Str::contains($row->getDimensionValues()[0]->getValue(), "pagedownload"))
             
             {
               
                 $totalVisitors = $row->getMetricValues()[0]->getValue() ;

   
             } 
     
     
             if ($pubValue == Auth()->user()->name && Str::contains($row->getDimensionValues()[0]->getValue(), "pageinfo"))
              {
               
               $totalVisitorsview = $row->getMetricValues()[0]->getValue() ; 

            } 



          }
        }

    $getcostperclick = $this->clickprice->cost_click ;
    $getcostperveiw = $this->clickprice ->cost_veiw / 1000 ;
    $getcost = number_format($getcostperveiw, 5, '.', '');


    $getfileresofveiw = number_format( $totalVisitorsview *  $getcost, 5, '.', '');

    $getfinleresofclick = number_format(($totalVisitors * $getcostperclick), 2);

   $profet = number_format(($getfinleresofclick  + $getfileresofveiw), 2);
   $getfathername = User::where('name',Auth()->user()->name)->select('fathar')->first();
 $count =1;
  for ($i=0; $i <= $count ; $i++) { 
    get_cretetor_detal::create([
        'totalprofet'=>  $profet,
        'totalvistor'=> $totalVisitorsview,
        'totalclick'=> $totalVisitors,
        'createtor_name'=> Auth()->user()->name,
        'agent_name'=>  $getfathername->fathar,
        'date'=> Carbon::now()->format('Y-m-d'),
     
         ]);
  }

}    

  
   


        $this->getdata();
        $this->getuserdata();
    
     
        return view('livewire.createtor-profile',[

  


        ]);
        

       }
    }