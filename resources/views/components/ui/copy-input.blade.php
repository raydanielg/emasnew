@php
    $inputId = $inputId ?? $id ?? 'copy-input';
    $value = $value ?? 'npm install flowbite';
    $buttonLabel = $buttonLabel ?? 'Copy';
@endphp

<div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
    <label for="{{ $inputId }}" class="sr-only">{{ $label ?? 'Copy input' }}</label>
    <input
        id="{{ $inputId }}"
        type="text"
        class="col-span-6 bg-neutral-secondary-medium border border-default-medium text-body text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
        value="{{ $value }}"
        disabled
        readonly
    >
    <button
        data-copy-to-clipboard-target="{{ $inputId }}"
        class="col-span-2 text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm py-2.5 focus:outline-none sm:w-auto"
        type="button"
    >
        <span id="default-message">{{ $buttonLabel }}</span>
        <span id="success-message" class="hidden">
            <div class="inline-flex items-center">
                <svg class="w-3 h-3 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/></svg>
                Copied!
            </div>
        </span>
    </button>
</div>
