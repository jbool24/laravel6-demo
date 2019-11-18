@extends('layouts.app')

@section('content')
    <div id="page-wrapper" class="flex flex-col h-full">

        <div class="text-center py-6 h-24 mb-4 bg-blue-900 shadow-lg">
            <h1 class="text-white text-3xl font-black tracking-wide">Got Jokes?</h1>
        </div>

        <div id="content" class="flex flex-col flex-grow mx-20">

            <div class="shadow-md text-gray-800 bg-gray-100 pb-4">
                @if(isset($name))
                    <h2 class="p-4 text-2xl border">Hi, {{ucwords($name)}}. Want to hear a joke?</h2>
                @endif

                <h3 class="text-center text-lg font-bold py-4 px-4">{{ $joke ?? '' }}</h2>

                <div class="flex justify-center py-4 mt-10">
                    <span id="chuckNoris"></span>
                    <button
                        onclick="console.log('FUN FUN FUN');"
                        class="bg-blue-600 hover:bg-blue-300 text-bold py-4 px-4 mx-4 shadow-md rounded-lg"
                    >
                        Share With Everyone!
                    </button>
                </div>
            </div>

            <div id="app"></div>

            {{-- <div class="my-4">
                <joke-component summary="Expand to see what others have heard..." >
                    <p v-for="joke in jokes" class="px-4 py-2">
                        <span class="text-green-300">
                            {{ joke.user }}
                        </span>

                        :{{ joke.value }}
                    </p>
                </joke-component>
            </div> --}}

        <div/>

    </div>
@endsection
