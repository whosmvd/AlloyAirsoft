<a {{ $attributes->class([
    'w-full grid grid-cols-2 grid-rows-2 ring-2 ring-[#CACACA] rounded-3xl p-6 relative overflow-hidden'
])->merge([
    
]) }}>
    {{ $slot }}
</a>