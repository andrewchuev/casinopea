import {defineConfig} from 'vite';
import path from 'path';
import fullReload from 'vite-plugin-full-reload';


export default defineConfig({
    base: '/',
    root: path.resolve(__dirname),
    build: {
        outDir: path.resolve(__dirname, 'dist'),
        emptyOutDir: true,
        manifest: true,
        cssMinify: false,
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, 'resources/js/main.js'),
                style: path.resolve(__dirname, 'resources/css/main.css'),
            },
            output: {
                entryFileNames: 'assets/[name].[hash].js',
                chunkFileNames: 'assets/[name].[hash].js',
                assetFileNames: 'assets/[name].[hash][extname]',
            },

        },
    },
    server: {
        host: '0.0.0.0',
        port: 3000,
        strictPort: true,
        cors: true,
    },
    plugins: [
        fullReload(['**/*.php'], {root: __dirname}),
    ],
});
