<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <!-- datatable -->
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <!-- bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!--- custom js -->
    <script type="module" src="homeProperty.js"></script>
    <script src="request_helpers.js"></script>
    <script src="modal_helpers.js"></script>

    <!--polyfill for IE11 -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/760ccaf1ef.js" crossorigin="anonymous"></script>

    <title>Load Board</title>

    <!-- add vite script -->
    @vite(['resources/css/rentalP.css', 'resources/js/app.js'])
    <!-- add app.scss rentalP.css and app.js in the vit directive -->

</head>

<body class="container-fluid">
    @include('layout.navbar')
    <!-- add slot or include where my nav bar will be -->
    <main>
        @yield('content')
    </main>


</body>
@include('layout.modalJSHelper')

</html>
