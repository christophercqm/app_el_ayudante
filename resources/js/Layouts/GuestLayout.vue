<script setup>
import Header from "@/Components/Header/Header.vue";
</script>

<template>
    <Header />

    <div class="w-100" style="min-height: calc(100vh - 120px)">
        <slot />
    </div>
</template>
