<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function addParty(){
        return view('parties.add');
    }

    //create party//
    public function createParty( Request $request ){

        // add form validation
        $request->validate([
            'party_type' => 'required',
            'full_name' => 'required|string|min:2|max:20',
            'phone_no' => 'required',
            'address' => 'required',
            'account_holder_name' => 'required',
            'account_no' => 'required',
            'bank_name' => 'required',
            'branch_address' => 'required'
        ]);
       
        $param = $request->all();

        // remove token
        unset($param["_token"]);

        Party::create($param);

        // redirect add party page with success message
        return redirect()->route('addParty')->withStatus("Party created successfully");

    }
    

    public function manageParty(){

        // get data from database//

        // $parties = Party::all(); 

        // get all parties with specific column //

        $parties = Party::select( 'id', 'full_name', 'party_type', 'phone_no', 'city', 'address', 'account_holder_name', 'account_no', 'bank_name', 'ifsc_code', 'branch_address')->get();

        return view('parties.manage', compact('parties'));
    }

// edit party//
public function editParty($party_id){

    $data['party'] = Party::find($party_id);

    return view('parties.editParty', $data);
}

// update party //
public function updateParty($id, Request $request ){
    // add form validation
    $request->validate([
        'party_type' => 'required',
        'full_name' => 'required|string|min:2|max:20',
        'phone_no' => 'required',
        'address' => 'required',
        'account_holder_name' => 'required',
        'account_no' => 'required',
        'bank_name' => 'required',
        'ifsc_code' => 'required',
        'branch_address' => 'required'
    ]);

   // Get all request data except '_token' and '_method'
   $param = $request->except(['_token', '_method']);

   // Update the data
   Party::where('id', $id)->update($param);

   return redirect()->route('manageParty')->withStatus("Party updated successfully");
}

public function deleteParty( Party $party ){

    $party->delete();

    return redirect()->route('manageParty')->withStatus("Party deleted successfully");

}

}


