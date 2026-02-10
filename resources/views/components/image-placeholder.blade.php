@props(['prompt' => 'Image placeholder', 'class' => 'w-full h-64'])

<div {{ $attributes->merge(['class' => 'relative overflow-hidden bg-brand-dark border border-brand-gold/20 group ' . $class]) }}>
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:16px_16px]"></div>
    
    {{-- Center Icon --}}
    <div class="absolute inset-0 flex items-center justify-center text-brand-gold/40">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="w-16 h-16">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
    </div>

    {{-- Prompt Overlay --}}
    <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/80 backdrop-blur-sm border-t border-brand-gold/20">
        <div class="flex items-start gap-3">
            <div class="mt-1">
                <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
            </div>
            <div class="font-mono text-xs text-brand-gold/80 leading-relaxed">
                <span class="text-brand-gray uppercase tracking-wider text-[10px]">AI Rendering Prompt:</span><br/>
                "{{ $prompt }}"
            </div>
        </div>
    </div>
</div>
