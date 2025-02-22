import { UserConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { glob } from 'glob'
import path from 'path'

export default {
    root: path.resolve(__dirname, 'resources'),
    base: path.resolve(__dirname, 'resources'),
    publicDir: false,
    plugins: [
        tailwindcss(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources', 'ts'),
            '~': path.resolve(__dirname, 'resources', 'css'),
        },
    },
    server: {
        host: false,
    },
    build: {
        outDir: path.resolve(__dirname, 'resources', 'dist'),
        assetsDir: '',
        rollupOptions: {
            input: glob.sync(path.resolve(__dirname, 'resources', 'css', '**', '*.css')),
            output: {
                entryFileNames: '[name].js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].min.[ext]',
            }
        },
        manifest: false,
        emptyOutDir: true,
        modulePreload: false,
    },
} satisfies UserConfig
