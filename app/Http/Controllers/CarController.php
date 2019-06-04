<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;		
use Request\CreateCarRequest;

class CarController extends Controller
{
  public function create(Request $request){
  	$request->validate([
      'brand' => 'required'
    ]);
    $car = Car::create([
	    'brand' => $request->brand,
	    'year' => $request->year,
	    'origin' => $request->origin,
	    'max_speed' => $request->max_speed,
	    'state' => $request->state,
	    'description' => $request->description,
	    'colors' => $request->colors,
	    'doors' => $request->doors,
	    'active' => true,
  	]);

  	return response()->json([
  		'message' => 'Car created successfully',
  		'data' => $car
  	],201);
  }

  public function all(){
  	$car = Car::paginate(10);

  	return response()->json([
  		'cars' => $car
  	],200);
  }

  public function searchOne($id){
  	$car = Car::where('id','=',$id)->first();

  	return response()->json([
  		'car' => $car,
  	],200);
  }

  public function update($id,Request $request){
  	$car = Car::where('id','=',$id)->first();
  	$car->update($request->all());

  	return response()->json([
  		'message' => 'Car succefully updated',
  		'car' => $car
  	],200);
  }

  public function delete($id){
  	$car = Car::where('id','=',$id);
  	$car->delete();

  	return response()->json([
  		'message' => 'Car succefully deleted',
  	],200);
  }

}
