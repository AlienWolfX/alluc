<?php

namespace App\Http\Controllers\api;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staff::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffRequest $request)
    {
        $staff = Staff::create([
            'admin_id' => auth()->id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact_number' => $request->contact_number,
            'profile_picture_path' => $request->profile_picture_path,
        ]);

        return response()->json($staff, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Staff::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffRequest $request, string $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->first_name = $request->get('first_name', $staff->first_name);
        $staff->last_name = $request->get('last_name', $staff->last_name);
        $staff->age = $request->get('age', $staff->age);
        $staff->email = $request->get('email', $staff->email);
        $staff->password = $request->get('password') ? Hash::make($request->password) : $staff->password;
        $staff->contact_number = $request->get('contact_number', $staff->contact_number);
        $staff->profile_picture_path = $request->get('profile_picture_path', $staff->profile_picture_path);
        $staff->save();

        return response()->json($staff, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletedRows = Staff::destroy($id);

        if ($deletedRows > 0) {
            return response()->json(['message' => 'Staff member deleted successfully.'], 200);
        } else {
            return response()->json(['message' => 'Staff member not found.'], 404);
        }
    }
}
