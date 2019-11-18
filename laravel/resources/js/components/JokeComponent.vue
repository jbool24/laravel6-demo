<template>
    <div class="mt-8 py-4">
        <details class="bg-black text-white" open>
            <summary class="bg-white text-black p-4 shadow-md">
                {{ summary }}
            </summary>

            <slot></slot>
        </details>
    </div>
</template>

<script>
export default {
    props: {
        summary: String
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
