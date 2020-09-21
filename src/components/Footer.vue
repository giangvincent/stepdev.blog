<template>
  <footer class="bg-gray-900">
    <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">
      <div class="w-full mx-auto flex flex-wrap items-center">
        <div class="flex w-full justify-center text-white font-extrabold">
          <router-link
            to="/"
            class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline"
            href="#"
          >
            👻
            <span class="text-base text-gray-200">Ghostwind CSS</span>
          </router-link>
        </div>
        <div class="flex w-full pt-2 content-center justify-between">
          <ul class="list-reset flex justify-center flex-1 items-center">
            <li>
              <a class="inline-block py-2 px-3 text-white no-underline" href="#">Active</a>
            </li>
            <li>
              <a
                class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                href="#"
              >link</a>
            </li>
            <li>
              <a
                class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                href="#"
              >link</a>
            </li>
            <li>
              <a
                class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                href="#"
              >link</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "footer-part",
};
</script>