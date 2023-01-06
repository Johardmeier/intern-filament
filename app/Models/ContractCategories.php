<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'factor',
        'remarks',
    ];

    public function contract_details(){
        $this->hasMany(ContractDetails::class);
    }

    public function assignment_types(){
        $this->hasMany(AssignmentTypes::class);
    }


}
