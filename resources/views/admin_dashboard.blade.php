<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/admin_products.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    @include('layouts/messages')
    <!--DASHBOARD-->
    <div class="container-fluid" style="margin-top: 80px">
        <div class="row text-center">
            <div class="col-lg-6">
                <h2>Orders by Category (To date)</h2>
                <canvas id="bar_chart"></canvas>
            </div>
            <div class="col-lg-6">
                <h2>Customers' Cart Add (To date)</h2>
                <canvas id="bar_chart_2"></canvas>
            </div>
            <div class="row" style="margin-top: 150px">
                <div class="col-lg-4 offset-lg-4">
                    <canvas id="pie_chart"></canvas>
                    <h2 class="mt-5">Category distribution</h2>
                </div>
            </div>
        </div>
    </div>
  </body>
  <script>
    var ctx = document.getElementById('bar_chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['data']),
                backgroundColor: ['rgba(0, 0, 255, 0.5)',
                'rgba(255, 255, 0, 0.5)',
                'rgba(0, 255, 0, 0.5)',
                'rgba(100, 192, 61, 0.2)'],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('bar_chart_2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($data_2['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data_2['data']),
                backgroundColor: ['rgba(0, 0, 255, 0.5)',
                'rgba(255, 255, 0, 0.5)',
                'rgba(0, 255, 0, 0.5)',
                'rgba(100, 192, 61, 0.2)'],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('pie_chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: @json($data_3['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data_3['data']),
                backgroundColor: ['rgba(0, 0, 255, 0.5)',
                'rgba(255, 255, 0, 0.5)',
                'rgba(0, 255, 0, 0.5)',
                'rgba(100, 192, 61, 0.2)'],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</html>
