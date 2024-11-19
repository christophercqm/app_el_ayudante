<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-vh-100 bg-light">
            <nav class="border-bottom bg-white">
                <!-- Primary Navigation Menu -->
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <div class="d-flex">
                            <!-- Logo -->
                            <div class="d-flex align-items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo class="h-8" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="d-none d-sm-flex ms-3">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <div class="d-none d-sm-flex align-items-center">
                            <!-- Settings Dropdown -->
                            <div class="ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="d-inline-flex rounded-md">
                                            <button type="button"
                                                class="btn btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ $page.props.auth.user.name }}
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')">
                                            Profile
                                        </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="d-none d-sm-block">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="btn btn-light">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
                                        'd-none': showingNavigationDropdown,
                                        'd-flex': !showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
                                        'd-none': !showingNavigationDropdown,
                                        'd-flex': showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{
                    'd-block': showingNavigationDropdown,
                    'd-none': !showingNavigationDropdown,
                }" class="d-sm-none">
                    <div class="pb-3 pt-2">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="border-top pb-1 pt-4">
                        <div class="px-4">
                            <div class="text-base font-medium text-dark">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-muted">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3">
                            <ResponsiveNavLink :href="route('profile.edit')">
                                Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
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
