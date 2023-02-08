import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import eslint from "vite-plugin-eslint";
// eslint-disable-next-line import/no-extraneous-dependencies
import i18n from "laravel-vue-i18n/vite";

export default defineConfig({
  plugins: [
    eslint(),
    i18n(),
    laravel({
      input: ["resources/js/app.js"],
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
  server: {
    hmr: {
      host: "localhost",
      protocol: "ws",
    },
  },
});
