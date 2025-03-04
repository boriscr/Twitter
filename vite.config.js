import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                 'resources/js/app.js',
                 'resources/scss/config/reset.scss',
                 'resources/scss/main.scss',
                'resources/js/active.js',
                'resources/scss/layout/form.scss',
                'resources/scss/perfil/perfil.scss',
                'resources/js/buttons.js',
            ],
            refresh: true,
        }),
    ],
});
