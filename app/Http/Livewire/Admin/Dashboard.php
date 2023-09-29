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
    public $toShow;
    public $data=[];


    public function showDaily(){
        $this->day = date('d');
        $this->month = date('m');
        $this->year = date('Y');
        $this->toShow = 'daily';
        $this->data = array_diff($this->data,$this->data);
        for($i =1; $i <= 7; $i++){
            
            $dailySales = Order::where('status','completed')
                        ->whereDay('created_at', $this->day)
                        ->whereMonth('created_at', $this->month)
                        ->whereYear('created_at',$this->year)
                        ->sum('amount');
            array_push($this->data,$dailySales);

            $this->day--;
        }
    }

    public function showMonthly(){
       
        $this->toShow = 'monthly';
        $this->data = array_diff($this->data,$this->data);
        for($i =1; $i <= 7; $i++){
           
            $sales = Order::where('status','completed')
                        ->whereMonth('created_at', $this->month)
                        ->whereYear('created_at',$this->year)
                        ->sum('amount');
            
            array_push($this->data,$sales);

            $this->month--;
        }
   
    }

    public function showAnnually(){
        $this->toShow = 'annually';
        $this->data = array_diff($this->data,$this->data);
        
        for($i =1; $i <= 7; $i++){
           
            $sales = Order::where('status','completed')
                        ->whereYear('created_at', $this->year)
                        ->sum('amount');
           
            array_push($this->data,$sales);

            $this->year--;
        }
    }



    public function render()
    {  
        $this->showDaily();
        $pending = Order::where('status','pending')->get();

        $inProcess = Order::where('status','approved')->get();

        $userAccounts = User::where('access','0')->get();

        $this->month = date('m');
        $onlineSales = Order::where('status','completed')
                        ->whereMonth('created_at', $this->month)
                        ->sum('amount');

        $walkinSales = walkinTransaction::whereMonth('created_at', $this->month)
                                        ->sum('amount');
        
        $monthlySales = $onlineSales + $walkinSales;

        $rec_products = Product::with('ratings')
                                ->orderBy(Rating::select('star_rating')->whereColumn('products.id', 'ratings.product_id'), 'DESC')
                                ->where(Rating::select('star_rating')->whereColumn('products.id', 'ratings.product_id'),'!=','0')
                                ->where('products.status','1')
                                ->where('expiry_date','>=',date('Y-m-d'))
                                ->get();

        $best_products = Product::orderBy('quantity_sold','DESC')->where('quantity_sold','!=','0')->where('status','1')->get();
        
      

        
        return view('livewire.admin.dashboard',['pending' => $pending,'inProcess' => $inProcess,'userAccounts' => $userAccounts,'monthlySales' => $monthlySales,'recommendedProducts' => $rec_products, 'bestProducts' => $best_products, 'data' => $this->data,'toShow' => $this->toShow]);
    }

    
   

    
}
