<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Get all users
    public function index()
    {
        return response()->json([
            'message' => 'All users fetched successfully',
            'data' => [
                [
                    'id' => 'user001',
                    'name' => 'Vanda Leng',
                    'email' => 'vanda@example.com',
                    'membershipDate' => '2024-01-01'
                ]
            ]
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    // Create new user with provided data
    public function create(Request $request)
    {
        return response()->json([
            'message' => 'User created successfully',
            'data' => $request->all()
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Store new user information
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'User stored successfully',
            'data' => $request->all()
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    // Show a single user by ID
    public function show(string $id)
    {
        return response()->json([
            'message' => 'User found successfully',
            'data' => [
                'id' => $id,
                'name' => 'Vanda Leng',
                'email' => 'vanda@example.com',
                'membershipDate' => '2024-01-01'
            ]
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Show user data for editing
    public function edit(string $id)
    {
        return response()->json([
            'message' => 'User edit form fetched successfully',
            'data' => [
                'id' => $id,
                'name' => 'Vanda',
                'email' => 'vandaedit@example.com',
                'membershipDate' => '2024-01-01'
            ]
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    // Update user data by ID
    public function update(Request $request, string $id)
    {
        return response()->json([
            'message' => 'User updated successfully',
            'id' => $id,
            'data' => $request->all()
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    // Delete a user by ID
    public function destroy(string $id)
    {
        return response()->json([
            'message' => 'User deleted successfully',
            'id' => $id
        ], 200);
    }
}
