import 'bootstrap/dist/css/bootstrap.min.css'; // Estilos de Bootstrap
import 'bootstrap/dist/js/bootstrap.bundle.min.js'; // JavaScript de Bootstrap
import 'bootstrap-icons/font/bootstrap-icons.css'; 

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import GuestLayout from './Layouts/GuestLayout.vue';  // Importa el layout de invitado

import './sass/app.scss'; // Importa tu archivo Sass aquí

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        );

        // Asigna GuestLayout por defecto a todas las páginas
        page.then((module) => {
            module.default.layout = GuestLayout;
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
