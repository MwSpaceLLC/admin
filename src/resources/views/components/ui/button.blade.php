<button type="{{$type??'button'}}" name="{{$name??''}}" value="{{$value??''}}"
        class="group relative h-12 inline-flex w-full border border-orange-600 focus:outline-none">
        <span
            class="absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-white text-center font-medium bg-orange-600 ring-1 ring-orange-600 ring-offset-1 ring-offset-orange-600 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
            @if(isset($type) && $type === 'submit')
                <span x-show="!load">{{$slot}}</span>
                <span x-show="load" class="animate-pulse">•••</span>
            @else
                <span>{{$slot}}</span>
            @endif
        </span>
</button>
