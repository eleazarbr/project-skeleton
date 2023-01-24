<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
import DeleteUserForm from "./Partials/DeleteUserForm.vue";
import UpdatePasswordForm from "./Partials/UpdatePasswordForm.vue";
import UpdateProfileInformationForm from "./Partials/UpdateProfileInformationForm.vue";

defineProps({
  mustVerifyEmail: Boolean,
  status: Boolean,
});
</script>

<script>
export default {
  data() {
    return {
      activeTab: 0,
      multiline: false,
    };
  },
};
</script>

<template>
  <Head title="Profile" />

  <AuthenticatedLayout>
    <template #header>
      <h2>Profile</h2>
    </template>

    <o-tabs v-model="activeTab" :multiline="multiline">
      <o-tab-item :value="0" label="Profile">
        <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status" />
      </o-tab-item>

      <o-tab-item :value="1" label="Password">
        <UpdatePasswordForm />
      </o-tab-item>

      <o-tab-item :value="2" :visible="showBooks" label="Delete">
        <DeleteUserForm />
      </o-tab-item>
    </o-tabs>
  </AuthenticatedLayout>
</template>
