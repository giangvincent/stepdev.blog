<template>
  <div class="flex flex-wrap justify-between pt-12 -mx-6">
    <!--1/3 col -->
    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
      <card-item></card-item>
    </div>

    <!--1/3 col -->
    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
      <card-item></card-item>
    </div>

    <!--1/3 col -->
    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
      <card-item></card-item>
    </div>
  </div>
</template>

<script>
import CardItem from "@/components/CardItem.vue";

export default {
  name: "paginate-3post",
  components: {
    CardItem,
  },
};
</script>