<!-- x-nav-link-small.blade.php -->
@props(['href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'py-2 w-full text-center border-b border-gray-300 hover:bg-gray-200']) }}>
    {{ $slot }}
</a>
