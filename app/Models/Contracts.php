<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'title',
        'valid_from',
        'remarks',
    ];

    public function employee(){ return $this->belongsTo(Employee::class); }
    public function details(){ return $this->hasMany(ContractDetails::class);}

}
