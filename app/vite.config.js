import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // ここから追加
    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'localhost',
        },
    },
    // ここまで追加
});
