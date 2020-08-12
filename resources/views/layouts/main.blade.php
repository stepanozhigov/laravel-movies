<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body class="font-sans bg-gray-900 text-white">
    <x-nav-bar></x-nav-bar>
    @yield('content')
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    @stack('scripts')
</body>
</html>
