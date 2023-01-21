<script lang="ts" setup>
import { ref, defineProps, onMounted } from 'vue';
import { useForm } from '@inertiajs/vue3';
import VueTailwindDatepicker from 'vue-tailwind-datepicker';

const props = defineProps({
    project_select: {
        type: <any>[],
        default: []
    },
    clients: {
        type: Array<any>,
        default: []
    }
})

const form = useForm({
    project_id: null,
    project_name: '',
    client_id: '',
    project_start: '',
    project_end: '',
    project_status: '',
});

const input_date = ref(<any>[]);
const formatter = ref({
    date: 'YYYY-MM-DD',
    month: 'MMM',
})

onMounted(function () {
    form.project_id = props.project_select[0].project_id;
    form.project_name = props.project_select[0].project_name;
    form.client_id = props.project_select[0].client_id;
    input_date.value = [props.project_select[0].project_start, props.project_select[0].project_end];
    form.project_status = props.project_select[0].project_status;
})

function saveData() {
    console.log("submitted");
    form.project_start = input_date.value[0];
    form.project_end = input_date.value[1];
    form.put(route("update.projects", form.project_id));
}

</script>

<template>
    <div class="px-10">
        <h3 class="text-xl font-semibold text-gray-900 mt-6">
            Edit Data
        </h3>
        <hr>
        <div class="p-6 space-y-6">
            <form @submit.prevent="saveData">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Project Name</label>
                    <input type="text" v-model="form.project_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Input Project Name" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Client Name</label>
                    <select v-model="form.client_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="">All Select</option>
                        <option v-for="client in props.clients" :value="client.client_id">{{ client.client_name }}</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Project Date (Start/End)</label>
                    <vue-tailwind-datepicker :formatter="formatter" v-model="input_date" />
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Project Status</label>
                    <select v-model="form.project_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="">All Select</option>
                        <option value="OPEN">OPEN</option>
                        <option value="DOING">DOING</option>
                        <option value="DONE">DONE</option>
                    </select>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Submit</button>
            </form>
        </div>
    </div>
</template>