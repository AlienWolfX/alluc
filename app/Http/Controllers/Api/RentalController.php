<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RentalRequest;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Rental::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalRequest $request)
    {
        $rental = new Rental;
        $rental->staff_id = $request->staff_id;
        $rental->client_id = auth()->id();
        $rental->car_id = $request->car_id;
        $rental->rental_date = $request->rental_date;
        $rental->rental_time = $request->rental_time;
        $rental->return_date = $request->return_date;
        $rental->return_time = $request->return_time;
        $rental->rental_status = $request->rental_status;

        $rental->save();

        return response()->json($rental, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Rental::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentalRequest $request, string $id)
    {
        $rental = Rental::findOrFail($id);
        $rental->return_date = $request->return_date;
        $rental->return_time = $request->return_time;
        $rental->rental_status = 'Returned';
        $rental->save();

        return response()->json($rental, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletedRows = Rental::destroy($id);

        if ($deletedRows > 0) {
            return response()->json(['message' => 'Rental deleted successfully.'], 200);
        } else {
            return response()->json(['message' => 'Rental not found.'], 404);
        }
    }
}
