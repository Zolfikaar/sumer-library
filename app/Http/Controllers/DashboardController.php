<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $data = [
            'bookCount' => Book::count(),
            'totalBookCost' => Book::sum('buy_price'),
            'totalSalesRevenue' => Book::sum('sell_price'),
            'categoriesCount' => Category::count(),
            'authorsCount' => Author::count(),
            'ordersCount' => Order::count(),
            'usersCount' => User::count(),
        ];

        $data['netProfit'] = $data['totalSalesRevenue'] - $data['totalBookCost'];

        return view('admin.dashboard', $data);
    }
}
