<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background: #f1f3f6;
        }
        aside {
            width: 220px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
        }
        aside h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        aside a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        aside a:hover {
            background: #1abc9c;
        }
        main {
            flex-grow: 1;
            padding: 30px;
        }
        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2 {
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #f0f0f0;
        }
        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
            margin-bottom: 10px;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <aside>
        <h2>Library Admin</h2>
        <a href="/dashboard">📊 Dashboard</a>
        <a href="/user">👤 Users</a>
        <a href="/book">📚 Books</a>
        <a href="/author">✍️ Authors</a>
    </aside>
    <main>
        @yield('content')
    </main>
</body>
</html>
