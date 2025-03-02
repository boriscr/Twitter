import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                 'resources/js/app.js',
                 'resources/scss/config/reset.scss',
                 'resources/scss/main.scss',
                'resources/js/active.js',],
            refresh: true,
        }),
    ],
});
