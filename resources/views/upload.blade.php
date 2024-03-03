{{-- resources/views/upload.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(isset($relativeImagePath))
    <img src="{{ asset($relativeImagePath) }}" alt="Uploaded Image" style="max-width: 100%; height: auto;">
@endif

<form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Upload Image</button>
</form>
</body>
</html>
