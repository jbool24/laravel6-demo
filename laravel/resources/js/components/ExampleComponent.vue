<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="w-1/2">
                <div class="card">
                    <div class="card-header">Share A Joke to Others</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>

                    <div class="flex justify-center py-4 mt-20">
                        <span id="chuckNoris"></span>
                        <button
                            onclick="console.log('FUN FUN FUN');"
                            class="bg-blue-600 hover:bg-blue-300 text-bold py-4 px-8 mx-4 shadow-md rounded-lg"
                        >
                            Broadcast it!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
