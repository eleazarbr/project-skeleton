<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
// import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <div>
    <!-- Navbar -->
    <nav class="navbar container" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <Link :href="route('dashboard')">
          <ApplicationLogo />
        </Link>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <NavLink :href="route('dashboard')" :active="route().current('dashboard')"> Dashboard </NavLink>
        </div>

        <div class="navbar-end">
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link"> {{ $page.props.auth.user.name }} </a>

            <div class="navbar-dropdown">
              <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
              <hr class="navbar-divider" />
              <DropdownLink :href="route('logout')" method="post"> Log Out </DropdownLink>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="section">
      <div class="container">
        <!-- Page Heading -->
        <header v-if="$slots.header" class="has-background-white">
          <div class="content">
            <slot name="header" />
          </div>
        </header>

        <!-- Page Content -->
        <main>
          <slot />
        </main>
      </div>
    </div>
  </div>
</template>
