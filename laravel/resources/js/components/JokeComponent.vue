<template>
    <div class="mt-8 p-4">
        <details class="bg-black text-white" open>
            <summary class="bg-white text-black p-4 shadow-md">
                Expand to see what others have heard...
            </summary>

            <p class="px-4 py-2">
                <span class="text-green-300">{{ $name ?? "anonymous" }}</span
                >: {{ $joke ?? "" }}
            </p>
        </details>
    </div>
</template>

<script>
export default {
    props: ["joke"],
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
