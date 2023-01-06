<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    use HasFactory;

    protected $fillable=[
        'start',
        'title',
        'assignment_group_id',
        'assignment_type_id',
        'planned_hours',
        'planned_employee_count',
        'remarks',
    ];

    public function assignment_group(){
        return $this->belongsTo(AssignmentGroups::class);
    }

    public function employee_assignment(){
        return $this->hasMany(EmployeeAssignments::class);
    }

}
