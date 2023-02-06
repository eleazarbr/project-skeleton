<script setup>
import TopNavbar from "@/Components/TopNavbar.vue";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
  laravelVersion: String,
  phpVersion: String,
  content: String,
});
</script>

<template>
  <Head title="Welcome" />

  <TopNavbar class="is-primary" />
  <div class="hero is-primary is-fullheight">
    <div class="hero-head"></div>
    <div class="hero-body">
      <div class="columns">
        <div class="column is-7-desktop">
          <!-- eslint-disable-next-line vue/no-v-html -->
          <div class="content" v-html="content"></div>
        </div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container has-text-centered">
        <p class="is-size-6">
          <b> Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})</b>
        </p>
      </div>
    </div>
  </div>
</template>
