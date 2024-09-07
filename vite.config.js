import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';



export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/homeProperty.js',
                'resources/css/rentalP.css',
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
    ],

});
