<template>
  <div>
    <!--Header-->
    <div
      class="w-full m-0 p-0 bg-cover bg-bottom"
      style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;"
    >
      <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-white font-extrabold text-3xl md:text-5xl">👻 Ghostwind CSS</p>
        <p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
      </div>
    </div>
    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
      <div class="mx-0 sm:mx-6">
        <!--Nav-->
        <menu-navigation></menu-navigation>

        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
          <!--Lead Card-->
          <carousel
            :per-page="1"
            :navigationEnabled="true"
            paginationColor="#d0d0d0"
            :navigationNextLabel="navigationNextLabel"
            :navigationPrevLabel="navigationPrevLabel"
          >
            <slide>
              <card-item></card-item>
            </slide>
            <slide>
              <card-item></card-item>
            </slide>
            <slide>
              <card-item></card-item>
            </slide>
          </carousel>

          <!--/Lead Card-->

          <!--Posts Container-->
          <grid-list></grid-list>
          <!--/ Post Content-->
        </div>

        <!--Subscribe-->
        <subscribe></subscribe>
        <!-- /Subscribe-->

        <!--Author-->
        <author></author>
        <!--/Author-->
      </div>
    </div>

    <footer-part></footer-part>
  </div>
</template>

<script>
import MenuNavigation from "@/components/PostNav.vue";
import GridList from "@/components/GridList3.vue";
import Subscribe from "@/components/Subcribe.vue";
import Author from "@/components/Author.vue";
import FooterPart from "@/components/Footer.vue";
import CardItem from "@/components/CardItem.vue";
import { Carousel, Slide } from "vue-carousel";

export default {
  name: "home",
  components: {
    MenuNavigation,
    GridList,
    Subscribe,
    Author,
    FooterPart,
    CardItem,
    Carousel,
    Slide,
  },
  data() {
    return {
      navigationNextLabel: `<div class="w-24 h-24 -mt-20 -ml-16 sm:-ml-12"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
</svg></div>`,
      navigationPrevLabel: `<div class="w-24 h-24 -mt-20 -mr-16 sm:-mr-12"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
</svg></div>`,
    };
  },
  mounted() {},
  methods: {},
};
</script>

<style lang="scss">
.swiper-container {
  width: 600px;
  height: 300px;
}
</style>