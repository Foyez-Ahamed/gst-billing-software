<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index(){

        // $name = 'Foyez Ahamed';
        // $phone = '01614145039';
        // $city ='Dhaka';

        // using compact
        // return view('welcome', compact('name', 'phone', 'city'));

        // using array
        // return view('welcome', array(
        //     'name' => $name,
        //     'phone' => $phone,
        //     'city' => $city,
        // ));

        // using associative array, it is the best option //
        // $data['name'] = 'Foyez Ahamed';
        // $data['phone'] = '01614145039';
        // $data['city'] = 'Dhaka';

        // use models (insert operation: Option one)
        // $party = new Party;
        // $party->full_name = "Foyez Ahamed";
        // $party->phone_no = "01614145039";
        // $party->save();

        // use models (insert operation: Option two by using associative arry)

        // $parm = array(
        //     "full_name" => "Suraiya Zaman",
        //     "phone_no" => "01980226189",
        //     "city" => "Dhaka",
        //     "address" => "Ashkona, Airport, Dhaka 1216"
        // );

        // Party::create($parm);

        // Now turn to get data that means select data //

        //select all_records
        // $get_parties = Party::all();
        // dd($get_parties);


        // select one data 
        // $id = 4;
        // $get_singleParty = Party::find($id);
        // dd($get_singleParty);


        // select one record by another column/field
        // $party = Party::where('city', 'dhaka')->get();
        // dd($party);


        // update table
        // $id = 1;
        // $party = Party::find($id);
        // $party->full_name = "Salman Saif";
        // $party->city = "Chottogram";
        // $party->phone_no = "01737864950";
        // $party->address = "New markte, ctg";
        // $party->save();


        // delete table
        // $id = 2;
        // $party = Party::find($id);
        // $party->delete();



        // ...............................//
        // use query builders//
        //................................//

        // insert data 
        // $add_data = array(
        //     "full_name" => "Afroza Bulbul Swity",
        //     "phone_no" => "01783843303",
        //     "city" => "Dhaka",
        //     "address" => "Ashkona, Dakkhinkhan, Dhaka"
        // );

        // DB::table('parties')->insert($add_data);


        // select data
        // $get_data = DB::table('parties')->get();

        // select specific data
        // $get_data = DB::table('parties')
        // ->where('city', "dhaka")
        // ->where('phone_no', "01783843303")
        // ->get();
        

        //update data
        // $param = array(
        //     "city" => "Chandpur",
        //     "address" => "Shahrasti, Chandpur"
        // );

        // DB::table('parties')
        // ->where('id', 3)
        // ->update($param);


        // delete data 
        // DB::table('parties')
        // ->where('id', 5)
        // ->delete();


        // return ("Database connection successfully");

        return view('dashboard');
        
    }


    // function for soft delete 

    public function delete($table, $id){
        
        $param = array( 'is_deleted' => 1 );

        DB::table($table)->where('id', $id)->update($param);

        return redirect()->back()->withStatus('Record deleted successfully');

    }
}
