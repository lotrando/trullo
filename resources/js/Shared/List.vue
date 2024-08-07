<template>
  <!-- List Component -->
  <section class="list">
    <header class="flex items-center justify-between">
      <h3 class="p-1 uppercase font-bold leading-none text-purple-700">
        {{ title }}
      </h3>
      <button
        @click="deleteList"
        type="button"
        class="ml-0.5 p-1 text-gray-500 hover:text-red-700"
      >
        <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
          <path
            d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"
          ></path>
        </svg>
      </button>
    </header>
    <CardCreateForm :listId="id" @new-card-coming="addNewCard($event)" />d
    <transition-group name="card" tag="ul">
      <Card
        v-for="card in cards"
        :text="card.text"
        :key="card.id"
        :id="card.id"
      />
    </transition-group>
  </section>
</template>

<script>
import { router } from "@inertiajs/vue3";
import Card from "./Card.vue";
import CardCreateForm from "./CardCreateForm.vue";
export default {
  components: {
    Card,
    CardCreateForm,
  },
  props: {
    id: Number,
    title: String,
    cards: Array,
  },
  setup(props) {
    const addNewCard = (data) => {
      if (!data) return;
      router.post("/card/store", {
        category_id: data.id,
        text: data.text,
      });
    };
    const deleteList = () => {
      router.delete("/category/delete/" + props.id);
      console.log(props.id);
    };
    return { addNewCard, deleteList };
  },
};
</script>

<style scoped>
.card-enter-active,
.card-leave-active {
  transition: all 0.25s;
}

.card-enter-from,
.card-leave-to {
  opacity: 0;
  transform: scale(0.75);
}
</style>