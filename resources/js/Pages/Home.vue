<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import Filter from './Components/Filter.vue'
import NewModal from './Components/NewModal.vue'
</script>

<template>
  <div class="m-11 max-w-full">
    <div class="mb-7">
      <h1 class="text-6xl font-normal leading-normal">
        Projects
      </h1>
    </div>
    <Filter />
    <div class="">
      <Link :href="route('add.projects')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">New</Link>
      <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </div>
  </div>
</template>