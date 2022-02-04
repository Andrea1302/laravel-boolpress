@extends('layouts.main-layout')

@section('content')
<div id="login" class="container">


          {{-- Login  --}}
          <h2 class="title_form">
            Login
          </h2>
            <form id="login_form" method="POST" action="{{route('login')}}">
                @method('post')
                @csrf
    
                {{-- Email  --}}
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                </div>
    
                {{-- password  --}}
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="" name="password">
                </div>

               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
    </div>
@endsection