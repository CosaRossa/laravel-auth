@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h2>EDIT EMPLOYEE:</h2>
              </div>
              <div class="card-body">
                <form action="{{route('emp.update', $emp -> id)}}" method="post">
                  @csrf
                  @method('POST')
                  <div class="form-group">
                    <label for="firstname">Firstname:</label> <br>
                    <input type="text" name="firstname" value="{{$emp -> firstname}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="lastname">Lastname:</label> <br>
                    <input type="text" name="lastname" value="{{$emp -> lastname}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="date_of_birth">Date of Birth:</label> <br>
                    <input type="date" name="date_of_birth" value="{{$emp -> date_of_birth}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="private_code">Private Code:</label> <br>
                    <input type="number" name="private_code" value="{{$emp -> private_code}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="location_id">Location:</label> <br>
                    <select name="location_id">
                      @foreach ($locs as $loc)
                        {{-- <a href="{{route('loc.show', $loc -> id)}}"> --}}
                          <option value="{{$loc -> id}}"
                            {{-- Check if the location is the same as the employee's location --}}
                            @if ($loc -> id === $emp -> location -> id)
                              selected
                            @endif
                          >{{$loc -> name}} - {{$loc -> state}}</option>
                        {{-- </a> --}}
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
