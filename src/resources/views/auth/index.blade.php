<x-admin::auth-layout title="{{__('admin::auth.login.title')}}">

    <x-admin::ui.form class="space-y-6">

        <x-admin::ui.input name="email" label="{{__('admin::auth.login.email')}}" required="true"/>

        <x-admin::ui.input name="password" label="{!! __('admin::auth.login.password') !!}?" required="true"/>

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

        <x-admin::ui.button type="submit" name="_token" value="{{csrf_token()}}">
            {{__('admin::auth.login.authenticate')}}
        </x-admin::ui.button>
    </x-admin::ui.form>

</x-admin::auth-layout>

