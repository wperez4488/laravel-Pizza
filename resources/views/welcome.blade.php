@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        
        <div class="content">
            <div class="m-b-md">
                <img src="/img/pizza.jpeg" alt="Logo" style="width: 400px; margin: auto;">
                <h1 class="title">Best Pizza</h1>
            </div>

          
            

                <p class="mssg">{{ session ('mssg') }}</p>

                <a href="/pizzas/create"> Order Now</a>
        </div>

    </div>
    
@endsection