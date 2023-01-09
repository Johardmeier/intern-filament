<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =[
        'first_name',
        'last_name',
        'slug',
        'ahv_nr',
        'birth_date',
        'remarks',
    ];

    public function details(){        return $this->hasMany(EmployeeDetails::class);     }
    public function salaries(){       return $this->hasMany(EmployeeSalaries::class);    }
    public function assignments(){    return $this->hasMany(EmployeeAssignments::class); }
    public function contracts(){      return $this->hasMany(Contracts::class);   }
    public function transactions(){  return $this->hasMany(EmployeeTransactions::class);    }

    public function receipts(){      return $this->hasMany(Receipts::class);   }

}
