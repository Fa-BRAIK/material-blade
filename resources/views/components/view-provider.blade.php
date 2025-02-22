<!doctype html>
<html lang="{{ $lang ?? str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')

    @stack(config("material-blade.view-provider.stacks.styles"))
    @stack(config("material-blade.view-provider.stacks.scripts"))
</head>

<body>
    @yield('body')
</body>
</html>
