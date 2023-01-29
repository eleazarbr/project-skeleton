<script setup>
defineProps({
  type: {
    type: String,
    default: "submit",
  },
});
</script>

<template>
  <button :type="type" class="button is-primary">
    <b>
      <slot />
    </b>
  </button>
</template>
