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
            'message' => 'All Users',
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
    public function create(Request $request)
    {
        //
        return response()->json([
            'message' => 'Create User',
            'data' => $request->all()
        ], 201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return response()->json([
            'message' => 'User Stored',
            'data' => $request->all()
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json([
            'message' => 'User Found',
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
    public function edit(string $id)
    {
        //
        return response()->json([
            'message' => 'Edit User',
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
    public function update(Request $request, string $id)
    {
        //
        return response()->json([
            'message' => 'User Updated',
            'id' => $id,
            'data' => $request->all()
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
