<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Notification from "@/Components/Notification.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";

defineProps({
  status: String,
});

const form = useForm({
  email: "",
});

const submit = () => {
  form.post(route("password.email"));
};
</script>

<template>
  <GuestLayout>
    <Head title="Forgot Password" />

    <div class="columns is-centered">
      <div class="column is-6">
        <div class="mb-4">
          Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow
          you to choose a new one.
        </div>

        <Notification v-if="status" class="is-success" :message="status"></Notification>

        <form @submit.prevent="submit">
          <div class="field">
            <InputLabel for="email" value="Email" />
            <TextInput id="email" v-model="form.email" type="email" autofocus autocomplete="username" />
            <InputError :message="form.errors.email" />
          </div>

          <div class="mt-4 buttons is-right">
            <PrimaryButton :disabled="form.processing"> Email Password Reset Link </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
  </GuestLayout>
</template>
