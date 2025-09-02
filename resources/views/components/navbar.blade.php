<nav class="flex flex-row justify-between items-center px-5 py-3 bg-slate-50 drop-shadow drop-shadow-slate-300">
    <div class="flex flex-row items-center">
        <!-- Logo -->
        <div class="select-none drop-shadow drop-shadow-slate-300">
            <x-logo></x-logo>
        </div>
        <!-- Navigation links -->
        <div class="mx-10">
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/worlds">Worlds</x-nav-link>
        </div>
    </div>


    <!-- login/logout, user icon -->
    <div>
        <x-nav-link href="#">Login</x-nav-link>
        <x-nav-link href="#">Register</x-nav-link>
    </div>
</nav>
