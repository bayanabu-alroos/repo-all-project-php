<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sales;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Notifications\StockAlert;
use App\Events\ProductReachedLowStock;

class DashboardController extends Controller
{
    public function index(){   
        $title = "dashboard";
        
        $total_purchases = Purchase::where('expiry_date','=',Carbon::now())->count();
        $total_categories = Category::count();
        $total_suppliers = Supplier::count();
        $total_sales = Sales::count();
        $least_of_stock = Purchase::count(); 
             $str=Purchase::orderBy('quantity', 'desc')->first('name');
        $newestUser = str_replace(array( '\'', '"', ',' , '"', '{', '}' ), '', $str);

        $new=(int) filter_var(Purchase::orderBy('quantity', 'Asc')->first('quantity'), FILTER_SANITIZE_NUMBER_INT);

        
        $pieChart = app()->chartjs
                ->name('pieChart')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Total Purchases', 'Total Suppliers','Total Sales'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB','#7bb13c'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#7bb13c'],
                        'data' => [$total_purchases, $total_suppliers,$total_sales,$newestUser,$new  ]

                    ]
                ])
                ->options([]);
        
                
        
        $total_expired_products = Purchase::whereDate('expiry_date', '=', Carbon::now())->count();
        $latest_sales = Sales::whereDate('created_at','=',Carbon::now())->get();
        $today_sales = Sales::whereDate('created_at','=',Carbon::now())->sum('total_price');
        return view('dashboard',compact(
            'title','pieChart','total_expired_products',
            'latest_sales','today_sales','total_categories','newestUser','new'
        ));
    }
}
