<!-- @props(['size' => 'base'])
f this -->
@props(['tag' ])

<a href="/tags/{{ strtolower($tag->name) }}" class="bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl text-xs font-bold transition-colors duration-300">{{ $tag->name }}</a>