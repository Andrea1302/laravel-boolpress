
<header>
    <img class="logo" src="{{asset('storage/img/boolean.png')}}" alt="">
    <h1>
        Boolpress
    </h1>
    @auth
        <a class="form" href="{{route('logout')}}">Logout</a>

        

        @else 
        <a class="form" href="{{route('loginPage')}}">Login</a>
        <a class="form" href="{{route('RegisterPage')}}">Registration</a>
    @endauth
  

</header>
    
