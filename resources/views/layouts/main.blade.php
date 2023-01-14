<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics | @yield('Page title') </title>

    {{-- <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Fonts --> --}}

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font awesome -->

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lato:wght@400;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Open+Sans:wght@400;800&family=PT+Sans:ital,wght@0,400;0,700;1,400&family=PT+Serif:ital@0;1&family=Prompt:wght@400;500&family=Roboto:wght@400;700&family=Ubuntu:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <!-- Font Google -->

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    <main >
        @yield('page-content')
    </main>

    @include('partials.footer')

</body>

</html>
