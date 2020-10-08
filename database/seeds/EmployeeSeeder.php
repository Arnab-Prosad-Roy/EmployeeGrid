<?php

use Illuminate\Database\Seeder;
use App\employees;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
	    employees::create([
	    	'employee_no'=> 'em001',
	        'name' => 'John Doe',
	        'designation_id' => '2',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '25000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em002',
	        'name' => 'John Smit',
	        'designation_id' => '2',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '25000',
	        'joining_date' => '2020-10-08',
	    ]);

	    employees::create([
	    	'employee_no'=> 'em003',
	        'name' => 'Olive Yew',
	        'designation_id' => '4',
	        'department' => 'Finance',
	        'company' => 'SoftBd',
	        'salary' => '40000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em004',
	        'name' => 'Alli Garter',
	        'designation_id' => '5',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '45000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em005',
	        'name' => 'Eileen Sideways',
	        'designation_id' => '6',
	        'department' => 'Finance',
	        'company' => 'SoftBd',
	        'salary' => '38000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em006',
	        'name' => 'Augusta Wind',
	        'designation_id' => '7',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '50000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em007',
	        'name' => 'Alli Garter',
	        'designation_id' => '2',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '25000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em008',
	        'name' => 'Roy L. Commishun',
	        'designation_id' => '2',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '25000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em009',
	        'name' => 'Pat Thettick',
	        'designation_id' => '6',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '30000',
	        'joining_date' => '2020-10-08',
	    ]);

	    employees::create([
	    	'employee_no'=> 'em0010',
	        'name' => 'Rod Knee',
	        'designation_id' => '4',
	        'department' => 'Finance',
	        'company' => 'SoftBd',
	        'salary' => '30000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em0012',
	        'name' => 'Karen Onnabit',
	        'designation_id' => '3',
	        'department' => 'Management',
	        'company' => 'SoftBd',
	        'salary' => '32000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em0014',
	        'name' => 'Joe V. Awl',
	        'designation_id' => '2',
	        'department' => 'IT',
	        'company' => 'SoftBd',
	        'salary' => '25000',
	        'joining_date' => '2020-10-08',
	    ]);
	    employees::create([
	    	'employee_no'=> 'em0014',
	        'name' => 'Simon Sais',
	        'designation_id' => '1',
	        'department' => 'Management',
	        'company' => 'SoftBd',
	        'salary' => '80000',
	        'joining_date' => '2020-10-08',
	    ]);
	}
}
