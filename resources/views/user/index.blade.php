@extends('layouts.sidebar')

@section('content')
    <div class="card">
        <h2>User List</h2>
        <button class="btn btn-add">➕ Add User</button>
        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Membership Date</th><th>Action</th>
            </tr>
            <tr>
                <td>user001</td><td>Vanda</td><td>vanda@example.com</td><td>2024-01-01</td>
                <td><button class="btn btn-delete">🗑️ Delete</button></td>
            </tr>
        </table>
    </div>
@endsection
