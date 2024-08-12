<x-app-layout>
    @slot('title', 'Home')

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="overflow-hidden shadow-sm sm:rounded-lg bg-zinc-800">
            <div class="p-6">
                Homepage
            </div>
        </div>
    </x-container>
</x-app-layout>
