@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-darkbrown dark:text-darkbrown']) }}>
    {{ $value ?? $slot }}
</label>