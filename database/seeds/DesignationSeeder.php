<?php

use Illuminate\Database\Seeder;
use App\designations;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
		public function run()
		{
		    designations::create([
		        'title' => 'CEO',
		    ]);		    
		    designations::create([
		        'title' => 'IT Officer',
		    ]);

		    designations::create([
		        'title' => 'HR',
		    ]);
		    designations::create([
		        'title' => 'Accountant',
		    ]);
		    designations::create([
		        'title' => 'Senior IT Officer',
		    ]);
		    designations::create([
		        'title' => 'Software Engineer',
		    ]);		    
		    designations::create([
		        'title' => 'Sr. Software Engineer',
		    ]);
		}
}
