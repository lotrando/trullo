<template>
  <footer>
    <button
      type="button"
      v-if="linkVisible"
      class="p-1 text-gray-500 hover:text-gray-700"
      @click="showForm"
    >
      Nový úkol ...
    </button>

    <form v-if="formVisible" @submit.prevent="submitForm">
      <textarea
        v-model="text"
        class="mt-2 w-full p-3 border-t border-l border-gray-300 outline-none rounded shadow-inner"
        rows="3"
        autofocus="true"
      ></textarea>

      <div class="flex justify-between mt-1.5 items-center">
        <button type="button" @click="hideForm" class="btn bg-gray-500">
          Zavřít
        </button>
        <button type="submit" class="btn btn-green">Uložit</button>
      </div>
    </form>
  </footer>
</template>

<script>
import { reactive, toRefs } from "vue";
export default {
  props: {
    listId: Number,
  },
  setup(props, { emit }) {
    const state = reactive({
      text: "",
      linkVisible: true,
      formVisible: false,
    });
    const showForm = () => {
      (state.linkVisible = false), (state.formVisible = true);
    };
    const hideForm = () => {
      (state.linkVisible = true), (state.formVisible = false);
    };

    const submitForm = () => {
      emit("new-card-coming", { id: props.listId, text: state.text });
      state.test = "";
    };

    return {
      ...toRefs(state),
      showForm,
      hideForm,
      submitForm,
    };
  },
};
</script>

<style scoped>
textarea {
  resize: none;
}
</style>