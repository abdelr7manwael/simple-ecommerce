<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    //all customers

    function index(){
        $customers = Customer::get();
        return view('customers/list',['customers'=>$customers]);
    }

    function filter(){
        $customers = Customer::where('customerCity','=','cairo')->get();
        return view('customers/filter',['customers'=>$customers]);

    }
}
