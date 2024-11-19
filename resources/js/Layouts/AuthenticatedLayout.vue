<script setup>
import { ref } from "vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { Link } from "@inertiajs/vue3";

import logo from "@images/logo/logo-white.webp";


const showingNavigationDropdown = ref(false);
</script>

<template>
  <div class="d-flex min-vh-100 bg-light">
    <!-- Sidebar -->
    <div class="bg-dark p-4" style="width: 250px;">
      <div class="d-flex flex-column">
        <!-- Logo -->
        <Link :href="route('dashboard')" class="d-flex justify-content-center mb-4">
          <img :src=logo class="h-8 text-white" />
        </Link>

        <!-- Navigation Links -->
        <div class="d-flex flex-column">
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="text-white py-2"
          >
            Dashboard
          </Link>
          <Link
            :href="route('admin.proyectos.index')"
            :active="route().current('admin.proyectos.index')"
            class="text-white py-2"
          >
            Proyectos
          </Link>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
      <!-- Top Bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container-fluid">
          <button
            class="btn btn-light d-md-none"
            @click="showingNavigationDropdown = !showingNavigationDropdown"
          >
          </button>
          <div class="ms-auto">
            <Dropdown align="right" width="48">
              <template #trigger>
                <button
                  type="button"
                  class="btn btn-light dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  {{ $page.props.auth.user.name }}
                </button>
              </template>

              <template #content>
                <DropdownLink :href="route('profile.edit')">Profile</DropdownLink>
                <DropdownLink :href="route('logout')" method="post" as="button">
                  Log Out
                </DropdownLink>
              </template>
            </Dropdown>
          </div>
        </div>
      </nav>

      <!-- Page Heading -->
      <header class="bg-white shadow-sm" v-if="$slots.header">
        <div class="container py-6">
          <slot name="header" />
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <slot />
      </main>
    </div>
  </div>
</template>
