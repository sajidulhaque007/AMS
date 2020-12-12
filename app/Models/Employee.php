<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'emp_name',
        'emp_role',
        'badge_no',
               
    ];
    public function dep()
    {
        return $this->hasOne(Department::class,'id','id');
    }
}
