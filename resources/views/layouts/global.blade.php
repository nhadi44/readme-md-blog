<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/icons/madrkdown-white.png" type="image/x-icon">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/layout-home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    @stack('links')

</head>

<body>
    <header class="sticky-element">
        <x-navbar />
    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                @yield('content')
            </div>
        </div>
    </main>
    <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/libs/layout-home.js"></script>
    @stack('scripts')
</body>

</html>
