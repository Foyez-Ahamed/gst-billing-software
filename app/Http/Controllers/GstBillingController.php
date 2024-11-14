<?php

namespace App\Http\Controllers;

use App\Models\GstBill;
use App\Models\Party;
use Illuminate\Http\Request;

class GstBillingController extends Controller
{
    
    public function createBill(){

        $data['parties'] = Party::where('party_type', 'client')->orderBy('full_name')->get();

        return view('gstBilling.create_bill', $data);
    }


    // gst-billing index file all relation logic will be shared here //
    public function manageBill(){

        $bills = GstBill::where('is_deleted', 0)->with('party')->get();

        return view('gstBilling.manage_bill', compact('bills'));
    }
    
    public function print($id){

        $data['bill'] = GstBill::where('id', $id)->with('party')->first();
        
        return view('gstBilling.print', $data);

    }


    // ...............................//

    public function create_gst_bill( Request $request ){

        // form validation
        $request->validate([
            'party_id' => 'required',
            'invoice_date' => 'required| date',
            'invoice_no' => 'required',
            'item_description' => 'required',
            'total_amount' => 'required',
        ]);

        $param = $request->all();

        // remove token from post data before inserting
        unset($param['_token']);

        GstBill::create($param);

        // redirect
        return redirect()-> route('manageBill')->withStatus('Bill created successfully');
       
    }


    

}
