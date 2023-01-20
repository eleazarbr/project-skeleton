<script setup>
defineProps(["message"]);
</script>

<script>
export default {
  data() {
    return {
      isVisible: true,
    };
  },
  methods: {
    remove() {
      this.isVisible = false;
    },
  },
};
</script>

<template>
  <p v-show="isVisible" class="notification">
    <button class="delete" @click="remove"></button>
    {{ message }}
  </p>
</template>
