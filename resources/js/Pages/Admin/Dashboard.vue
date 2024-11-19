<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>

<template>
  <Head title="Dashboard" />

    <div class="py-5">
      <div class="container-fluid">
        <div class="card shadow-sm">
          <div class="card-body">
            <p class="text-muted">¡Has iniciado sesión correctamente!</p>
          </div>
        </div>
      </div>
    </div>
</template>
