<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  appName: String,
  content: String,
});
</script>

<template>
  <Head title="Welcome" />

  <div class="hero is-link is-fullheight">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <Link class="navbar-item" :href="route('web.index')">
              {{ appName }}
            </Link>
            <span class="navbar-burger" data-target="navbarMenuHeroA">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroA" class="navbar-menu">
            <div v-if="canLogin" class="navbar-end">
              <template v-if="$page.props.auth.user">
                <Link :href="route('dashboard')" class="navbar-item">Dashboard</Link>
              </template>
              <template v-else>
                <Link :href="route('login')" class="navbar-item">Log in</Link>
                <Link v-if="canRegister" :href="route('register')" class="navbar-item">Register</Link>
              </template>
            </div>
          </div>
        </div>
      </nav>
    </div>
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
