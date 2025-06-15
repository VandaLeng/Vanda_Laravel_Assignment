@extends('layouts.sidebar')

@section('content')
    <h2>Book List</h2>
    <table>
        <tr><th>ID</th><th>Title</th><th>ISBN</th><th>Year</th><th>Genre</th></tr>
        <tr><td>book001</td><td>Laravel Basics</td><td>1234567890</td><td>2024</td><td>Tech</td></tr>
    </table>
@endsection
