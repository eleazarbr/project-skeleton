<script setup>
defineProps({
  value: { type: String, default: () => "" },
});
</script>

<template>
  <label class="label">
    <span>{{ value }}</span>
  </label>
</template>
