<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
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
<body class="antialiased h-full" x-data="{mobile:false}">

<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<x-admin::off-canvas-mobile/>

<!-- Static sidebar for desktop -->
<x-admin::sidebar/>

<!-- Content area -->
<div class="md:pl-64">
    <div class="max-w-4xl mx-auto flex flex-col md:px-8 xl:px-0">

        <x-admin::sticky-head/>

        <main class="flex-1">
            {{$slot}}
        </main>
    </div>
</div>

@if($errors->any())
    @foreach ($errors->all() as $key => $error)
        <x-admin::notification message="{{$error}}"></x-admin::notification>
    @endforeach
@endif

@if(session('success'))
    <x-admin::notification message="{{session('success')}}"></x-admin::notification>
@endif
</body>
</html>
