<div x-data="{show:false}" x-init="show=true" x-show="show" class="fixed bottom-0 inset-x-0 pb-2 sm:pb-5">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="p-2 rounded-lg bg-orange-600 shadow-lg">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                  <span class="flex p-2 rounded-lg bg-orange-100">
                      <x-admin::logo class="w-8 h-8"/>
                  </span>
                    <p class="ml-3 font-medium text-white truncate">
                        {{$message}}
                    </p>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-2">
                    <button x-on:click="show=false" type="button"
                            class="-mr-1 flex p-2 rounded-full hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Dismiss</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
