<!DOCTYPE html>
<html>

<head>
    @include('frontend.component.head')
</head>

<body>
<div id="wrapper">
    @include('frontend.component.navbar')
    @include($template)
    @include('frontend.component.footer')
</div>
@include('frontend.component.script')
</body>

</html>
