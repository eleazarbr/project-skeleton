<script setup>
defineProps({
  type: {
    type: String,
    default: "button",
  },
});
</script>

<template>
  <button :type="type" class="button is-dark">
    <b>
      <slot />
    </b>
  </button>
</template>
