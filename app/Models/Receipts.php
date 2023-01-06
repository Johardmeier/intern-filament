<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipts extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'date',
        'title',
        'paid_by',
        'amount',
        'picture_link',
        'accounting_nr',
        'accounting_text',
        'remarks',
    ];

    public function employee(){ return $this->belongsTo(Employee::class); }

}
