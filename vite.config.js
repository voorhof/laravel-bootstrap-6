import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { google } from 'laravel-vite-plugin/fonts';
import { FontaineTransform } from 'fontaine';
import postcssPrefixCustomProperties from 'postcss-prefix-custom-properties';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                google('Geist', {
                    weights: [100, 200, 300, 400, 500, 600, 700, 800, 900],
                    optimizedFallbacks: FontaineTransform,
                }),
                google('Geist Mono', {
                    weights: [100, 200, 300, 400, 500, 600, 700, 800, 900],
                    optimizedFallbacks: FontaineTransform,
                }),
            ],
        }),
        FontaineTransform.vite({
            // You can specify fallbacks as an array (applies to all fonts)
            fallbacks: ['BlinkMacSystemFont', 'Segoe UI', 'Helvetica Neue', 'Arial', 'Noto Sans'],

            // Or as an object to configure specific fallbacks per font family
            // fallbacks: {
            //   Geist: ['Helvetica Neue'],
            //   'Geist Mono': ['Courier New']
            // },
        })
    ],
    css: {
        postcss: {
            plugins: [
                // Bootstrap 6 source uses unprefixed custom properties; add the `bs-` prefix like Bootstrap's own build
                postcssPrefixCustomProperties({
                    prefix: 'bs-',
                    ignore: [/^--bs-/, /^--bd-/],
                }),
            ],
        },
    },
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
