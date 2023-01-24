<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
  password: "",
});

const submit = () => {
  form.post(route("password.confirm"), {
    onFinish: () => form.reset(),
  });
};
</script>

<template>
  <GuestLayout>
    <Head title="Confirm Password" />

    <div class="columns is-centered">
      <div class="column is-5">
        <div class="box">
          <div class="mb-4">This is a secure area of the application. Please confirm your password before continuing.</div>

          <form @submit.prevent="submit">
            <div class="field">
              <InputLabel for="password" value="Password" />
              <TextInput id="password" v-model="form.password" type="password" autocomplete="current-password" autofocus />
              <InputError :message="form.errors.password" />
            </div>

            <div class="buttons is-right">
              <PrimaryButton :disabled="form.processing"> Confirm </PrimaryButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>
