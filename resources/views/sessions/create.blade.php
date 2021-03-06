@extends('layouts.default')
@section('title', 'Login')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card ">
            <div class="card-header">
                <h5>Login</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password : </label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                            <label for="exampleCheck1" class="form-check-label">Remember Me</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <hr>

                <p>還沒有帳號? <a href="{{ route('signup') }}">Sign Up Now</a></p>
            </div>
        </div>
    </div>
@stop