<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        $car = new Car;
        $car->staff_id = '4';
        $car->plate_number = $request->plate_number;
        $car->car_name = $request->car_name;
        $car->description = $request->description;
        $car->car_model_year = $request->car_model_year;
        $car->color = $request->color;
        $car->rate = $request->rate;
        $car->status = 'Available'; // By default if mag create Available ang e set sa status

        $car->save();

        return response()->json($car, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Car::findOrFail($id);
    }

    /**
     * Show the form for updating the specified resource.
     */
    public function update(CarRequest $request, string $id)
    {
        $car = Car::findOrFail($id);
        $car->plate_number = $request->plate_number;
        $car->car_name = $request->car_name;
        $car->description = $request->description;
        $car->car_model_year = $request->car_model_year;
        $car->color = $request->color;
        $car->rate = $request->rate;

        $car->save();

        return response()->json($car, 200);
    }

    /**
     * Change Status.
     */
    public function booked(string $id)
    {
        $car = Car::findOrFail($id);
        $car->status = 'Booked';
        $car->save();
        return response()->json($car, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::destroy($id);
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
