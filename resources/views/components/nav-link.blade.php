@php

$isCurrentRoute = $href === request()->getPathInfo();

$defaultStyle = "text-slate-200 hover:text-white";
$currentRouteStyle = "bg-slate-200 text-slate-600 hover:text-slate-500";

@endphp

<a
    {{ $attributes }}
    class="{{ $isCurrentRoute ? $currentRouteStyle : $defaultStyle }} px-3 py-2 rounded-md"
>
    {{ $slot }}
</a>
