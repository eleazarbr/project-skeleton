<script setup>
import { computed } from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import Notification from "@/Components/Notification.vue";

const props = defineProps({
  status: String,
});

const form = useForm();

const submit = () => {
  form.post(route("verification.send"));
};

const verificationLinkSent = computed(() => props.status === "verification-link-sent");
</script>

<template>
  <GuestLayout>
    <Head title="Email Verification" />

    <div class="columns is-centered">
      <div class="column is-6">
        <div class="box">
          <div class="mb-4">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to
            you? If you didn't receive the email, we will gladly send you another.
          </div>

          <Notification
            v-if="verificationLinkSent"
            class="is-success"
            message="A new verification link has been sent to the email address you provided during registration."
          ></Notification>

          <form @submit.prevent="submit">
            <div class="buttons is-centered">
              <PrimaryButton :disabled="form.processing"> Resend Verification Email </PrimaryButton>

              <Link :href="route('logout')" method="post" as="button" class="button is-danger">Log Out</Link>
            </div>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>
