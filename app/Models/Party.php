<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    // step by step guide
    
    // 1.Table name
    protected $table = "parties";

    // 2.primary key
    protected $primaryKey = "id";

    // 3.Fillable columns
    protected $fillable = array('full_name', 'party_type', 'phone_no', 'city', 'address', 'account_holder_name', 'account_no', 'bank_name', 'ifsc_code', 'branch_address');

    // for database table relation function
    

}
