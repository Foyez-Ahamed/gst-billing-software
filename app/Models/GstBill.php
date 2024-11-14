<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GstBill extends Model
{
    use HasFactory;

    // table name 
    protected $table = "gst_bills";

    // primary key
    protected $primaryKey = "id";

    // fillable columns
    protected $fillable = array(
        'party_id',
        'invoice_date',
        'invoice_no',
        'item_description',
        'total_amount',
        'cgst_rate',
        'sgst_rate',
        'igst_rate',
        'cgst_amount',
        'sgst_amount',
        'igst_amount',
        'tax_amount',
        'net_amount',
        'declaration'
    );

    // for database table ralation function
    public function party(){
        return $this->belongsTo(Party::class);
    }
}
