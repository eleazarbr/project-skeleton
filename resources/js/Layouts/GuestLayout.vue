<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import TopNavbar from "@/Components/TopNavbar.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <TopNavbar class="is-primary"/>
  <div class="section">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-narrow">
          <div class="is-flex is-justify-content-center">
            <Link :href="route('web.index')">
              <ApplicationLogo />
            </Link>
          </div>
        </div>
      </div>

      <div class="mt-6">
        <slot />
      </div>
    </div>
  </div>
</template>
