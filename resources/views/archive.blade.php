@extends('layouts.base')

@section('content')
    <main class="grow">
        @if ($games->count() > 0)
            @foreach ($games as $game)
                <div class="hidden boolshit">
                    <p class="hidden" id="map-counter">{{ $games_count }}</p>
                </div>
                <div class="w-full flex flex-row items-end justify-center my-9">
                    <b class="text-5xl mr-3 font-normal">
                        {{ date('d', strtotime($game->date)) }}
                    </b>
                    <p class="leading-6">
                        {{ date('M', strtotime($game->date)) }}
                    </p>
                </div>
                <x-elems.gamecard :loop=$loop :game=$game />
            @endforeach
        @else
            <h2 class="mt-10 md:mt-16">
                {{ __('Nothing here') }}
            </h2>
            <a href="{{ route('index') }}" class="flex flex-row w-full sm:w-[70%] lg:w-[50%] xl:w-[40%] mt-6 whitespace-pre bg-dark/50 p-6 rounded-2xl ease-out duration-100 hover:bg-dark">
                <p class="leading-none text-2xl md:text-4xl select-none">{{ __('Wanna see our
future games?') }}</p>
            </a>
        @endif
    </main>
@endsection
