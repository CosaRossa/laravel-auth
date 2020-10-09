@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h2>NEW EMPLOYEE</h2>
              </div>
              <div class="card-body">
                <form action="{{route('emp.store')}}" method="post">
                  @csrf
                  @method('POST')
                  <div class="form-group">
                    <label for="firstname">Firstname:</label> <br>
                    <input type="text" name="firstname" value="">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="lastname">Lastname:</label> <br>
                    <input type="text" name="lastname" value="">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="date_of_birth">Date of Birth:</label> <br>
                    <input type="date" name="date_of_birth" value="">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="private_code">Private Code:</label> <br>
                    <input type="number" name="private_code" value="">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="location_id">Location:</label> <br>
                    <select name="location_id">
                      @foreach ($locs as $loc)
                        <option value="{{$loc -> id}}">{{$loc -> name}} - {{$loc -> state}}</option>
                      @endforeach
                    </select>
                  </div>
                  <br>
                  <button class="btn btn-primary" type="submit" name="button">SAVE</button>
                </form>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
