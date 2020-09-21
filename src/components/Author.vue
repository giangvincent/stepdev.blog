<template>
  <div class="flex w-full items-center font-sans p-8 md:p-24">
    <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author" />
    <div class="flex-1">
      <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
      <p class="text-gray-600 text-xs md:text-base">
        Tailwind CSS version of Ghost's Casper theme by
        <a
          class="text-gray-800 hover:text-teal-500 no-underline border-b-2 border-teal-500"
          href="https://www.tailwindtoolbox.com"
        >TailwindToolbox.com</a>
      </p>
    </div>
    <div class="justify-end">
      <button
        class="bg-transparent border border-gray-500 hover:border-teal-500 text-xs text-gray-500 hover:text-teal-500 font-bold py-2 px-4 rounded-full"
      >Read More</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "author-info",
};
</script>