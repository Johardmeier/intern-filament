<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentGroups extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'assignment_type_id',
        'remarks',
    ];

    public function assignment_type(){
        return $this->belongsTo(AssignmentTypes::class);
    }

    public function assignments(){
        return $this->hasMany(Assignments::class);
    }

}
