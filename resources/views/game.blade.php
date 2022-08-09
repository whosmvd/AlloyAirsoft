@extends('layouts.base')

@section('content')
    <p class="hidden" id="first_cord">{{ $first_cord }}</p>
    <p class="hidden" id="second_cord">{{ $second_cord }}</p>

    <div class="flex w-full justify-between items-center py-6">
        <x-text.title class="text-white">
            {{ __($game->name) }}
        </x-text.title>
        <x-text.gamedate :game='$game'/>
        <x-text.gametime :game='$game'/>
    </div>
    <div id="map" class="h-[400px] w-full rounded-3xl"></div>
    <div class="flex flex-row justify-between">
        <x-text.title>
            {{ __('s') }}
        </x-text.title>

    </div>
@endsection
