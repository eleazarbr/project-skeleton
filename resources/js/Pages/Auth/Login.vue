<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Notification from "@/Components/Notification.vue";
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
    <div class="columns is-centered">
      <div class="column is-5-desktop is-7-tablet">
        <Head title="Log in" />

        <Notification v-if="status" class="is-success" :message="status"></Notification>

        <form class="box" @submit.prevent="submit">
          <div class="field">
            <InputLabel for="email" value="Email" />
            <TextInput id="email" v-model="form.email" :errors="form.errors.email" type="email" autofocus autocomplete="username" />
            <InputError :message="form.errors.email" />
          </div>

          <div class="field">
            <InputLabel for="password" value="Password" />
            <TextInput id="password" v-model="form.password" :errors="form.errors.email" type="password" autocomplete="current-password" />
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
      </div>
    </div>
  </GuestLayout>
</template>
