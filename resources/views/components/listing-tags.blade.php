@props(['tags-csv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp


@foreach ($tags as $tag)
    <li {{$attributes->merge(['class' => ''])}} >
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
@endforeach
