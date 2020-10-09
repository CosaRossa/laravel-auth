<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'name',
    'description',
    'start_date',
    'end_date'
  ];

  // One task can be linked with multiple employees
  public function employees() {
    return $this -> belongsToMany(Employee::class);
  }
}
