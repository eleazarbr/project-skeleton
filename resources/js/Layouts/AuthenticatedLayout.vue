<script setup>
import TopNavbar from "@/Components/TopNavbar.vue";
</script>

<template>
  <!-- Navbar -->
  <TopNavbar class="is-primary" />

  <!-- Main section -->
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
</template>
