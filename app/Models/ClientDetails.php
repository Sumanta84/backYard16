<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDetails extends Model
{
    use HasFactory;
    protected $table = 'client_details';

    protected $fillable = [
        'name',
        'company_name',
        'ph_no',
        'email',
        'pan_no',
        'gst_no',
        'address',
        'created_by',
        'last_updated_by',
        'created_at',
        'updated_at',
    ];

    
}
