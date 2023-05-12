<!DOCTYPE html>
<html lang="id">
    @include('partials.header')
    <body class="bg-img">
        @include('partials.navbar')
        <hr />
        <hr />
        <div class="container-md mt-5">
            <div class="card shadow-lg border-0 mb-4">
                <!-- card header  -->
                @yield('card-header')
                <!-- card body  -->
                @yield('card-body')
                <!-- card footer  -->
                @yield('card-footer')
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
