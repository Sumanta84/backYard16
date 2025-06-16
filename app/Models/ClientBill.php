<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientBill extends Model
{
    use HasFactory;
    protected $table = 'client_bill';

    // protected $fillable = [
    //     'invoice_id',
    //     'bill_client_id',
    //     'bill_unique_id',
    //     'project_title',
    //     'bil_type',
    //     'bill_work_type2_id',
    //     'quantity',
    //     'rate',
    //     'total_amt',
    //     'description',
    //     'bill_created_by',
    //     'created_at',    
    // ];

}
