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
<a type="button" class="btn btn-success" href="{{ route('rooms.create') }}">Thêm mới một phòng</a>
<table class="table">
    <tbody>

    @foreach ($customers as $customer)
        <tr>
{{$customer}}
            <th scope="col">
                <form action="{{ route('customers.destroy', $customer) }}" method="POST">
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
    @if ($customers->onFirstPage())
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $customers->previousPageUrl() }}" rel="prev"
               aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
    @endif

    {{-- Danh sách các trang --}}
    @foreach ($customers->getUrlRange(1, $customers->lastPage()) as $page => $url)
        <li class="page-item {{ ($page == $customers->currentPage()) ? 'active' : '' }}">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
        </li>
    @endforeach

    {{-- Nút "Next" --}}
    @if ($customers->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $customers->nextPageUrl() }}" rel="next"
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
