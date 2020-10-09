<?php

namespace App\Http\Controllers;

use App\Location;
use App\Employee;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
  public function __construct() {
      $this->middleware('auth');
  }

  public function create() {
    $locs = Location::all();
    return view('emp-create', compact('locs'));
  }

  public function store(Request $request) {
    $data = $request -> all();
    Employee::create($data);

    return redirect() -> route('emp.index');
  }

  public function edit($id) {
    $emp = Employee::findOrFail($id);
    $locs = Location::all();

    return view('emp-edit', compact('emp', 'locs'));
  }

  public function update(Request $request, $id) {
    $data = $request -> all();
    $emp = Employee::findOrFail($id);
    $emp -> update($data);

    return redirect() -> route('emp.show', $id);
  }

  public function destroy($id) {
    $emp = Employee::findOrFail($id);
    $emp -> delete();

    return redirect() -> route('emp.index');
  }
}
