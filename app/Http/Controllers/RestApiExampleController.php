<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestApiExampleController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $transformedEmployees = $employees->map(function ($employee) {
            return [
                'id' => $employee->id,
                'employee_name' => $employee->name,
                'employee_salary' => $employee->salary,
                'employee_age' => $employee->age,
                'profile_image' => ""
            ];
        });
        $response = [
            'status' => 'success',
            'data' => $transformedEmployees
        ];
        return response()->json($response);
    }
}
