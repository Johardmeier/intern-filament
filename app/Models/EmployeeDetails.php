<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'valid_from',
        'iban_nr',
        'address',
        'zipcode',
        'city',
        'mobile',
        'remarks',
    ];

    public function employee(){ return $this->belongsTo(Employee::class); }
}
