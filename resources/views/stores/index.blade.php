<x-app-layout>
    @slot('title', 'Stores')

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-4 gap-6">
            @foreach ($stores as $store)
                <x-card class="relative">
                    <a href="{{ route('stores.show', $store) }}" class="absolute inset-0 size-full"></a>
                    <div class="p-6 pb-0">
                        @if ($store->logo)
                            <img src="{{ Storage::url($store->logo) }}" alt="{{ $store->name }}"
                                class="rounded-lg size-16">
                        @else
                            <div class="rounded-lg size-16 bg-zinc-600"></div>
                        @endif
                    </div>
                    <x-card.header>
                        <x-card.title>
                            {{ $store->name }}
                        </x-card.title>
                        <x-card.description>
                            {{ $store->description }}
                        </x-card.description>

                        @auth

                            @if ($store->user_id === auth()->user()->id)
                                <a href="{{ route('stores.edit', $store) }}" class="text-blue-600 underline">
                                    Edit
                                </a>
                            @endif
                        @endauth
                    </x-card.header>
                </x-card>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $stores->links() }}
        </div>
    </x-container>
</x-app-layout>
