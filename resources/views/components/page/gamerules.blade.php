<div {{ $attributes->class([
    'flex laptop:flex-row tablet-xl:flex-col tablet:flex-col phone:flex-col zero:flex-col justify-between'
]) }}>
    {{ $slot }}
</div>
