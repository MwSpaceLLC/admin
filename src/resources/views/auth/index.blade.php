<x-admin-auth-layout>

    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="https://laravel.com/img/logomark.min.svg"
                 alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                {{__('admin::auth.login.title')}}
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                {{__('admin::auth.login.or')}}
                <a href="https://laravel.com/" target="_blank" rel="nofollow"
                   class="font-medium text-orange-600 hover:text-orange-500">
                    {{__('admin::auth.login.laravel')}}
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="post" x-data="{load:false}" x-on:submit="load=true;" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            {{__('admin::auth.login.email')}}
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            {{__('admin::auth.login.password')}}?
                        </label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                   required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember" type="checkbox"
                                   class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                {{__('admin::auth.login.remember')}}
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-orange-600 hover:text-orange-500">
                                {{__('admin::auth.login.forgot')}}?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" name="_token" value="{{csrf_token()}}"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                            <span x-show="!load">{{__('admin::auth.login.authenticate')}}</span>
                            <span x-show="load" class="animate-pulse">•••</span>
                        </button>
                    </div>
                </form>

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

</x-admin-auth-layout>
