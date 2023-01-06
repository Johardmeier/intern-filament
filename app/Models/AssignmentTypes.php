<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'employees_needed',
        'default_planned_hours',
        'default_contract_category_id',
        'remarks',
    ];

    public function default_contract_category(){
        return $this->belongsTo(ContractCategories::class,'default_contract_category_id');
    }

    public function assignment_groups(){
        return $this->hasMany(AssignmentGroups::class);
    }

}
