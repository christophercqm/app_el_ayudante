<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Registro" />

        <div class="container-form h-100 d-flex justify-content-center align-items-center">
            <form @submit.prevent="submit" class="form">
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input
                        id="name"
                        type="text"
                        class="form-control"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input
                        id="email"
                        type="email"
                        class="form-control"
                        v-model="form.email"
                        required
                        autocomplete="username"
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input
                        id="password"
                        type="password"
                        class="form-control"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        class="form-control"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <!-- Actions -->
                <div class="mb-3 d-flex justify-content-between">
                    <Link
                        :href="route('login')"
                        class="text-decoration-none text-primary"
                    >
                        ¿Ya estás registrado?
                    </Link>

                    <PrimaryButton
                        class="btn-green"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Registrarse
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>

<style scoped>
.container-form {
    height: calc(100vh - 120px) !important;
}

.form {
    width: 500px !important;
    max-width: 600px !important;
}
</style>
