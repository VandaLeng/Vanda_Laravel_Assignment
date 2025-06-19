@extends('layouts.sidebar')

@section('content')
    <div class="card">
        <h2>Book List</h2>
        <button class="btn btn-add">➕ Add Book</button>
        <table>
            <tr><th>ID</th><th>Title</th><th>ISBN</th><th>Year</th><th>Genre</th><th>Action</th></tr>
            <tr>
                <td>book001</td><td>Laravel Basics</td><td>1234567890</td><td>2024</td><td>Tech</td>
                <td>
                    <button class="btn btn-edit">✏️ Edit</button>
                    <button class="btn btn-delete">🗑️ Delete</button>
                </td>
            </tr>
            <tr>
                <td>book002</td><td>PHP for Beginners</td><td>9876543210</td><td>2023</td><td>Programming</td>
                <td>
                    <button class="btn btn-edit">✏️ Edit</button>
                    <button class="btn btn-delete">🗑️ Delete</button>
                </td>
            </tr>
            <tr>
                <td>book003</td><td>Web Design 101</td><td>1112223334</td><td>2022</td><td>Design</td>
                <td>
                    <button class="btn btn-edit">✏️ Edit</button>
                    <button class="btn btn-delete">🗑️ Delete</button>
                </td>
            </tr>
        </table>
    </div>
@endsection
