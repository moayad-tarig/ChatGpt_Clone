<script setup>
import { computed } from 'vue';
    const props = defineProps({
        content: Object
    })

    const user = computed(() => props.content?.role === 'user')
</script>
<template>
    <div class="w-full flex text-white py-6" 
        :class="user ? 'bg-slate-800 font-bold' : 'bg-slate-700'">
        <span class="w-1/6 flex justify-end pr-4">
            <svg 
                v-if="content.role == 'user'"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-10 h-10 text-indigo-400">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>



            <svg
                v-else 
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-amber-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
            </svg>

        </span>
        <section class="w-4/6 text-left pl-4">{{ content?.content }}</section>
    </div>
</template>