<script setup>
import Button from "@/Components/Button.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { nextTick, ref } from "vue";

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
  password: "",
});

const confirmUserDeletion = () => {
  confirmingUserDeletion.value = true;
  nextTick(() => passwordInput.value.focus());
};

const closeModal = () => {
  confirmingUserDeletion.value = false;
  form.reset();
};

const deleteUser = () => {
  form.delete(route("profile.destroy"), {
    preserveScroll: true,
    onSuccess: () => closeModal(),
    onError: () => passwordInput.value.focus(),
    onFinish: () => form.reset(),
  });
};
</script>

<template>
  <section>
    <header class="content">
      <h2>Delete Account</h2>
      <p>
        Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please
        download any data or information that you wish to retain.
      </p>
    </header>

    <Button class="is-danger" @click="confirmUserDeletion">Delete Account</Button>

    <Modal :show="confirmingUserDeletion" @close="closeModal">
      <template #title> Delete your account </template>
      <template #body>
        <div class="content">
          <h2>Are you sure your want to delete your account?</h2>
          <p>
            Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm
            you would like to permanently delete your account.
          </p>
        </div>
        <div class="field">
          <InputLabel for="password" value="Password" class="sr-only" />
          <TextInput
            id="password"
            ref="passwordInput"
            v-model="form.password"
            type="password"
            placeholder="Password"
            @keyup.enter="deleteUser"
          />
          <InputError :message="form.errors.password" />
        </div>
      </template>
      <template #footer>
        <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>
        <Button classes="is-danger" :disabled="form.processing" @click="deleteUser"> Delete Account </Button>
      </template>
    </Modal>
  </section>
</template>
