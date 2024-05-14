<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    //protected $table = 'employees';
    
    //protected $primary_key = 'employee_id';
    
    //protected $table = 'employee_salary';
    
    //protected $table = 'employee_age';
    
    //protected $table = 'profile_image';
    
    //protected $guarded = [];
    
    public $employees;
    
    //public function department() {
        //return this->belongsTo(Department::class);
    //}
    
    //$employees = Employee::all(); 
}
