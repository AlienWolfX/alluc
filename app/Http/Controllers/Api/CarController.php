<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Requests\CarImageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        $car = new Car([
            'staff_id' => auth()->id(),
            'plate_number' => $request->plate_number,
            'car_name' => $request->car_name,
            'description' => $request->description,
            'car_model_year' => $request->car_model_year,
            'color' => $request->color,
            'rate' => $request->rate,
            'status' => 'Available',
        ]);

        if ($request->hasFile('image')) {
            $this->saveImage($car, $request);
        }

        if ($car->save()) {
            return response()->json($car, 201);
        } else {
            return response()->json(['error' => 'Failed to save car'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, string $id)
    {
        $car = Car::findOrFail($id);
        $car->fill($request->validated());
        $car->save(); // Save the changes to the database
        $this->saveImage($car, $request);
        return response()->json($car, 200);
    }

    /**
     * Save the image for the car.
     */
    private function saveImage(Car $car, Request $request)
    {
        if ($request->hasFile('image')) {
            if (!is_null($car->image)) {
                Storage::disk('public')->delete($car->image);
            }

            $car->image = $request->file('image')->storePublicly('images', 'public');
        }
    }

    /**
     * Add Image.
     */
    public function image(CarImageRequest $request, string $id)
    {
        $car = Car::findOrFail($id);
        $this->saveImage($car, $request);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);

        if (!is_null($car->image)) {
            Storage::disk('public')->delete($car->image);
        }

        $car->delete();

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
