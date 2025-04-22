@extends('main.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics - Play Money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h3 class="text-center mb-4">Expense Analytics</h3>
        <div class="card p-4 shadow">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-center">Spending by Category</h5>
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="col-md-6">
                    <h5 class="text-center">Monthly Expense Trend</h5>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const barCtx = document.getElementById('barChart').getContext('2d');

        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Food', 'Transport', 'Shopping', 'Bills', 'Other'],
                datasets: [{
                    data: [30, 20, 25, 15, 10],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff']
                }]
            }
        });

        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Total Expenses ($)',
                    data: [200, 150, 300, 250, 180],
                    backgroundColor: '#36a2eb'
                }]
            }
        });
    </script>
</body>
</html>
@stop
