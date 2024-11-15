<script setup>
import Header from '@/Components/Header/Header.vue';
</script>

<template>
    <Header />

        <div
            class="mt-5 w-100"
        >
            <slot />
        </div>

</template>
