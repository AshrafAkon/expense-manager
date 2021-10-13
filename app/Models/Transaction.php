<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowerRecord extends Model
{
    use HasFactory;
    protected $fillable = ['borrower_id', 'transaction_type_id', 'amount'];
}
