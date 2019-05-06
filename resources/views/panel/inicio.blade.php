@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
              {{-- Panel de botones --}}
                <div class="links">
                     {{-- Control Perfil --}}       
                    <a class="btn btn-outline-info  btn-lg" role="button"  href="{{ url('perfil') }}"> 
                        <img src="{{asset('img/perfil.png')}}" width="100" /><br>
                        <span class="label label-default">Perfil</span></a>
                        
                    {{-- Nuevo --}}
                    <a class="btn btn-outline-danger  btn-lg" role="button" href="{{ url('nuevo') }}">
                        <img src="{{asset('img/nuevo.png')}}" width="100" /><br>
                        <span class="label label-default">Nuevo </span> </a> 
                        
                    {{-- Lista--}}
                     <a class="btn btn-outline-warning  btn-lg" role="button" href="{{ url('lista') }}">
                        <img src="{{asset('img/lista.png')}}" width="100" /><br>
                        <span class="label label-default">Lista </span> </a>
                   
                    {{-- Contactos --}}
                    <a class="btn btn-outline-primary  btn-lg" role="button"  href="{{ url('contactos') }}">
                         <img src="{{asset('img/contacto.png')}}" width="100"/><br>
                         <span class="label label-default">Contactos </span></a>
                  
                   
                </div> 
        </div> 
</div> 
@endsection