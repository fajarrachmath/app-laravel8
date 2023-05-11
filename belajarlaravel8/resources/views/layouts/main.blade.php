<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="css/custom.css" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        />
        <link rel="icon" href="img/logorsj.ico" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />
        <link
            href="vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="vendor/fontawesome-free-6.2.1-web/css/all.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
        <link href="vendor/sw2/dist/sweetalert2.min.css" rel="stylesheet" />
        <link
            href="vendor/boxed-check/css/boxed-check.min.css"
            rel="stylesheet"
        />
        <link href="css/custom.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <title>{{ $title }}</title>
    </head>
    <body class="bg-img">
        @include('partials.navbar')
        <hr />
        <hr />
        <div class="container-md mt-5">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-danger text-light">
                    @yield('card-header')
                </div>
                <div class="card-body">@yield('card-body')</div>
                <!-- <div class="card-footer">@yield('card-body')</div> -->
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </body>
</html>
