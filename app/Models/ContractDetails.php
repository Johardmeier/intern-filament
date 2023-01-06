<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDetails extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_contract_id',
        'contract_category_id',
        'month',
        'hours',
        'remarks',
    ];

    public function contract(){
        $this->belongsTo(Contracts::class);
    }
    public function contract_category(){
        $this->belongsTo(ContractCategories::class);
    }

}
