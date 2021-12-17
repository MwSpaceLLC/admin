<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{$title??__('admin::app-layout.title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$description??__('admin::app-layout.description')}}">

    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>

</head>
<body class="antialiased">
{{$slot}}
</body>
</html>
