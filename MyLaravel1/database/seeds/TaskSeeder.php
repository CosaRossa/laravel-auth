<?php

use Illuminate\Database\Seeder;
// Use both Models
use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Creating tasks table
      factory(Task::class, 200)
            -> create()
            // For every task, take rand(5, 10) employees
            -> each(function($tas) {

              $emps = Employee::inRandomOrder()
                  -> take(rand(5,10))
                  -> get();

              $tas -> employees() ->attach($emps);
            });
    }
}
