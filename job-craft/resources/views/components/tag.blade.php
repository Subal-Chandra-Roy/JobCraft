@props([ 'tag','size' => 'base'])

@php
    $classes = "bg-white hover:bg-gray-300 rounded-xl text-2xs font-bold transition-colors duration-300 border border-blue-400";

    if ($size === 'base') {
        $classes .= " px-3 py-1.5 text-sm";
    }

    if ($size === 'small') {
        $classes .= "  py-1 text-2xs";
    }
@endphp
<a href="/tags/{{ strtolower($tag->name)}}" class="{{ $classes }}">{{$tag->name}}</a>

