<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module Home</title>

    <link rel="stylesheet" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/layout-home.css">
    @stack('links')

</head>

<body>
    @yield('content')

    <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>

</html>
