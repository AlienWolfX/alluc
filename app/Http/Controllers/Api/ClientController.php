<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Client::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|integer',
            'email' => 'required|email|unique:clients',
            'password' => 'required|string|min:8',
            'contact_number' => 'required|string',
            'profile_picture_path' => 'string',
        ]);

        $client = Client::create([
            'admin_id' => 1,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact_number' => $request->contact_number,
            'profile_picture_path' => $request->profile_picture_path,
        ]);

        return response()->json($client, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Client::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'age' => 'integer',
            'email' => 'email|unique:clients,email,'.$id,
            'password' => 'string|min:8',
            'contact_number' => 'string',
            'profile_picture_path' => 'string',
        ]);

        $client = Client::findOrFail($id);
        $client->first_name = $request->get('first_name', $client->first_name);
        $client->last_name = $request->get('last_name', $client->last_name);
        $client->age = $request->get('age', $client->age);
        $client->email = $request->get('email', $client->email);
        $client->password = $request->get('password') ? Hash::make($request->password) : $client->password;
        $client->contact_number = $request->get('contact_number', $client->contact_number);
        $client->profile_picture_path = $request->get('profile_picture_path', $client->profile_picture_path);

        $client->save();

        return response()->json($client, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Client::destroy($id);
    }
}
