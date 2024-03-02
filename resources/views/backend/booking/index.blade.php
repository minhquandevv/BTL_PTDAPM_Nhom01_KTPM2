<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="container">
<form method="GET">
    <div class="input-group mb-3">
        <input
            type="text"
            name="search"
            value="{{ request()->get('search') }}"
            class="form-control"
            placeholder="Search..."
            aria-label="Search"
            aria-describedby="button-addon2">
        <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
    </div>
</form>

<h1 class="m-">Danh sách các phòng</h1>
<a type="button" class="btn btn-success" href="{{ route('booking.create') }}">Thêm mới một phòng</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Ma KH</th>
        <th scope="col">Ma Phong</th>
        <th scope="col">Ngay Dat Phong</th>
        <th scope="col">Ngay CheckIn</th>
        <th scope="col">Ngay CheckOut</th>
        <th scope="col">So Nguoi</th>
        <th scope="col">Tinh Trang Dat Phong</th>
        <th scope="col">Tinh Trang Thanh Toan</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book->MaKH}}</th>
            <th scope="row">{{ $book->MaPhong}}</th>
            <th scope="row">{{ $book->NgayDatPhong }}</th>
            <th scope="row">{{ $book->NgayCheckIn }}</th>
            <th scope="row">{{ $book->NgayCheckOut }}</th>
            <th scope="row">{{ $book->SoNguoi}}</th>
            <th scope="row">{{ $book->TinhTrangDatPhong }}</th>
            <th scope="row">{{ $book->TinhTrangThanhToan }}</th>
        </tr>
    @endforeach
    </tbody>
</table>
<ul class="pagination">
    {{-- Nút "Previous" --}}
    @if ($books->onFirstPage())
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $books->previousPageUrl() }}" rel="prev"
               aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
    @endif

    {{-- Danh sách các trang --}}
    @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
        <li class="page-item {{ ($page == $books->currentPage()) ? 'active' : '' }}">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
        </li>
    @endforeach

    {{-- Nút "Next" --}}
    @if ($books->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $books->nextPageUrl() }}" rel="next"
               aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
    @else
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span class="page-link" aria-hidden="true">&rsaquo;</span>
        </li>
    @endif
</ul>

<script>
    function confirmDelete() {
        // Display a confirmation dialog
        var confirmation = confirm("Are you sure you want to delete?");

        // If true (OK/Yes) is clicked, proceed with deletion
        if (confirmation) {
            // Add your delete logic here or submit the form
            // For example, you might want to submit a form using JavaScript
            document.getElementById("deleteForm").submit();
        } else {
            // If canceled (Cancel/No) is clicked, do nothing or handle accordingly
            // You might want to prevent default form submission
        }
    }
</script>

<script src="{{asset("bootstrap/js/bootstrap.js")}}"></script>
</body>
</html>
