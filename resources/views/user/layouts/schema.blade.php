<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | {{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('./src/css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('./src/css/index.css') }}">
  @vite('resources/css/app.css')
</head>
<body>
{{-- Navbar --}}
@include('user.layouts.partials.navbar')

{{-- Body --}}
@yield('user-main')

{{-- Footer --}}
@include('user.layouts.partials.footer')

</body>
</html>
