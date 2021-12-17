<div class="flex flex-col space-y-3">
    <label for="{{$name}}" class="text-xl font-bold block">{{$label}}</label>
    <input type="text" name="{{$name}}" id="{{$name}}"
           class="border border-gray-300 h-12 block w-full px-4 appearance-none outline-none focus:ring-0 focus:border-gray-500"
           required="{{isset($required)}}" value="{{$value??old($name)}}">
</div>
