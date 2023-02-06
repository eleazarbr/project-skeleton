<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";
import NavbarDropdown from "@/Components/NavbarDropdown.vue";
import NavbarLink from "@/Components/NavbarLink.vue";

const logoUrl = "";
const showAppName = true;
const isActive = ref(false);

function toggleMenu() {
  isActive.value = !isActive.value;
}
</script>

<template>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-brand">
        <Link class="navbar-item" :href="route('web.index')">
          <img v-if="logoUrl" :src="logoUrl" width="112" height="28" />
          <span v-show="showAppName">
            {{ $page.props.appName }}
          </span>
        </Link>
        <span class="navbar-burger" data-target="navbar" @click="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navbar" class="navbar-menu" :class="{ 'is-active': isActive }">
        <div class="navbar-start">
          <template v-if="$page.props.auth.user">
            <NavbarLink :href="route('dashboard')" :active="route().current('dashboard')"> Dashboard </NavbarLink>
          </template>
        </div>
        <div class="navbar-end">
          <template v-if="$page.props.auth.user">
            <NavbarDropdown />
          </template>
          <template v-else>
            <NavbarLink :href="route('login')" :active="route().current('login')"> Log In </NavbarLink>
            <NavbarLink :href="route('register')" :active="route().current('register')"> Register </NavbarLink>
          </template>
        </div>
      </div>
    </div>
  </nav>
</template>
