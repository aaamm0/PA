<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Aerator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Grafik Data Aerator (Live)</h2>
    <div class="card">
        <div class="card-body">
            <div class="chart-container" style="min-height: 400px">
                <canvas id="statisticsChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('statisticsChart').getContext('2d');

    var statisticsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [
                {
                    label: "Aerator1",
                    borderColor: '#f3545d',
                    backgroundColor: 'rgba(243, 84, 93, 0.4)',
                    fill: true,
                    borderWidth: 2,
                    data: []
                },
                {
                    label: "Aerator2",
                    borderColor: '#fdaf4b',
                    backgroundColor: 'rgba(253, 175, 75, 0.4)',
                    fill: true,
                    borderWidth: 2,
                    data: []
                },
                {
                    label: "Aerator3",
                    borderColor: '#177dff',
                    backgroundColor: 'rgba(23, 125, 255, 0.4)',
                    fill: true,
                    borderWidth: 2,
                    data: []
                },
                {
                    label: "Aerator4",
                    borderColor: '#1dd1a1',
                    backgroundColor: 'rgba(29, 209, 161, 0.4)',
                    fill: true,
                    borderWidth: 2,
                    data: []
                }
            ]
        },
        options: {
            responsive: true, 
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Fungsi untuk memperbarui data grafik secara live
    function updateChart() {
        $.ajax({
            url: 'get_sensor_data.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                statisticsChart.data.labels = response.labels;
                statisticsChart.data.datasets[0].data = response.aerator1;
                statisticsChart.data.datasets[1].data = response.aerator2;
                statisticsChart.data.datasets[2].data = response.aerator3;
                statisticsChart.data.datasets[3].data = response.aerator4;
                statisticsChart.update();
            }
        });
    }

    // Panggil fungsi setiap 5 detik untuk update data secara live
    setInterval(updateChart, 5000);

    // Panggil pertama kali saat halaman dimuat
    updateChart();
</script>

</body>
</html>
