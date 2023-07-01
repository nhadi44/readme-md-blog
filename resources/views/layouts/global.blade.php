<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/icons/madrkdown-white.png" type="image/x-icon">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/layout-home.css">
    @stack('links')

</head>

<body>
    <x-navbar />
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                @yield('content')
            </div>
        </div>
    </main>
    <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>

</html>
