@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Employee:
                  {{$emp -> firstname}}
                  {{$emp -> lastname}}
                </div>

                <div class="card-body">
                  <ul>
                    <li>
                      Date of Birth: {{$emp -> date_of_birth}}
                    </li>
                    @auth
                      <li>
                        Private Code: {{$emp -> private_code}}
                      </li>
                    @endauth
                    <li>
                      Location: {{$emp -> location -> name}}, {{$emp -> location -> state}}
                    </li>
                  </ul>
                  @auth
                    <a class="btn btn-primary" href="{{route('emp.edit', $emp -> id)}}">EDIT</a>
                    <a class="btn btn-danger" href="{{route('emp.destroy', $emp -> id)}}">DELETE</a>
                  @else
                    If you want to edit or delete, please login.
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
