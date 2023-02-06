<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link"> {{ $page.props.auth.user.name }} </a>

    <div class="navbar-dropdown">
      <Link :href="route('profile.edit')" class="navbar-item"> Profile </Link>
      <hr class="navbar-divider" />
      <Link :href="route('logout')" method="post" class="navbar-item"> Log Out </Link>
    </div>
  </div>
</template>
