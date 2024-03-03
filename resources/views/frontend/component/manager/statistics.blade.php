<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu đồ thống kê doanh thu</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="d-flex gap-5 align-items-center my-4 justify-content-center">
            <a href="{{ route('home') }}" class="position-absolute z-0 text-dark " style="top:118px;left:45px;">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <div class="text-decoration-none text-dark ">
                <p class="fs-2 fw-medium text-center"> Doanh thu theo tháng</p>
            </div>
        </div>
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>

    <!-- Link thư viện Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- Script JavaScript -->
    <script>
    // Lấy thẻ canvas theo id
    var ctx = document.getElementById('myChart').getContext('2d');
    // Tạo biểu đồ
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
            datasets: [{
                label: 'Doanh thu (VNĐ)',
                data: [5000000, 7000000, 6000000, 8000000, 9000000, 7500000],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
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
</body>

</html>