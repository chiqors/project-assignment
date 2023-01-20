<template>
    <div class="border-2 border-gray-300 mb-7 p-5 flex space-x-4 flex-row items-center">
        <span class="font-bold">Filter</span>
        <div class="flex flex-col">
            <span>Project Name</span>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>
        <div class="flex flex-col">
            <span>Client</span>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="">All Select</option>
                <option value="1">Client 1</option>
                <option value="2">Client 2</option>
                <option value="3">Client 3</option>
            </select>
        </div>
        <div class="flex flex-col">
            <span>Status</span>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="">All Select</option>
                <option value="OPEN">OPEN</option>
                <option value="DOING">DOING</option>
                <option value="DONE">DONE</option>
            </select>
        </div>
        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5">Search</button>
        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5">Clear</button>
    </div>
</template>