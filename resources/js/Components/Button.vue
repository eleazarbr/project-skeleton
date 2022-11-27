<script setup>
defineProps(["type", "classes"]);
</script>

<template>
  <button :type="type" :class="classes">
    <slot />
  </button>
</template>
