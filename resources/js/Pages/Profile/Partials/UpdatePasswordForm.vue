<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
  current_password: "",
  password: "",
  password_confirmation: "",
});

const updatePassword = () => {
  form.put(route("password.update"), {
    preserveScroll: true,
    onSuccess: () => form.reset(),
    onError: () => {
      if (form.errors.password) {
        form.reset("password", "password_confirmation");
        passwordInput.value.focus();
      }
      if (form.errors.current_password) {
        form.reset("current_password");
        currentPasswordInput.value.focus();
      }
    },
  });
};
</script>

<template>
  <section>
    <header class="content">
      <h2>Update Password</h2>
      <p>Ensure your account is using a long, random password to stay secure.</p>
    </header>

    <form @submit.prevent="updatePassword">
      <div class="field">
        <InputLabel for="current_password" value="Current Password" />
        <TextInput
          id="current_password"
          ref="currentPasswordInput"
          v-model="form.current_password"
          type="password"
          autocomplete="current-password"
        />
        <InputError :message="form.errors.current_password" />
      </div>

      <div class="field">
        <InputLabel for="password" value="New Password" />
        <TextInput id="password" ref="passwordInput" v-model="form.password" type="password" autocomplete="new-password" />
        <InputError :message="form.errors.password" />
      </div>

      <div class="field">
        <InputLabel for="password_confirmation" value="Confirm Password" />
        <TextInput id="password_confirmation" v-model="form.password_confirmation" type="password" autocomplete="new-password" />
        <InputError :message="form.errors.password_confirmation" />
      </div>

      <div class="buttons is-centered">
        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
      </div>
    </form>
  </section>
</template>
