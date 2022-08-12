@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        
        <div class="content">
            <div class="m-b-md">
                
                <h1>Order for {{$pizzas->name}}</h1>
                <p class="type"> Type - {{ $pizzas->type }}</p>
                <p class="base"> Base - {{ $pizzas->base }}</p>
                <p class="toppings"> Extra Toppings</p>
                <ul>
                @foreach($pizzas -> toppings as $topping)
                    <li>{{ $topping }}</li>
                @endforeach
                </ul>

                <a href="/pizzas">Back to All Pizzas</a>

                <form action="{{ route('pizzas.destroy', $pizza->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>complete order</button>

                </form>
            </div>

           
           

          


        </div>

    </div>
    
@endsection