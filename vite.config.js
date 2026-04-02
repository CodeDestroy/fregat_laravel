import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
                'resources/css/style.css', 'resources/css/bootstrap.min.css',
                'resources/owl/owl.carousel.min.css', 'resources/owl/owl.theme.default.min.css',
                'resources/js/jquery.min.js', 'resources/js/bootstrap.bundle.js',
                'resources/js/script.js', 'resources/owl/owl.carousel.min.js',
                'resources/owl/owl.carousel.js', 'resources/js/index.js'],

            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
