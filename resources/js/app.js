import 'bootstrap/dist/css/bootstrap.min.css'; // Estilos de Bootstrap
import 'bootstrap/dist/js/bootstrap.bundle.min.js'; // JavaScript de Bootstrap
import 'bootstrap-icons/font/bootstrap-icons.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import GuestLayout from './Layouts/GuestLayout.vue'; // Importa el layout de invitado
import AuthenticatedLayout from './Layouts/AuthenticatedLayout.vue'; // Importa el layout autenticado

import './sass/app.scss'; // Importa tu archivo Sass aquí

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        );

        // Asigna layouts dinámicamente según la carpeta
        page.then((module) => {
            if (!module.default.layout) {
                if (name.startsWith('Admin/')) {
                    // Usa AuthenticatedLayout para todas las páginas en Pages/Admin
                    module.default.layout = AuthenticatedLayout;
                } else {
                    // Usa GuestLayout por defecto para las demás páginas
                    module.default.layout = GuestLayout;
                }
            }
        });

        return page;
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
