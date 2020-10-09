@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  EMPLOYEES
                  @auth
                    <a class="btn btn-primary float-right" href="{{route('emp.create')}}">NEW</a>
                  @else
                    <a class=" btn btn-primary float-right nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  @endauth
                </div>

                <div class="card-body">
                  <ul>
                    @foreach ($emps as $emp)
                      <li>
                        <a href="{{route('emp.show', $emp -> id)}}">
                          {{$emp -> firstname}}
                          {{$emp -> lastname}}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                  <div class="text-center">
                    @auth
                      <a class="btn btn-primary" href="{{route('emp.create')}}">NEW</a>
                    @else
                      <a class=" btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endauth
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
