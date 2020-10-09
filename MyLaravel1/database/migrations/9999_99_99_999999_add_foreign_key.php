<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Creating relation employees-location: One to Many
      Schema::table('employees', function(Blueprint $table) {
        $table -> foreign('location_id', 'emp-loc')
               -> references('id')
               -> on('locations');
      });

      // Creating relation employees-tasks: Many to Many
      Schema::table('employee_task', function (Blueprint $table) {
        $table -> foreign('employee_id', 'task-emp')
               -> references('id')
               -> on('employees')
               // you can delete all employees and their related relationships
               -> onDelete('cascade');

        $table -> foreign('task_id', 'emp-task')
               -> references('id')
               -> on('tasks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Destroy every foreign key
      Schema::table('employees', function(Blueprint $table) {
        $table -> dropForeign('emp-loc');
      });

      Schema::table('employee_task', function(Blueprint $table) {
        $table -> dropForeign('task-emp');
        $table -> dropForeign('emp-task');
      });
    }
}
