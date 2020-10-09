<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
  public function show($id) {
    $loc = Location::findOrFail($id);
    return view('loc-show', compact('loc'));
  }
}
