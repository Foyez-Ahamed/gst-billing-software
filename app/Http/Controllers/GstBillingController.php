<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GstBillingController extends Controller
{
    public function createBill(){
        return view('gstBilling.create_bill');
    }

    public function manageBill(){
        return view('gstBilling.manage_bill');
    }
    
    public function print(){
        return view('gstBilling.print');
    }
}
