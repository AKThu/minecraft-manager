<x-layout>
    <div class="grid grid-cols-4 gap-8 p-10">
        @foreach (range(1, 8) as $world)
            <x-world-card>
            </x-world-card>
        @endforeach
    </div>
</x-layout>
