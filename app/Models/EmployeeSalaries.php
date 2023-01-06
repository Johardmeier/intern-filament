<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalaries extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'valid_from',
        'part_time_percent',
        'yearly_hours_net',
        'yearly_salary',
        'hourly_wage',
        'ahv_percent',
        'alv_percent',
        'nbu_percent',
        'nbu_percent',
        'bvg_yearly_amount',
        'remarks',
    ];

    public function employee(){ return $this->belongsTo(Employee::class); }

}
