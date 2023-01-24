<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="title">Dashboard</h2>
    </template>

    <div class="section">
      <div class="container">
        <div class="box">
          <p>You're logged in!</p>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
