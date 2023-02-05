import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import eslint from "vite-plugin-eslint";

export default defineConfig({
  plugins: [
    eslint(),
    laravel({
      input: ["resources/js/app.js"],
      refresh: true,
      // valetTls: "my-app.test"
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
  server: {
    hmr: {
      host: "localhost",
      protocol: "ws",
    },
  },
});
