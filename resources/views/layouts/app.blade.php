<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App</title>
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
</head>
<body>
    <style>
        .swal2-popup {
            background: linear-gradient(to right, #0bb9eb, #02c87e);
        }

        .rounded-icon {
    width: 120px;
    height: 120px;
    /* border-radius: 50%; Apply border-radius for full-rounded shape */
}
    </style>

    @yield('content')

    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
</body>
</html>
