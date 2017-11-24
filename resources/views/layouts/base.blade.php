<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?= csrf_token() ?>">

    <title>@yield('title', config('app.name'))</title>
</head>

<body>

<div class="container">
    @yield('content.base')
</div>

<link media="all" type="text/css" rel="stylesheet" href="{{ mix('/assets/styles/app.css') }}">
</body>
</html>
