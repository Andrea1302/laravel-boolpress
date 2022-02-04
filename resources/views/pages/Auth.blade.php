@extends('layouts.main-layout')

@section('content')
    
      <div id="user_check" class="container">
        <div id="top">
            <h1>
                Hello  {{Auth::User() -> name}}
            </h1> 
        </div>  
      
     </div>  

@endsection