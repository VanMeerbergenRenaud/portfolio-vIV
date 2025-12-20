@props(['block'])

@php
    $type = $block['type'] ?? '';
    $data = $block['data'] ?? [];
@endphp

@switch($type)
    @case('heading')
        @php
            $level = $data['level'] ?? 'h2';
            $content = $data['content'] ?? '';
            $id = $data['id'] ?? '';
        @endphp

        @if($level === 'h3')
            <x-font.text-2xl :isTitle="true" level="3" class="mt-10 mb-5 font-bold text-gray-900" id="{{ $id }}">
                {{ $content }}
            </x-font.text-2xl>
        @elseif($level === 'h4')
            <x-font.text-xl :isTitle="true" level="4" class="mt-8 mb-4 font-semibold text-gray-900" id="{{ $id }}">
                {{ $content }}
            </x-font.text-xl>
        @else
            <x-font.text-lg :isTitle="true" level="5" class="mt-6 mb-3 font-medium text-gray-900" id="{{ $id }}">
                {{ $content }}
            </x-font.text-lg>
        @endif
    @break

    @case('paragraph')
        <x-font.text class="my-2.5 text-gray-dark font-normal text-lg">
            {{ $data['content'] ?? '' }}
        </x-font.text>
    @break

    @case('rich_text')
        <div class="my-4 text-gray-dark font-normal text-lg rich-text">
            {!! $data['content'] ?? '' !!}
        </div>
    @break

    @case('image')
        <noindex>
            <figure class="mt-8">
                <img src="{{ Storage::disk('s3')->url($data['url']) }}"
                     alt="{{ $data['alt'] ?? '' }}"
                     class="rounded-2xl w-full"
                     loading="lazy"
                >
                @if(!empty($data['caption']))
                    <figcaption class="text-center mt-2">
                        <x-font.text-md class="text-gray-medium font-normal">
                            {{ $data['caption'] }}
                        </x-font.text-md>
                    </figcaption>
                @endif
            </figure>
        </noindex>
    @break


    @case('code_img')
        <noindex>
            <figure class="mt-6 mb-4">
                {{-- Img --}}
                @if(!empty($data['url']))
                    <img src="{{ Storage::disk('s3')->url($data['url']) }}"
                         alt="{{ $data['alt'] ?? 'Code snippet' }}"
                         class="rounded-2xl w-full"
                         loading="lazy"
                    >
                @else
                    <p class="bg-gray-100 rounded-xl p-6 text-gray-dark text-center">
                        Image de code non disponible
                    </p>
                @endif

                {{-- Caption --}}
                @if(!empty($data['caption']))
                    <figcaption class="text-left mt-2.5 pl-2">
                        <x-font.text-md class="text-gray-medium font-normal">
                            {{ $data['caption'] }}
                        </x-font.text-md>
                    </figcaption>
                @endif
            </figure>
        </noindex>
    @break

    @case('code_text')
        <div class="relative -left-1 mt-6 mb-8 pr-1" x-data="{
            copied: false,
            copyCode() {
                const code = this.$refs.codeBlock.innerText;
                const textarea = document.createElement('textarea');
                textarea.value = code;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';
                document.body.appendChild(textarea);
                textarea.select();
                try {
                    document.execCommand('copy');
                    this.copied = true;
                    setTimeout(() => this.copied = false, 2000);
                } catch (err) {
                    console.error('Erreur de copie:', err);
                }
                document.body.removeChild(textarea);
            }
        }">
            @if(!empty($data['language']))
                <div class="flex justify-between gap-4 bg-gray-100/80 border border-gray-200 border-b-0 rounded-t-xl">
                    <span class="px-6 py-3 text-xs text-gray-700 uppercase">
                        {{ $data['language'] }}
                    </span>
                    <button
                        type="button"
                        @click="copyCode()"
                        class="relative right-0.5 bg-transparent p-3 rounded-tr-xl text-gray-500 hover:text-gray-900 transition-colors duration-150"
                        aria-label="Copier le code"
                    >
                        <div class="relative flex items-center justify-center">
                            <svg
                                x-show="!copied"
                                x-transition:opacity.duration.150ms
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            >
                                <rect width="13" height="13" x="9" y="9" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            <svg
                                x-show="copied"
                                x-transition:opacity.duration.150ms
                                x-cloak
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            >
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>

                        <div
                            x-show="copied"
                            x-transition:opacity.duration.200ms
                            class="absolute top-12 right-1.5 py-2 px-2.5 rounded-lg text-xs text-white font-medium bg-zinc-600 overflow-visible"
                        >
                            Copié
                        </div>
                    </button>
                </div>
            @endif

            <div tabindex="0" class="py-2 px-4 overflow-x-auto bg-gray-50 border border-gray-200 {{ empty($data['language']) ? 'rounded-xl' : 'rounded-b-xl' }}">
                <pre class="leading-4 text-xs"><code x-ref="codeBlock" class="language-{{ $data['language'] ?? 'plaintext' }} w-full text-xs">{{ $data['code'] ?? '' }}</code></pre>
            </div>

            @if(!empty($data['caption']))
                <figcaption class="text-left mt-2.5 pl-3">
                    <x-font.text-sm class="text-gray-medium">
                        {{ $data['caption'] }}
                    </x-font.text-sm>
                </figcaption>
            @endif
        </div>
    @break

    @case('quote')
        <blockquote class="my-10 pl-6 border-l-4 border-red-500 py-2">
            <x-font.text-lg class="italic text-dark-primary font-serif leading-relaxed">
                "{{ $data['content'] ?? '' }}"
            </x-font.text-lg>
            @if(!empty($data['author']))
                <footer class="mt-3">
                    <x-font.text class="text-gray-500 font-medium text-sm tracking-wide">
                        — {{ $data['author'] }}
                    </x-font.text>
                </footer>
            @endif
        </blockquote>
    @break

    @case('spacing')
        @php
            $size = $data['size'] ?? '20';
        @endphp
            <div style="height: {{ $size }}px;"></div>
    @break

    @case('gallery')
        <div class="mt-8 grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($data['images'] ?? [] as $image)
                <noindex>
                    <img src="{{ Storage::disk('s3')->url($image) }}"
                         alt="Galerie d'images"
                         class="rounded-lg w-full h-full object-cover"
                         loading="lazy"
                    >
                </noindex>
            @endforeach
        </div>
    @break

    @case('sources')
        <div class="mt-10 mb-8 p-6 bg-gray-50 border border-gray-200 rounded-xl">
            <x-font.text-xl class="mb-4 flex gap-2">
                <span>📚</span>Sources et références
            </x-font.text-xl>

            @if(!empty($data['items']))
                <ul class="space-y-3">
                    @foreach($data['items'] as $source)
                        <li class="flex flex-col">
                            <a href="{{ $source['url'] ?? '#' }}"
                               target="_blank"
                               rel="noopener noreferrer nofollow"
                               class="flex md:items-center gap-3"
                            >
                                <svg class="flex shrink-0 mt-1.5 lg:mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                <span class="text-red-600 hover:text-red-800">{{ $source['title'] ?? 'Source' }}</span>
                            </a>
                            @if(!empty($source['description']))
                                <x-font.text-md class="text-gray-600 mt-1 ml-7 font-normal">
                                    {{ $source['description'] }}
                                </x-font.text-md>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    @break
@endswitch

