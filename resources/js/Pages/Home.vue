<template>
  <transition-group
    name="list"
    tag="div"
    class="sm:flex items-start w-screen px-4 py-10 overflow-x-auto"
  >
    <List
      v-for="list in categories"
      :title="list.title"
      :id="list.id"
      :cards="list.cards"
      :key="list.id"
    />
    <ListCreateForm @new-list-coming="addNewList($event)" />
  </transition-group>
</template>

<script>
import { ref } from "vue";
import { data } from "../../js/data.js";
import { router } from "@inertiajs/vue3";
import List from "../Shared/List.vue";
import ListCreateForm from "../Shared/ListCreateForm.vue";
export default {
  props: {
    categories: Array,
  },
  components: {
    List,
    ListCreateForm,
  },

  setup() {
    const lists = ref(data);
    const addNewList = (title) => {
      if (!title) return;
      router.post("/category/store", { title: title });
    };
    return { lists, addNewList };
  },
};
</script>

<style scoped>
.list-enter-active,
.list-leave-active {
  transition: all 0.25s;
}

.list-enter-from,
.list-leave-to {
  opacity: 0;
  transform: scale(0.75);
}
</style>