<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
    'location_id',
    'firstname',
    'lastname',
    'date_of_birth',
    'private_code'
  ];

  // Every employee must have only one location
  public function location() {
    return $this -> belongsTo(Location::class);
  }

  // Every employee can have more tasks
  public function tasks() {
    return $this -> belongsToMany(Task::class);
  }
}
