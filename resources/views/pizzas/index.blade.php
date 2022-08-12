@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>
      

            @foreach($pizzas as $pizza)
            <div>
                <img src="/img/pizza-icon.png" alt="icon" style="width:50px;">
                <h4><a href="/pizzas/{{ $pizza -> id }}">{{$pizza -> name}}</a></h4>
            </div>
            @endforeach

            
        </div>

    </div>
    
@endsection