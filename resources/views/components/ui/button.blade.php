@php
    $variant = $variant ?? 'default';
    $buttonType = $buttonType ?? 'button';

    $variants = [
        'default' => 'text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'secondary' => 'text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'tertiary' => 'text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-soft shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'success' => 'text-white bg-success box-border border border-transparent hover:bg-success-strong focus:ring-4 focus:ring-success-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'danger' => 'text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'warning' => 'text-white bg-warning box-border border border-transparent hover:bg-warning-strong focus:ring-4 focus:ring-warning-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'dark' => 'text-white bg-dark box-border border border-transparent hover:bg-dark-strong focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
        'ghost' => 'text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none',
    ];

    $classes = $variants[$variant] ?? $variants['default'];
@endphp

<button type="{{ $buttonType }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
