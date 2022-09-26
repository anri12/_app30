<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Country;

use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function show(){
        $customer = Customer::with('country')->get();
        $country = Country::with('customers')->get();

        return view('index', compact('customer','country'));
    }


    function add(){
        $country = Country::all();

        return view('addUser', compact('country'));
    }

    public function insert(Request $request){
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->country_id  = $request->input('country');
        $customer->date = $request->input('date');
        $customer->save();
        return redirect('/')->with('status','data saved');

    }

    
}





