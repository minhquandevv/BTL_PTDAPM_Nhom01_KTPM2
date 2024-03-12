@extends('frontend.component.layout-manager')
@section('content')

    <div class="container">
        <form method="GET" action="{{ route('statistics') }}">
            <label for="fromDate">From Date:</label>
            <input type="date" value="{{ request()->get('fromDate') }}" name="fromDate" id="fromDate"/>

            <label for="toDate">To Date:</label>
            <input type="date" value="{{ request()->get('toDate') }}" name="toDate" id="toDate"/>

            <button type="submit">Filter</button>
        </form>

        <div class="d-flex gap-5 align-items-center my-4 justify-content-center">
            <a href="/homemanager" class="position-absolute z-0 text-dark " style="top:118px;left:45px;">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <div class="text-decoration-none text-dark ">
                <p class="fs-2 fw-medium text-center"> Doanh thu theo tháng</p>
            </div>
        </div>
        {{--        <canvas id="myChart" width="400" height="400"></canvas>--}}
        <canvas id="myChart"></canvas>
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
                labels: {!! json_encode($monthsYearsArray) !!},
                datasets: [{
                    label: 'Doanh thu (VNĐ)',
                    data: {!! json_encode($totalAmountsArray) !!},
                    backgroundColor: {!! json_encode($backgroundColor) !!},
                    borderColor: {!! json_encode($borderColor) !!},
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

@endsection
