<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps(["href", "active"]);

const classes = computed(() =>
  props.active
    ? "is-active"
    : "",
);
</script>

<template>
  <Link :href="href" class="navbar-item" :class="classes">
    <slot />
  </Link>
</template>
