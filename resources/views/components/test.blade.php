@props(['class'])

<div class="{{$class}}">
    <div>{{$title}}</div>

    <div class="bg-green-800 text-slate-50 p-4">
        {{$slot}}
    </div>
</div>