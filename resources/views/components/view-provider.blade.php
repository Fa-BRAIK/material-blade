<!doctype html>
<html lang="{{ $lang }}">
<head>
    <title> {{ $title }} </title>

    {{ $metaTags ?? '' }}

    <link rel="stylesheet" href="{{ asset('vendor/material-blade/base.min.css') }}" />

    {{ $assets ?? '' }}

    @stack(config("material-blade.view-provider.stacks.styles"))
    @stack(config("material-blade.view-provider.stacks.scripts"))
</head>

<body>
    {{ $body ?? '' }}
</body>
</html>
