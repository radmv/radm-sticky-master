<x-app-layout>
    @slot('title', 'My Stores')

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('My Stores') }}
        </h2>
    </x-slot>

    <x-container>
        @if ($stores->count() > 0)
            <div class="grid grid-cols-4 gap-8">
                @foreach ($stores as $store)
                    <x-stores.item :$store />
                @endforeach
            </div>
        @else
            <p class="text-zinc-400">You don't have any stores yet.</p>
        @endif
    </x-container>
</x-app-layout>
