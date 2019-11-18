@extends('layouts.app')

@section('content')
    <div id="page-wrapper" class="flex flex-col h-full">

        <div class="text-center py-6 h-24 mb-4 bg-blue-900 shadow-lg">
            <h1 class="text-white text-3xl font-black tracking-wide">Got Jokes?</h1>
        </div>

        <div id="content" class="flex flex-col flex-grow mx-20">

            <div class="shadow-md text-gray-800 bg-gray-100 pb-4">
                @if(isset($user['name']))
                    <h2 class="p-4 text-2xl border">Hi, {{ucwords($user['name'])}}. Want to hear a joke?</h2>
                @endif

                <h3 class="text-center text-lg font-bold py-4 px-4">{{ $joke ?? '' }}</h2>

                <div class="flex justify-center py-4 mt-10">
                    <span id="chuckNoris"></span>
                    <button
                        id="submitButton"
                        onclick="handleClick();"
                        class="bg-blue-600 hover:bg-blue-300 text-bold py-4 px-4 mx-4 shadow-md rounded-lg"
                    >
                        Share With Everyone!
                    </button>
                </div>
            </div>

            <div id="app"></div>

        <div/>

    </div>
    <script type="text/javascript">
          const handleClick = function(joke) {
            console.log('FUN FUN FUN',' {{$joke}}');
            window.axios('http://localhost:8000/joke/send?id={{$user['id']}}&joke={{urlencode($joke)}}')
          }
    </script>
@endsection
