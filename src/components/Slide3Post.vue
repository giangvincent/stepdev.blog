<template>
  <div class="bg-gray-200">
    <div class="container w-full max-w-6xl mx-auto px-2 py-8">
      <div class="flex flex-wrap -mx-2">
        <div class="w-full md:w-1/3 px-2 pb-12">
          <card-item></card-item>
        </div>
        <div class="w-full md:w-1/3 px-2 pb-12">
          <card-item></card-item>
        </div>
        <div class="w-full md:w-1/3 px-2 pb-12">
          <card-item></card-item>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CardItem from "@/components/CardItem.vue";
export default {
  name: "slide-3post",
  components: {
    CardItem,
  },
};
</script>