@props([
    'title',
    'description'
])

<div class="mb-6 break-inside-avoid">
    <div class="relative w-full rounded-2xl border md:max-w-90 p-8 overflow-hidden border-neutral-800 bg-neutral-900">

        {{-- Background SVG --}}
        <div class="absolute inset-0 opacity-40">
            <svg width="360" height="375" viewBox="0 0 360 375" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                <path d="M67.2422 71.7423H368.999C369.275 71.7423 369.499 71.9662 369.499 72.2423V374C369.499 374.276 369.275 374.5 368.999 374.5H67.2422C66.9661 374.5 66.7423 374.276 66.7422 374V72.2423C66.7422 71.9662 66.966 71.7423 67.2422 71.7423ZM93.6543 97.1544C92.8259 97.1544 92.1543 97.826 92.1543 98.6544V347.586C92.1544 348.414 92.8259 349.086 93.6543 349.086H342.585C343.413 349.086 344.085 348.414 344.085 347.586V98.6544C344.085 97.826 343.413 97.1544 342.585 97.1544H93.6543Z" fill="#171717" stroke="url(#paint0_linear_452_92030)"></path>
                <path d="M113.466 117.966H322.775C323.051 117.966 323.275 118.19 323.275 118.466V327.776C323.274 328.052 323.051 328.276 322.775 328.276H113.466C113.19 328.276 112.966 328.052 112.966 327.776V118.466L112.976 118.366C113.022 118.138 113.224 117.966 113.466 117.966ZM139.878 143.378C139.05 143.378 138.378 144.05 138.378 144.878V301.362C138.378 302.19 139.05 302.862 139.878 302.862H296.361C297.189 302.862 297.86 302.19 297.861 301.362V144.878C297.861 144.05 297.189 143.378 296.361 143.378H139.878Z" fill="#171717" stroke="url(#paint1_linear_452_92030)"></path>
                <path d="M-12 -7.5H276.551C276.827 -7.5 277.051 -7.27614 277.051 -7V281.552C277.051 281.828 276.827 282.052 276.551 282.052H-12C-12.2761 282.052 -12.4999 281.828 -12.5 281.552V-7C-12.5 -7.27614 -12.2761 -7.5 -12 -7.5ZM40.8281 44.3281C39.9998 44.3281 39.3282 44.9998 39.3281 45.8281V228.724C39.3283 229.552 39.9998 230.224 40.8281 230.224H223.723C224.551 230.224 225.222 229.552 225.223 228.724V45.8281C225.223 44.9998 224.551 44.3281 223.723 44.3281H40.8281Z" fill="#171717" stroke="url(#paint2_linear_452_92030)"></path>
                <defs>
                    <linearGradient id="paint0_linear_452_92030" x1="66.2422" y1="223.121" x2="369.999" y2="223.121" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#202020"></stop>
                        <stop offset="1" stop-color="#404040"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_452_92030" x1="112.466" y1="223.121" x2="323.775" y2="223.121" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#202020"></stop>
                        <stop offset="1" stop-color="#404040"></stop>
                    </linearGradient>
                    <linearGradient id="paint2_linear_452_92030" x1="-13" y1="137.276" x2="277.551" y2="137.276" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#202020"></stop>
                        <stop offset="1" stop-color="#404040"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        {{-- Content --}}
        <div class="relative z-10">
            <div class="mb-16 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="h-6 w-6 shrink-0 text-neutral-600">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.25 15C17.2153 15 15 17.2153 15 22.25C15 17.2153 12.7847 15 7.75 15C12.7847 15 15 12.7847 15 7.75C15 12.7847 17.2153 15 22.25 15Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 6.5C7.95139 6.5 6.5 7.95139 6.5 11.25C6.5 7.95139 5.04861 6.5 1.75 6.5C5.04861 6.5 6.5 5.04861 6.5 1.75C6.5 5.04861 7.95139 6.5 11.25 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                </svg>
                <x-font.text class="m-0 text-neutral-400">{{ $title }}</x-font.text>
            </div>
            <x-font.text class="font-normal text-neutral-100">{{ $description }}</x-font.text>
        </div>
    </div>
</div>

