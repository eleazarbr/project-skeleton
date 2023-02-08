<script setup>
import { usePage } from "@inertiajs/inertia-vue3";

const locales = [
  {
    id: 1,
    carbon_locale_code: "es",
    description: {
      en: "Spanish",
      es: "Español",
    },
  },
  {
    id: 2,
    carbon_locale_code: "en",
    description: {
      en: "English",
      es: "Inglés",
    },
  },
];
const currentLocale = _.find(locales, ["carbon_locale_code", usePage().props.value.locale]);
</script>

<template>
  <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
      {{ currentLocale.description[$page.props.locale] }}
    </a>

    <div class="navbar-dropdown">
      <template v-for="locale in locales" :key="locale.id">
        <a
          v-show="locale.carbon_locale_code !== $page.props.locale"
          :href="route('locale.update', { locale: locale.carbon_locale_code })"
          class="navbar-item"
        >
          {{ locale.description[$page.props.locale] }}
        </a>
      </template>
    </div>
  </div>
</template>
