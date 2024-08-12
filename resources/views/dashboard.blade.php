<x-app-layout>
    @slot('title', 'Dashboard')

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container>
        <x-card class="p-6">
            {{ __('You are logged in!') }}
        </x-card>
    </x-container>
</x-app-layout>
