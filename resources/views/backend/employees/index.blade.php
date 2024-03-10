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
<a type="button" class="btn btn-success" href="{{ route('employees.create') }}">Thêm NV</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Ten tai khoan</th>
        <th colspan="3" class="text-center">Hành động</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($employees as $employee)
        <tr>
            <th scope="row">{{ $employee->MaNV}}</th>
            <th scope="col"><a href="{{ route('employees.show', $employee->MaNV)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-eye" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                    </svg>
                </a></th>
            <th scope="col"><a href="{{ route('employees.edit', $employee->MaNV)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-pen" viewBox="0 0 16 16">
                        <path
                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                    </svg>
                </a></th>
            <th scope="col">
                <form action="{{ route('employees.destroy', $employee->MaNV) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="border-0 bg-transparent" type="submit" onclick="confirmDelete()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </form>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>
<ul class="pagination">
    {{-- Nút "Previous" --}}
    @if ($employees->onFirstPage())
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $employees->previousPageUrl() }}" rel="prev"
               aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
    @endif

    {{-- Danh sách các trang --}}
    @foreach ($employees->getUrlRange(1, $employees->lastPage()) as $page => $url)
        <li class="page-item {{ ($page == $employees->currentPage()) ? 'active' : '' }}">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
        </li>
    @endforeach

    {{-- Nút "Next" --}}
    @if ($employees->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $employees->nextPageUrl() }}" rel="next"
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
