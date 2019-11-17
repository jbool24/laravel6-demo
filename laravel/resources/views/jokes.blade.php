@extends('layouts.app')

@section('content')
    <div id="page-wrapper" class="flex flex-col h-screen">

        <div class="text-center py-6 h-24 mb-4 bg-blue-900 shadow-lg">
            <h1 class="text-white text-3xl font-black tracking-wide">Got Jokes?</h1>
        </div>

        <div id="content" class="flex flex-col flex-grow mx-20">

            <div class="shadow-md text-gray-800 bg-gray-100 pb-4">
                @if(isset($name))
                    <h2 class="p-4 text-2xl border">Hi, {{ucwords($name)}}. Want to hear a joke?</h2>
                @endif

                <h3 class="text-center text-lg font-bold py-2 px-4">{{ $joke ?? '' }}</h2>

                <div class="flex justify-center py-4 mt-20">
                    <span id="chuckNoris"></span>
                    <button
                        onclick="console.log('FUN FUN FUN');"
                        class="bg-blue-600 hover:bg-blue-300 text-bold py-4 px-8 mx-4 shadow-md rounded-lg"
                    >
                        Share With Everyone!
                    </button>
                </div>
            </div>

            <div class="my-4">
                <example-component></example-component>
            </div>

            <div class="mt-8 py-4">
                <details class="bg-black text-white" open>
                    <summary class="bg-white text-black p-4 shadow-md"> Expand to see what others have heard...</summary>
                        @foreach ($jokes as $joke)
                            <p class="px-4 py-2">
                                <span class="text-green-300">{{ $name ?? 'anonymous' }}</span>: {{ $joke ?? '' }}
                            </p>
                        @endforeach
                </details>
            </div>

        <div/>

    </div>
@endsection
