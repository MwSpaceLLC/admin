<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
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
<body class="antialiased h-full">

<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">

        <x-admin::logo class="mx-auto h-16 w-auto"/>

        <h2 class="mt-6 text-center text-4xl font-extrabold text-gray-900">
            {{__('admin::auth.login.title')}}
        </h2>
        <p class="mt-2 text-center text-lg text-gray-600">
            {{__('admin::auth.login.or')}}
            <a href="https://laravel.com/" target="_blank" rel="nofollow"
               class="font-medium text-orange-600 hover:text-orange-500">
                {{__('admin::auth.login.laravel')}}
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

            {{$slot}}

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">
                              Powerade with 💗 by <a class="underline text-blue-500" target="_blank" rel="nofollow"
                                                     href="https://mwspace.com/it">MwSpace</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if($errors->any())
    @foreach ($errors->all() as $key => $error)
        <x-admin::notification type="error" message="{{$error}}"></x-admin::notification>
    @endforeach
@endif

@if(session('success'))
    <x-admin::notification type="success" message="{{session('success')}}"></x-admin::notification>
@endif

</body>
</html>
