import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Put ALL CSS FILES HERE - CHRISTIAN 
                'resources/css/app.css',
                'resources/css/mobirise.css',
                'resources/css/parallax/jarallax.css',
                'resources/js/swiper/swiper-bundle.min.css',

                'resources/css/landingpage/About.css',
                'resources/css/landingpage/nicepage.css',

                // Put ALL SCSS FILES HERE - CHRISTIAN 
                'resources/sass/app.scss',                
                
                // Put ALL JS FILES HERE - CHRISTIAN   
                'resources/js/custom.js',
                'resources/js/bootstrap.js',
                'resources/js/app.js',
                'resources/js/smoothscroll/smooth-scroll.js',                
                'resources/js/swiper/swiper-bundle.min.js',
                'resources/js/typed/typed.js',
                'resources/js/typed/typed.min.js',
                'resources/css/parallax/jarallax.js',
                
                'resources/js/landingpage/jquery.js',
                'resources/js/landingpage/nicepage.js',

                // FOR THE .map files or other files, I DONT KNOW! I AM STILL LEARNING

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
