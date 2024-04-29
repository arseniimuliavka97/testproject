<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestApiExampleController extends Controller
{
    public function getAllEmployees()
    {
        $url = 'https://dummy.restapiexample.com/api/v1/employees';
        $response = file_get_contents($url);
        return $response;
    }
}
