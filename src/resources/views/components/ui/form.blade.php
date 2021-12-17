<form {{ $attributes }} method="post" x-data="{load:false}" x-on:submit="load=true;">
    {{$slot}}
</form>
