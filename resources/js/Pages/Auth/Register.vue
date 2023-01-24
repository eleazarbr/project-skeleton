<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Button from "@/Components/Button.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
  terms: false,
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <GuestLayout>
    <Head title="Register" />

    <div class="columns is-centered">
      <div class="column is-5-desktop is-7-tablet">
        <form @submit.prevent="submit">
          <div class="field">
            <InputLabel for="name" value="Name" />
            <TextInput id="name" v-model="form.name" type="text" autofocus autocomplete="name" />
            <InputError :message="form.errors.name" />
          </div>

          <div class="field">
            <InputLabel for="email" value="Email" />
            <TextInput id="email" v-model="form.email" type="email" autocomplete="username" />
            <InputError :message="form.errors.email" />
          </div>

          <div class="field">
            <InputLabel for="password" value="Password" />
            <TextInput
              id="password"
              v-model="form.password"
              type="password"
              autocomplete="new-password"
            />
            <InputError :message="form.errors.password" />
          </div>

          <div class="field">
            <InputLabel for="password_confirmation" value="Confirm Password" />
            <TextInput
              id="password_confirmation"
              v-model="form.password_confirmation"
              type="password"
              autocomplete="new-password"
            />
            <InputError :message="form.errors.password_confirmation" />
          </div>

          <div class="buttons is-right">
            <Link
              :href="route('login')"
              class="button is-ghost"
            >
              Already registered?
            </Link>

            <Button class="button is-primary" :disabled="form.processing"> Register </Button>
          </div>
        </form>
      </div>
    </div>
  </GuestLayout>
</template>
