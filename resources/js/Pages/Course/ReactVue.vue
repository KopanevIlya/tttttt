<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { useForm, Head } from '@inertiajs/vue3';
import Course from "@/Components/Reactcourse.vue";
defineProps(['reactcourse']);

</script>

<template>
    <Head title="Курсы" />

    <AuthenticatedLayout>


            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">блок2</div>
                        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                            <Course
                                v-for="reactcourse in reactcourse"
                                :key="reactcourse.id"
                                :reactcourse="reactcourse"
                            />
                        </div>

                    </div>
                </div>
            </div>


    </AuthenticatedLayout>
</template>
