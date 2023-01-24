<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <Head title="Welcome" />

  <div class="section">
    <div class="container">
      <div v-if="canLogin">
        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="button is-ghost">Dashboard</Link>

        <template v-else>
          <div class="buttons">
            <Link :href="route('login')" class="button is-ghost">Log in</Link>
            <Link v-if="canRegister" :href="route('register')" class="button is-ghost">Register</Link>
          </div>
        </template>
      </div>
      <div class="is-size-6">Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})</div>
    </div>
  </div>
</template>
