<div {{ $attributes->merge([
    'class' => 'bg-zinc-900 border rounded-lg shadow-sm border-zinc-800 pb-6',
]) }}>
    {{ $slot }}
</div>
