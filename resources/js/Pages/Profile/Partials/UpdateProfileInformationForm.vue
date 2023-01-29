<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/inertia-vue3";
import Notification from "@/Components/Notification.vue";

const props = defineProps({
  mustVerifyEmail: Boolean,
  status: String,
});

const { user } = usePage().props.value.auth;

const form = useForm({
  name: user.name,
  email: user.email,
});
</script>

<template>
  <section>
    <header class="content">
      <h2>Profile Information</h2>
      <p>Update your account's profile information and email address.</p>
    </header>

    <form @submit.prevent="form.patch(route('profile.update'))">
      <div class="field">
        <InputLabel for="name" value="Name" />
        <TextInput id="name" v-model="form.name" type="text" autofocus autocomplete="name" />
        <InputError :message="form.errors.name" />
      </div>

      <div class="field">
        <InputLabel for="email" value="Email" />
        <TextInput id="email" v-model="form.email" type="email" autocomplete="email" />
        <InputError :message="form.errors.email" />
      </div>

      <div v-if="props.mustVerifyEmail && user.email_verified_at === null">
        <p class="mt-2">
          Your email address is unverified.
          <Link :href="route('verification.send')" method="post" as="button" class="button is-ghost">
            Click here to re-send the verification email.
          </Link>
        </p>

        <Notification
          v-show="props.status === 'verification-link-sent'"
          class="is-success"
          message="A new verification link has been sent to your email address."
        ></Notification>
      </div>

      <div class="buttons is-centered">
        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
      </div>
    </form>
  </section>
</template>
