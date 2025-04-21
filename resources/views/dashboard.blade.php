@extends('main.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Play Money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Total Expenses</div>
                    <div class="card-body text-center">
                        <h4 class="card-title">$1,250</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-header bg-warning text-dark">This Month</div>
                    <div class="card-body text-center">
                        <h4 class="card-title">$450</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-header bg-danger text-white">Highest Expense</div>
                    <div class="card-body text-center">
                        <h4 class="card-title">$120 (Rent)</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white">Remaining Budget</div>
                    <div class="card-body text-center">
                        <h4 class="card-title">$800</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">Expense Breakdown</div>
            <div class="card-body">
                <canvas id="expenseChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('expenseChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Food', 'Transport', 'Rent', 'Shopping', 'Other'],
                datasets: [{
                    data: [300, 150, 400, 200, 200],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4caf50', '#9966ff']
                }]
            }
        });
    </script>
</body>
</html>
