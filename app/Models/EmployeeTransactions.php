<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTransactions extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'title',
        'entry_date',
        'amount',
        'Remarks',
    ];

    public function employee(){ return $this->belongsTo(Employee::class); }

}
