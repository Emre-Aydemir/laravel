@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    @include('includes.message-block')
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
    </p>

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">

                    <form action="{{ route('signup') }}" method="post">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Your E-mail</label>
                            <input class="form-control "type="text" name="email" id="email" value="{{ Request::old('email') }}"  >
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="first_name">Your First name</label>
                            <input class="form-control "type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}" >
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">Your Password</label>
                            <input class="form-control "type="password" name="password" id="password" value="{{ Request::old('password') }}" >
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <button class="btn btn-primary" type="submit"> Sign Up</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>

                </div>
            </div>
        </div>


        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">

                    <form action="{{ route('signin') }}" method="post">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Your E-mail</label>
                            <input class="form-control "type="text" name="email" id="email" value="{{ Request::old('email') }}" >
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">Your Password</label>
                            <input class="form-control "type="password" name="password" id="password" value="{{ Request::old('password') }}" >
                        </div>
                        <button class="btn btn-primary" type="submit"> Sign In</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection