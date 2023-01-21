<script setup lang="ts">
import { Link, useForm } from '@inertiajs/vue3';
import { ref, onMounted, defineProps } from 'vue';

import moment from 'moment';
import DataTable from 'datatables.net-vue3';
import DataTablesLib from 'datatables.net';
import 'datatables.net-select';
import 'datatables.net-buttons';

DataTable.use(DataTablesLib);

const props = defineProps({
    projects: {
        type: Array<any>,
        default: []
    }
});

let dt;
const form = useForm({});
const project_ids = ref([]);
const data: any = ref([]);
const table = ref();
const columns = [
  {
    data: 'action',
    title: 'Action',
  },
  {
    data: 'project_name',
    title: 'Project Name',
  },
  {
    data: 'client_name',
    title: 'Client',
  },
  {
    data: 'project_start',
    title: 'Project Start',
  },
  {
    data: 'project_end',
    title: 'Project End',
  },
  {
    data: 'project_status',
    title: 'Status',
  }
];
const options = {
  select: true,
  responsive: true,
  dom: 'Bfrtip',
  buttons: {
    name: 'primary',
    buttons: [ 'copy', 'csv', 'excel' ]
  }
};

onMounted(function () {
  dt = table.value.dt();
  for (const project in props.projects) {
    data.value.push({
      project_id: props.projects[project].project_id,
      action: `<a href="/edit/${props.projects[project].project_id}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>`,
      project_name: props.projects[project].project_name,
      client_name: props.projects[project].client.client_name,
      project_start: moment(props.projects[project].project_start).format('DD MMM YYYY'),
      project_end: moment(props.projects[project].project_end).format('DD MMM YYYY'),
      project_status: props.projects[project].project_status,
    });
  }
});

function deleteProject() {
  console.log(project_ids.value);
  dt.rows({ selected: true }).every(function () {
    let idx = data.value.indexOf(this.data());
    console.log(this.data().project_id);
    form.delete(route("delete.projects", this.data().project_id));
    data.value.splice(idx, 1);
  });
}

</script>

<template>
  <div class="m-11 max-w-full">
    <div class="mb-7">
      <h1 class="text-6xl font-normal leading-normal">
        Projects
      </h1>
      <a :href="route('logout')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" :action="route('logout')" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
    <div class="">
      <Link :href="route('add.projects')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">New</Link>
      <button type="button" @click="deleteProject" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </div>
    <div>
      <span>Click the row/s that you want to select</span>
      <DataTable
        class="display"
        :columns="columns"
        :data="data"
        :options="options"
        ref="table"
      />
    </div>
  </div>
</template>

<style>
@import 'datatables.net-dt';
</style>
