<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <GuestLayout>
    <Head title="Log in" />

    <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      <div class="field">
        <InputLabel for="email" value="Email" />
        <TextInput id="email" v-model="form.email" type="email" required autofocus autocomplete="username" />
        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <div class="field">
        <InputLabel for="password" value="Password" />
        <TextInput id="password" v-model="form.password" type="password" required autocomplete="current-password" />
        <InputError class="mt-2" :message="form.errors.password" />
      </div>

      <div class="field">
        <label class="checkbox">
          <Checkbox v-model:checked="form.remember" name="remember" />
          Remember me
        </label>
      </div>

      <div class="buttons is-right mt-4">
        <Link v-if="canResetPassword" :href="route('password.request')" class="button is-text"> Forgot your password? </Link>
        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Log in </PrimaryButton>
      </div>
    </form>
  </GuestLayout>
</template>
