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
            <x-font.text-2xl :isTitle="true" level="3" class="mt-10 mb-4 font-semibold" id="{{ $id }}">
                {{ $content }}
            </x-font.text-2xl>
        @elseif($level === 'h4')
            <x-font.text-xl :isTitle="true" level="4" class="mt-6 mb-3" id="{{ $id }}">
                {{ $content }}
            </x-font.text-xl>
        @else
            <x-font.text-lg :isTitle="true" level="5" class="mt-4 mb-2" id="{{ $id }}">
                {{ $content }}
            </x-font.text-lg>
        @endif
        @break

    @case('paragraph')
        <x-font.text class="leading-relaxed">
            {{ $data['content'] ?? '' }}
        </x-font.text>
    @break

    @case('rich_text')
        <div class="rich-text prose prose-lg">
            {!! $data['content'] ?? '' !!}
        </div>
    @break

    @case('image')
        <figure class="mt-8">
            <img src="{{ Storage::disk('s3')->url($data['url']) }}"
                 alt="{{ $data['alt'] ?? '' }}"
                 class="rounded-2xl w-full"
                 loading="lazy"
            >
            @if(!empty($data['caption']))
                <figcaption class="text-center mt-2">
                    <x-font.text-sm class="text-gray-medium">
                        {{ $data['caption'] }}
                    </x-font.text-sm>
                </figcaption>
            @endif
        </figure>
    @break


    @case('code_img')
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
                    <x-font.text-sm class="text-gray-medium">
                        {{ $data['caption'] }}
                    </x-font.text-sm>
                </figcaption>
            @endif
        </figure>
    @break

    @case('quote')
        <blockquote class="border-l-4 border-red pl-4 mt-6 italic">
            <x-font.text-lg>
                {{ $data['content'] ?? '' }}
            </x-font.text-lg>
            @if(!empty($data['author']))
                <footer class="mt-2">
                    <x-font.text class="text-gray-medium">
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
                <img src="{{ Storage::disk('s3')->url($image) }}"
                     alt="Galerie d'images"
                     class="rounded-lg w-full h-full object-cover"
                     loading="lazy"
                >
            @endforeach
        </div>
    @break
@endswitch

