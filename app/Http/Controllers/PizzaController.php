<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){

// $pizzas = Pizza::all();


// $pizzas = Pizza::orderby('type')->get();
$pizzas = Pizza::latest()->get();

 return view('pizzas.index', [
    'pizzas' => $pizzas,
    
]);
    }

    public function show($id){

        $pizzas = Pizza::findorfail($id);

        return view('pizzas.show', ['pizzas' => $pizzas]);
    }


    public function create(){

        return view('pizzas.create');
    }

    public function store(){

       $pizza = new Pizza();

       $pizza -> name =request('name');
       $pizza -> base =request('base');
       $pizza -> type =request('type');
       $pizza -> toppings =request('toppings');

       $pizza ->save();

        return redirect('/')->with('mssg', 'Thanks for your Order');
    }

    public function delete($id) {

        $pizza = Pizza::findorFail($id);

        $pizza -> delete();

        return redirect('/pizzas');
    }
    
    
}
