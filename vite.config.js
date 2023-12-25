import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    server: {
        host: "filament.test",
        port: 3000,
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [
                ...refreshPaths,
                "app/Http/Livewire/**",
                "app/Forms/Components/**",
            ],
        }),
    ],
});
