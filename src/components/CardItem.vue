<template>
  <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
    <a class="flex flex-wrap no-underline hover:no-underline">
      <div
        class="p-2 m-4 w-16 h-16 text-center bg-gray-900 rounded-full text-white absolute flex items-center flex-col"
      >
        <span class="text-base tracking-wide font-bold border-b border-white font-sans">12</span>
        <span class="text-xs tracking-wide font-bold uppercase block font-sans">April</span>
      </div>
      <img src="https://source.unsplash.com/collection/225/800x600" class="w-full rounded-t pb-6" />
      <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
      <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
      <p
        class="text-gray-800 font-serif text-base px-6 mb-5"
      >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</p>
    </a>
  </div>
</template>

<script>
export default {
  name: "card-item",
};
</script>