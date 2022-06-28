<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hr\HrEmployee;
use App\Charts\Hr\DepartmentChart;
use Illuminate\Support\Facades\Auth;
use App\DataTables\Leave\LeaveBalanceDataTable;
//use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function test(LeaveBalanceDataTable $dataTable)
    // {
       
    //     return $dataTable->render('test');
    // }

    public function index()
    {


       
        return view('dashboard.dashboard');
    }

}
