@extends('layouts.sidebar')

@section('content')
    <div class="card">
        <h1>Dashboard Overview</h1>
        <canvas id="barChart" height="100"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('barChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Books', 'Authors', 'Users'],
                datasets: [{
                    label: 'Total Count',
                    data: [10, 5, 20],
                    backgroundColor: ['#007bff', '#28a745', '#ffc107']
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
