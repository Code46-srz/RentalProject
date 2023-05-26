import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import vitePluginSass from 'vite-plugin-sass';

export default defineConfig({
    plugins: [
        vitePluginSass(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/rentalP.css',
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
    ],
});
