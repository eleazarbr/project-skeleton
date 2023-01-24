<script setup>
import { onMounted, onUnmounted } from "vue";

const props = defineProps({
  show: {
    type: Boolean,
    default: false,
  },
  closeable: {
    type: Boolean,
    default: true,
  },
});

const emit = defineEmits(["close"]);

const close = () => {
  if (props.closeable) {
    emit("close");
  }
};

const closeOnEscape = (e) => {
  if (e.key === "Escape" && props.show) {
    close();
  }
};

onMounted(() => document.addEventListener("keydown", closeOnEscape));

onUnmounted(() => {
  document.removeEventListener("keydown", closeOnEscape);
});
</script>

<template>
  <div v-show="show" class="modal" :class="{ 'is-active': show }">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">
          <slot name="title" />
        </p>
        <button class="delete" aria-label="close" @click="close"></button>
      </header>

      <section class="modal-card-body">
        <slot name="body" />
      </section>
      <footer class="modal-card-foot">
        <slot name="footer" />
      </footer>
    </div>
  </div>
</template>
