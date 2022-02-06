
@extends('layouts.main-layout')

@section('content')
    
      <div id="user_check">
        <div id="top">
            <h1>
                Hello  {{Auth::User() -> name}}
            </h1> 
        </div>  

        <div id="blocco">
            <div id="col_sx" class="col-3">
                <h2>
                    Blog
                </h2>
            </div>
            <div id="visualizzazione"  class="col px-0">
                {{-- <div id="view">
                    <ul>
                        @foreach ($posts as $post)
                            <li>
                               <div id="nomeUser">
                                {{ $post -> autore }}
                                </div>
                            
                                <div id="testopost">   
                                    {{ $post -> testo_post}}
                                </div>

                            </li>
                        @endforeach
                    </ul>
                 
                </div> --}}
                <views-component>
                </views-component> 

                <div id="new">

                    <form action="{{route('store')}}" method="post"> 
                        @method('post')
                        @csrf

                        <input type="text" name="autore" id="autore" value="{{Auth::User() -> name}}">

                        <textarea name="testo_post" placeholder="Inserisci testo">
                        </textarea>
                        
                        <div id="input_">
                            <input id="invia" type="submit" value="Invia">
                        </div>
                       
                    </form>

                 </div> 
            </div>
        </div>
     </div>  

@endsection