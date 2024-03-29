<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\walkinTransaction;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $selectedPeriod = 'daily';
    public $chartData=[];
    public $latestSales;
    public $data = [];
    public $labels = [];

    public $selectedProductAnalysis = "top";

    public $periodOptions = [
        'daily' => 'Daily Sales',
        'monthly' => 'Monthly Sales',
        'annual' => 'Annual Sales',
    ];

    public $options = [
        'responsive' => true,
        'maintainAspectRatio' => true,
        'plugins' => [
            'legend' => [
                'display' => false,
            ],
        ],
        'interaction' => [
            'intersect' => false,
            'mode' => 'index',
        ],
        'scales' => [
            'y' => [
                'grid' => [
                    'drawBorder' => false,
                    'display' => true,
                    'drawOnChartArea' => true,
                    'drawTicks' => false,
                    'borderDash' => [5, 5],
                    'color' => 'rgba(255, 255, 255, .2)',
                ],
                'ticks' => [
                    'display' => true,
                    'color' => '#f8f9fa',
                    'padding' => 10,
                    'font' => [
                        'size' => 14,
                        'weight' => 300,
                        'family' => 'Roboto',
                        'style' => 'normal',
                        'lineHeight' => 2,
                    ],
                ],
            ],
            'x' => [
                'grid' => [
                    'drawBorder' => false,
                    'display' => false,
                    'drawOnChartArea' => false,
                    'drawTicks' => false,
                    'borderDash' => [5, 5],
                ],
                'ticks' => [
                    'display' => true,
                    'color' => '#f8f9fa',
                    'padding' => 10,
                    'font' => [
                        'size' => 14,
                        'weight' => 300,
                        'family' => 'Roboto',
                        'style' => 'normal',
                        'lineHeight' => 2,
                    ],
                ],
            ],
        ],
    ];
    
    public function render()
    {  
        $pending = Order::where('status','pending')->get();

        $inProcess = Order::where('status','approved')->get();

        $userAccounts = User::where('access','0')->get();

        $month = date('m');
        $onlineSales = Order::where('status','completed')
                        ->whereMonth('updated_at', $month)
                        ->sum('amount');

        $walkinSales = walkinTransaction::whereMonth('updated_at', $month)
                                        ->sum('amount');
        
        $monthlySales = $onlineSales + $walkinSales;

        if($this->selectedProductAnalysis == "top"){
            $productAnalysis = Product::with('ratings')
                                ->select('products.*',DB::raw('AVG(ratings.star_rating) as avg_rating'))
                                ->leftJoin('ratings', 'products.id', '=', 'ratings.product_id')
                                ->groupBy('products.id','products.name')
                                ->orderBy('avg_rating', 'DESC')
                                ->havingRaw('AVG(ratings.star_rating) != 0')
                                ->get();
        }

        if($this->selectedProductAnalysis == "best"){
            $productAnalysis = Product::orderBy('quantity_sold','DESC')
                                ->where('quantity_sold','!=','0')
                                ->where('status','1')
                                ->where('products.expiry_date','>=',date('Y-m-d'))
                                ->get();
        }

        
        $this->chartData = $this->getDataForPeriod($this->selectedPeriod);
  
        
        return view('livewire.admin.dashboard',['pending' => $pending,'inProcess' => $inProcess,'userAccounts' => $userAccounts,'monthlySales' => $monthlySales,'productAnalysis' => $productAnalysis]);
    }

    private function getDataForPeriod($period)
    {
        $query = Order::where('status', 'completed');

        if ($period == 'daily') {
            $query->selectRaw('DATE(updated_at) as date, SUM(amount) as total_sales')
                ->groupByRaw('DATE(updated_at)')
                ->whereYear('updated_at', now()->year)
                ->latest('updated_at');
        } elseif ($period == 'monthly') {
            $query->selectRaw('DATE_FORMAT(updated_at, "%Y-%m") as date, SUM(amount) as total_sales')
                ->groupByRaw('DATE_FORMAT(updated_at, "%Y-%m")')
                ->whereYear('updated_at', now()->year)
                ->orderByRaw('DATE_FORMAT(updated_at, "%Y-%m")');
        } elseif ($period == 'annual') {
            $query->selectRaw('YEAR(updated_at) as date, SUM(amount) as total_sales')
                ->groupByRaw('YEAR(updated_at)')
                ->orderByRaw('YEAR(updated_at)');
        }

        $walkinTransactions = DB::table('walkin_transactions');

        if ($period == 'daily') {
            $walkinTransactions->selectRaw('DATE(updated_at) as date, SUM(amount) as total_sales')
                ->groupByRaw('DATE(updated_at)')
                ->whereYear('updated_at', now()->year)
                ->latest('updated_at');
        } elseif ($period == 'monthly') {
            $walkinTransactions->selectRaw('DATE_FORMAT(updated_at, "%Y-%m") as date, SUM(amount) as total_sales')
                ->groupByRaw('DATE_FORMAT(updated_at, "%Y-%m")')
                ->whereYear('updated_at', now()->year)
                
                ->orderByRaw('DATE_FORMAT(updated_at, "%Y-%m")');
        } elseif ($period == 'annual') {
            $walkinTransactions->selectRaw('YEAR(updated_at) as date, SUM(amount) as total_sales')
                ->groupByRaw('YEAR(updated_at)')
                ->orderByRaw('YEAR(updated_at)');
        }
        
        // if ($period == 'daily') {
        //     $queryResult = $query->unionAll($walkinTransactions)->get();

        //     // Combine rows with the same date and sum their total_sales
        //     $salesData = $queryResult->groupBy('date')->map(function ($group) {
        //         return [
        //             'date' => $group->first()->date,
        //             'total_sales' => $group->sum('total_sales'),
        //         ];
        //     })->sortByDesc('date')->values()->reverse()->slice(-7);
        // }else{
        //     $salesData = $query->unionAll($walkinTransactions)->groupBy('date')->limit(7)->get();
        // }
        $queryResult = $query->unionAll($walkinTransactions)->get();

            // Combine rows with the same date and sum their total_sales
            $salesData = $queryResult->groupBy('date')->map(function ($group) {
                return [
                    'date' => $group->first()->date,
                    'total_sales' => $group->sum('total_sales'),
                ];
            })->sortByDesc('date')->values()->reverse()->slice(-7);
        

        if ($period == 'daily') {
            $this->labels = $salesData->pluck('date');
            $this->latestSales = $salesData->slice(-1)->value('total_sales');
        } elseif ($period == 'monthly') {
            $this->labels = $salesData->pluck('date');
            $this->latestSales = $salesData->slice(-1)->value('total_sales');
        } elseif ($period == 'annual') {
            $this->labels = $salesData->pluck('date');
            $this->latestSales = $salesData->slice(-1)->value('total_sales');
        }

        $this->data = $salesData->pluck('total_sales');
    
        return [
            'labels' =>   $this->labels,
            'datasets' => [
                [
                'label'=>"Total Sales",
                'tension'=> '0',
                'borderWidth'=>' 0',
                'pointRadius'=> '5',
                'pointBackgroundColor' => "rgba(255, 255, 255, .8)",
                'pointBorderColor'=> "transparent",
                'borderColor'=> "rgba(255, 255, 255, .8)",
                'borderWidth'=> '4',
                'backgroundColor' => "transparent",
                'fill'=>true,
                'maxBarThickness'=>6 ,
                'data' =>  $this->data, 
                ],
            ],
        ];
    }

    
    public function updateChart()
    {
        // Fetch and update the chart data based on the selected period
        $this->chartData = $this->getDataForPeriod($this->selectedPeriod);

    // Emit a Livewire event to update the chart
    $this->emit('chartDataUpdated', $this->chartData, $this->options);
    //dd($this->chartData);
    }

  
    
}
