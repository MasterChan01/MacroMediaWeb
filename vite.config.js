import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                // Add more individual files here
                'resources/js/smoothscroll/smooth-scroll.js',
                'resources/js/swiper/swiper-bundle.min.css',
                'resources/js/swiper/swiper-bundle.min.js',
                //'resources/js/swiper/swiper-bundle.min.js.map',
                'resources/js/typed/typed.js',
                'resources/js/typed/typed.min.js',
                //'resources/js/typed/typed.min.js.map',
                'resources/js/custom.js',
                'resources/js/bootstrap.js',
                'resources/css/app.css',
                'resources/css/mobirise.css',
                'resources/css/parallax/jarallax.css',
                'resources/css/parallax/jarallax.js'
            ],
            exclude: ['resources/typed.min.js.map'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
