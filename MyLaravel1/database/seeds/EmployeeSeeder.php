<?php

use Illuminate\Database\Seeder;
// Use both Models
use App\Employee;
use App\Location;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class, 100)
            -> make() // Making the employees table without saving it
            // For every employee take one random location
            -> each(function($emp) {
              $loc = Location::inRandomOrder() -> first();
              $emp -> location() -> associate($loc);

              $emp -> save();
            });
    }
}
