<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillGst extends Model
{
    use HasFactory;
    protected $table = 'bill_gst';

    protected $fillable = [
        'invoice_id',
        'bill_unique_id',
        'cgst_percentage',
        'sgst_percentage',
        'igst_percentage',
        'total_amt',
        'sgst_amt',
        'cgst_amt',
        'igst_amt',
        'total_gst_amt',
        'net_total',
        'financial_year',
        'order_date',
        'place_of_supply',
        'vehicle_no',
        'invoice_date',
        'order_no',
        'tax_reverse_charge',
        'invoice_no',
        'invoice_type'
    ];
}
