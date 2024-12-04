@extends('layouts.client')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
  
    <div id="main" class="main-container">
        <div class="box">
          <h2>Login</h2>
         
          <form method="post" action="">
            @csrf
            <div class="input-box">
              <input id="user-name" type="text" name="email" required>
              <label>Username</label>
            </div>
            <div class="input-box">
              <input id="user-pass" type="password" name="password"  required>
              <label>Password</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember"  id="rememberme">
              <label class="form-check-label" for="flexCheckDefault" style="color: aliceblue;">
                Remember me
              </label>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif            
            <input id="submit" type="submit" name="" value="Submit">

          </form>
          
        </div>
        </div>
        
        <div id="logged-in">
        </div>
@endsection
@section('js')
    <link rel="stylesheet" href="{{ asset('js/js') }}">
@endsection