<script setup>
defineProps(["type", "classes"]);
</script>

<template>
  <button :type="type" class="button" :class="classes">
    <b>
      <slot />
    </b>
  </button>
</template>
