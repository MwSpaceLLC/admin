<div x-data="{show:false}" x-init="show=true" aria-live="assertive"
     class="fixed z-50 inset-0 flex bottom-0 items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
    <div class="w-full flex flex-col items-center space-y-4 sm:items-end">

        <div
            x-transition
            x-show="show"
            x-on:click.away="show=false"
            class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">

                        @if(isset($type))
                            @switch($type)
                                @case('error')
                                <x-heroicon-o-x-circle class="h-6 w-6 text-red-400"></x-heroicon-o-x-circle>
                                @break

                                @case('success')
                                <x-heroicon-o-check-circle
                                    class="h-6 w-6 text-green-400"></x-heroicon-o-check-circle>
                                @break
                            @endswitch
                        @else
                            <x-heroicon-o-check-circle
                                class="h-6 w-6 text-green-400"></x-heroicon-o-check-circle>
                        @endif

                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="mt-1 text-sm text-gray-500">
                            {{$message}}
                        </p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button
                            x-on:click="show=false"
                            class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <span class="sr-only">Close</span>
                            <!-- Heroicon name: solid/x -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
