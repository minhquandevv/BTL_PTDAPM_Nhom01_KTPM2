
<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('frontend.component.head')
</head>
<body>
    <header>
        <nav>
            <!-- Navigation bar content -->
            @include('frontend.navbar-3')
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('frontend.component.footer')
    </footer>


    
</body>
</html>
