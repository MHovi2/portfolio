<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mehedi Hasan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- link part extend --}}
    @include('frontend.parts.link')

</head>

<body class="home">
    <!-- Live Style Switcher Starts - demo only -->
    @include('frontend.parts.setting')
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    @include('frontend.parts.nav')
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    @yield('main')

    <!-- Main Content Ends -->
    <!-- Template JS Files -->
    @include('frontend.parts.script')


</body>

</html>
