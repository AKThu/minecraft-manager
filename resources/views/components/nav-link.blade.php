@php

$isCurrentRoute = $href === request()->getPathInfo();

$defaultStyle = "text-slate-900 hover:text-slate-500";
$currentRouteStyle = "bg-rose-500 text-white";

@endphp

<a
    {{ $attributes }}
    class="{{ $isCurrentRoute ? $currentRouteStyle : $defaultStyle }} font-medium px-3 py-2 rounded-md drop-shadow drop-shadow-slate-300"
>
    {{ $slot }}
</a>
