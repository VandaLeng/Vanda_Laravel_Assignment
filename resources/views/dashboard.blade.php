@extends('layouts.sidebar')

@section('title', 'Dashboard')

@section('content')
    <h1>📊 Dashboard Overview</h1>

    <div class="grid-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; padding: 20px;">
        <!-- Today Orders Card -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>Today Orders</h2>
            <div style="font-size: 24px; font-weight: bold; color: #007bff;">32,522 <span style="font-size: 14px; color: #666;">$</span></div>
            <div style="font-size: 14px; color: #28a745;">+12% vs previous month</div>
        </div>

        <!-- Today Visitors Card -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>Today Visitors</h2>
            <div style="font-size: 24px; font-weight: bold; color: #007bff;">26,429 <span style="font-size: 14px; color: #666;">$</span></div>
            <div style="font-size: 14px; color: #28a745;">+5% vs previous month</div>
        </div>

        <!-- Total Expense Card -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>Total Expense</h2>
            <div style="font-size: 24px; font-weight: bold; color: #dc3545;">64,249 <span style="font-size: 14px; color: #666;">$</span></div>
            <div style="font-size: 14px; color: #dc3545;">-3% vs previous month</div>
        </div>

        <!-- New Users Card -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>New Users</h2>
            <div style="font-size: 24px; font-weight: bold; color: #007bff;">52,653 <span style="font-size: 14px; color: #666;">$</span></div>
            <div style="font-size: 14px; color: #28a745;">+2% vs previous month</div>
        </div>

        <!-- Revenue Analysis Chart -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); grid-column: span 2;">
            <h2>Revenue Analysis</h2>
            <canvas id="barChart" height="200"></canvas>
        </div>

        <!-- Income and Sales Statistics -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>Income</h2>
            <div style="font-size: 24px; font-weight: bold; color: #28a2ba;">$6,134.39</div>
            <div style="font-size: 14px; color: #28a745;">+17% more than last week</div>
            <canvas id="lineChart" height="150"></canvas>
        </div>

        <!-- Asset Allocation Doughnut Chart -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>Asset Allocation</h2>
            <canvas id="doughnutChart" height="200"></canvas>
        </div>

        <!-- Messages Card -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2>Messages</h2>
            <div style="font-size: 14px; color: #666;">
                <p><strong>Steven Jones</strong> - Feels like it's been a while! How are you? <span style="color: #28a745;">2 min</span></p>
                <p><strong>Alex Mulvey</strong> - I've arrived! See you so! <span style="color: #28a745;">10 min</span></p>
                <p><strong>Justin Moore</strong> - And now it's going with the velocity autobots! <span style="color: #28a745;">22 min</span></p>
            </div>
        </div>

        <!-- Sales Statistics Line Charts -->
        <div class="card" style="background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); grid-column: span 2;">
            <h2>Sales Statistics</h2>
            <div style="display: flex; justify-content: space-between;">
                <div style="flex: 1; margin-right: 10px;">
                    <canvas id="salesOrdersChart" height="150"></canvas>
                </div>
                <div style="flex: 1; margin-right: 10px;">
                    <canvas id="salesReturnsChart" height="150"></canvas>
                </div>
                <div style="flex: 1;">
                    <canvas id="salesEarningsChart" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart for Revenue Analysis
        new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: ['2014', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Income',
                    data: [4.5, 5.0, 6.0, 7.0, 8.0, 9.0, 8.5, 9.5],
                    backgroundColor: '#007bff'
                }, {
                    label: 'Expense',
                    data: [4.0, 4.5, 5.5, 6.0, 6.5, 7.0, 6.5, 7.5],
                    backgroundColor: '#dc3545',
                    type: 'line'
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });

        // Line Chart for Income
        new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Income',
                    data: [5000, 5500, 6000, 6200, 6500, 6134.39],
                    borderColor: '#28a2ba',
                    backgroundColor: 'rgba(40,162,186,0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });

        // Doughnut Chart for Asset Allocation
        new Chart(document.getElementById('doughnutChart'), {
            type: 'doughnut',
            data: {
                labels: ['Cash', 'Equity', 'Debt'],
                datasets: [{
                    data: [40, 35, 25],
                    backgroundColor: ['#17a2b8', '#28a745', '#6c757d']
                }]
            },
            options: {
                responsive: true
            }
        });

        // Line Chart for Sales Orders
        new Chart(document.getElementById('salesOrdersChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Orders',
                    data: [10, 12, 15, 18, 20, 25],
                    borderColor: '#28a745',
                    backgroundColor: 'rgba(40,167,69,0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });

        // Line Chart for Sales Returns
        new Chart(document.getElementById('salesReturnsChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Returns',
                    data: [4, 5, 6, 7, 8, 10],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0,123,255,0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });

        // Line Chart for Sales Earnings
        new Chart(document.getElementById('salesEarningsChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Earnings',
                    data: [5, 7, 8, 10, 12, 15],
                    borderColor: '#6f42c1',
                    backgroundColor: 'rgba(111,66,193,0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });
    </script>
@endsection