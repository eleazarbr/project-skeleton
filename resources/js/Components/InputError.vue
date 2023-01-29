<script setup>
defineProps(["message"]);
</script>

<template>
  <p v-show="message" class="help is-danger">
    {{ message }}
  </p>
</template>
