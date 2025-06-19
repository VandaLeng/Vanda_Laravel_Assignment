@extends('layouts.sidebar')

@section('content')
    <div class="card">
        <h2>Author List</h2>
        <button class="btn btn-add">➕ Add Author</button>
        <table>
            <tr><th>ID</th><th>Name</th><th>Bio</th><th>Nationality</th><th>Action</th></tr>
            <tr>
                <td>auth001</td><td>John Doe</td><td>Writes Tech Books</td><td>Cambodian</td>
                <td>
                    <button class="btn btn-edit">✏️ Edit</button>
                    <button class="btn btn-delete">🗑️ Delete</button>
                </td>
            </tr>
            <tr>
                <td>auth002</td><td>Sophy Chan</td><td>Focuses on Web Design</td><td>Khmer</td>
                <td>
                    <button class="btn btn-edit">✏️ Edit</button>
                    <button class="btn btn-delete">🗑️ Delete</button>
                </td>
            </tr>
            <tr>
                <td>auth003</td><td>Michael Lee</td><td>Writes Beginner PHP Books</td><td>Singaporean</td>
                <td>
                    <button class="btn btn-edit">✏️ Edit</button>
                    <button class="btn btn-delete">🗑️ Delete</button>
                </td>
            </tr>
        </table>
    </div>
@endsection
