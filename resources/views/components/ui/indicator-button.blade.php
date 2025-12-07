@php
    $label = $label ?? 'Messages';
    $count = $count ?? 0;
@endphp

<button type="button" class="relative inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
    <svg class="w-4 h-4 me-1.5 -ms-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8"/></svg>
    <span class="sr-only">Notifications</span>
    {{ $label }}
    @if($count > 0)
        <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-danger border-2 border-buffer rounded-full -top-2 -end-2">{{ $count }}</div>
    @endif
</button>
