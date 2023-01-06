<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAssignments extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'assignment_id',
        'planned_hours',
        'flat_rate',
        'worked_hours',
        'sick_hours',
        'forfeited_hours',
        'cancelled_hours',
        'reported_hours',
        'crediting_reason',
        'expenses',
        'expenses_text',
        'remarks',
    ];



    public function employee(){ return $this->belongsTo(Employee::class); }
    public function assignment(){ return $this->belongsTo(Assignments::class); }

}
