@props(['type','nom'])
<div class="alert alert-{{$type}}" role="alert">
    {{$slot}}
</div>
