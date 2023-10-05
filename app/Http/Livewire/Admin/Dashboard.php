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
    public $month;
    public $year;
    public $day;
    public $toShow = 'daily';
    public $data=[];

    public function setToShow($key){
        if($key == '1'){
            $this->toShow = 'daily';
        }
        if($key == '2'){
            $this->toShow = 'monthly';
        }
        if($key == '3'){
            $this->toShow = 'annually';
        }
    } 

    public function showDaily(){
        $this->day = date('d');
        $this->month = date('m');
        $this->year = date('Y');
        $this->data = array_diff($this->data,$this->data);
        for($i =1; $i <= 7; $i++){
            
            $dailySales = Order::where('status','completed')
                        ->whereDay('updated_at', $this->day)
                        ->whereMonth('updated_at', $this->month)
                        ->whereYear('updated_at',$this->year)
                        ->sum('amount');
            array_push($this->data,$dailySales);

            $this->day--;
        }
        //dd(json_encode($this->data));
        //dd($this->data);
    }

    public function showMonthly(){
        $this->day = date('d');
        $this->month = date('m');
        $this->year = date('Y');
        $this->data = array_diff($this->data,$this->data);
        for($i =1; $i <= 7; $i++){
           
            $sales = Order::where('status','completed')
                        ->whereMonth('updated_at', $this->month)
                        ->whereYear('updated_at',$this->year)
                        ->sum('amount');
            
            array_push($this->data,$sales);

            $this->month--;
            
        }
        $this->dispatchBrowserEvent('updateChart');
           // dd($this->data);
    }

    public function showAnnually(){
        $this->day = date('d');
        $this->month = date('m');
        $this->year = date('Y');
        $this->data = array_diff($this->data,$this->data);
        
        for($i =1; $i <= 7; $i++){
           
            $sales = Order::where('status','completed')
                        ->whereDay('updated_at', '00')
                        ->whereYear('updated_at', $this->year)
                        ->sum('amount');
           
            array_push($this->data,$sales);

            $this->year--;
        }
    }



    public function render()
    {  
        if($this->toShow == 'daily'){
            $this->showDaily();
        }
        if($this->toShow == 'monthly'){
            $this->showMonthly();
        }
        if($this->toShow == 'annually'){
            $this->showAnnually();
        }
        $pending = Order::where('status','pending')->get();

        $inProcess = Order::where('status','approved')->get();

        $userAccounts = User::where('access','0')->get();

        $this->month = date('m');
        $onlineSales = Order::where('status','completed')
                        ->whereMonth('updated_at', $this->month)
                        ->sum('amount');

        $walkinSales = walkinTransaction::whereMonth('updated_at', $this->month)
                                        ->sum('amount');
        
        $monthlySales = $onlineSales + $walkinSales;

        $rec_products = Product::with('ratings')
                                ->select('products.*',DB::raw('AVG(ratings.star_rating) as avg_rating'))
                                ->leftJoin('ratings', 'products.id', '=', 'ratings.product_id')
                                ->groupBy('products.id','products.name')
                                ->orderBy('avg_rating', 'DESC')
                                ->havingRaw('AVG(ratings.star_rating) != 0')
                                ->get();

        $best_products = Product::orderBy('quantity_sold','DESC')
                                ->where('quantity_sold','!=','0')
                                ->where('status','1')
                                ->where('products.expiry_date','>=',date('Y-m-d'))
                                ->get();
        
      

        
        return view('livewire.admin.dashboard',['pending' => $pending,'inProcess' => $inProcess,'userAccounts' => $userAccounts,'monthlySales' => $monthlySales,'recommendedProducts' => $rec_products, 'bestProducts' => $best_products]);
    }

    
   

    
}
