<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillClient extends Model
{
    use HasFactory;
    protected $table = 'bill_client';
    protected $primaryKey = 'id';

    
}
