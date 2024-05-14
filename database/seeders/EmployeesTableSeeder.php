<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       DB::table('employees')->insert([
            ['name' => 'Tiger Nixon', 'salary' => 320800, 'age' => 61],
            ['name' => 'Garrett Winters', 'salary' => 170750, 'age' => 63],
            ['name' => 'Ashton Cox', 'salary' => 86000, 'age' => 66],
            ['name' => 'Cedric Kelly', 'salary' => 433060, 'age' => 22],
            ['name' => 'Airi Satou', 'salary' => 162700, 'age' => 33],
            ['name' => 'Brielle Williamson', 'salary' => 372000, 'age' => 61],
            ['name' => 'Herrod Chandler', 'salary' => 137500, 'age' => 59],
            ['name' => 'Rhona Davidson', 'salary' => 327900, 'age' => 55],
            ['name' => 'Colleen Hurst', 'salary' => 205500, 'age' => 39],
            ['name' => 'Sonya Frost', 'salary' => 103600, 'age' => 23],
            ['name' => 'Jena Gaines', 'salary' => 90560, 'age' => 30],
            ['name' => 'Quinn Flynn', 'salary' => 342000, 'age' => 22],
            ['name' => 'Charde Marshall', 'salary' => 470600, 'age' => 36],
            ['name' => 'Haley Kennedy', 'salary' => 313500, 'age' => 43],
            ['name' => 'Tatyana Fitzpatrick', 'salary' => 385750, 'age' => 19],
            ['name' => 'Michael Silva', 'salary' => 198500, 'age' => 66],
            ['name' => 'Paul Byrd', 'salary' => 725000, 'age' => 64],
            ['name' => 'Gloria Little', 'salary' => 237500, 'age' => 59],
            ['name' => 'Bradley Greer', 'salary' => 132000, 'age' => 41],
            ['name' => 'Dai Rios', 'salary' => 217500, 'age' => 35],
            ['name' => 'Jenette Caldwell', 'salary' => 345000, 'age' => 30],
            ['name' => 'Yuri Berry', 'salary' => 675000, 'age' => 40],
            ['name' => 'Caesar Vance', 'salary' => 106450, 'age' => 21],
            ['name' => 'Doris Wilder', 'salary' => 85600, 'age' => 23],
        ]);
    }
}
