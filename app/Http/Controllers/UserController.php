<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Get all users
    public function index()
    {
        $users = User::all();
        return response()->json([
            'message' => 'All users fetched successfully',
            'data' => $users
        ], 200);
    }

    // Create new user with validation and save to DB
    public function create(StoreUserRequest $request)
    { 
        // Today that I have confort code use with validation 
        $user = User::create($request->all());
        return response()->json([
            'message' => 'User created and saved successfully',
            'data' => $user
        ], 201);
    }

    // Show a single user by ID
    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
        return response()->json([
            'message' => 'User found successfully',
            'data' => $user
        ], 200);
    }

    // Show user data for editing
    public function edit(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
        return response()->json([
            'message' => 'User edit form fetched successfully',
            'data' => $user
        ], 200);
    }

    // Update user data by ID
    public function update(UpdateUserRequest $request, string $id)
    { 
        // also we can use the validation with the function edit or update
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
        $user->update($request->all());

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ], 200);
    }

    // Delete a user by ID
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully',
            'id' => $id
        ], 200);
    }
}
