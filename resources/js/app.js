import "./bootstrap";
import "../sass/app.scss";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import Oruga from "@oruga-ui/oruga-next";
import "@oruga-ui/oruga-next/dist/oruga.css";
// eslint-disable-next-line import/no-extraneous-dependencies
import { i18nVue } from "laravel-vue-i18n";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";

const appName = window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/**/*.vue")),
  setup({ el, app, props, plugin }) {
    return createApp({ render: () => h(app, props) })
      .use(plugin)
      .use(i18nVue, { resolve: (lang) => import(`../../lang/php_${lang}.json`) })
      .use(Oruga)
      .use(ZiggyVue, Ziggy)
      .mount(el);
  },
});

InertiaProgress.init({ color: "#4B5563" });
