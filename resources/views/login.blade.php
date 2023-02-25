@extends('master')

@section('header-intro')
<h2>Login</h2>
<p>Abaixo faça o login</p>

@endsection

@section('main')


<div class="text-center" class="w-25">
      @if (session()->has('error_login'))
         
       {{session()->get('error_login')}}<br/>
      @endif


      @if (auth()->guest())
      <form action="{{route('login')}}" method="post" class="">
        {{-- função reponsável por form --}}
        @csrf
            {{$errors->first('email')}}
            <input type="text" name="email" placeholder="e-mail" value="ugreenfelder@example.org">
        
        
            {{$errors->first('password')}}
            <input type="text" name="password" placeholder="password" value="123">
        <div class="d-flex justify-content-center">
        <div>
            <button type="submit" class="mt-2">Logar</button>
        </div>
        </div>
      </form>
      @else 
         <h2>Você já está Logado</h2>
      @endif
    
</div>

     
@endsection