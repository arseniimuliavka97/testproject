<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;
use GuzzleHttp\Client;

class ImportEmployees extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:employees';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports employees from an external API';
    
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new CLient();
        $response = $client->get('https://dummy.restapiexample.com/api/v1/employees');
        $data = \json_decode($response->getBody()->getContents(), true);
        
        foreach ($data['data'] as $employeeData) {
        Employee::create([
            'employee_name' => $employeeData['employee_name'],
            'employee_salary' => $employeeData['employee_salary'],
            'employee_age' => $employeeData['employee_age'],
         ]);
      }
      
      $this->info('Employees imported succesfully');
    }
}
