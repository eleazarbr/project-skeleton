<script setup>
import { onMounted, ref } from "vue";

defineProps({
  modelValue: {
    type: String,
    default: () => "",
  },
  errors: {
    type: String,
    default: () => "",
  },
});

defineEmits(["update:modelValue"]);

const input = ref(null);

onMounted(() => {
  if (input.value.hasAttribute("autofocus")) {
    input.value.focus();
  }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
  <input
    ref="input"
    class="input"
    :class="{ 'is-danger': errors }"
    :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value)"
  />
</template>
