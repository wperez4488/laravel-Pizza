@extends('layouts.app')

@section('content')
  
  <div class="wrapper create-pizza">
      
      <h1>Create a New Pizza</h1>

      <form action="/pizzas" method="POST">
        @csrf
          <label for="name" class="name"> Your Name</label>
          <input type="text" id="name" name="name">

          <label for="type" class="type">Choose Pizza type:</label>
          <select name="type" id="type">
              <option value="margarita">Margarita</option>
              <option value="hawaiian">Hawaiian</option>
              <option value="volcano">Volcano</option>
              <option value="veg supreme">Veg Supreme</option>
          </select>

           <label for="base" class="base">Choose Pizza Base:</label>
          <select name="base" id="base">
              <option value="garlic">Garlic</option>
              <option value="thin & crispy">Thin & Crispy</option>
              <option value="bbq">BBQ</option>
              <option value="thick">Thick</option>
          </select>

          <label for="">Extra Toppings</label>
          <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
          <input type="checkbox" name="toppings[]" value="peppers">Peppers <br />
          <input type="checkbox" name="toppings[]" value="garlic">Garlic <br />
          <input type="checkbox" name="toppings[]" value="olives">Olives <br />

          <input type="submit" value="Order Pizza">

      </form>
  </div>
    
@endsection