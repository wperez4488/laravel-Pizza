@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        
        <div class="content">
            <div class="m-b-md">
                <img src="/img/pizza.jpeg" alt="Logo" style="width: 400px; margin: auto;">
                <h1 class="title">Best Pizza</h1>
            </div>

          
           

           {{--  @for($i = 0; $i < 5; i++)

            <p>The value of i is {{ $i }}</p>

            @endfor --}}

           {{--  @for($i = 0; $i < count($pizzas); $i++)
                <p>{{$pizzas[$i] ['type'] }}</p>
            @endfor --}}

            @foreach($pizzas as $pizza)
            <div>
                {{ $pizza -> name }}- {{ $pizza -> type }}- {{ $pizza -> base }} - {{ $pizza -> topping}}
            </div>
            @endforeach

                <p class="mssg">{{ session ('mssg') }}</p>

                <a href="/pizzas/create"> Order Now</a>
        </div>

    </div>
    
@endsection