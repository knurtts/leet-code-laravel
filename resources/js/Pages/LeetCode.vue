<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";

let prodOfArrayList: string = "";

function submitProdOfAray(): void {
    const nums = prodOfArrayList.split(",");
    console.log(nums);
    axios
        .get(route("problems.prodofallnotslef", { nums }))
        .then((res: object) => {
            console.log(res);
        })
        .catch((err: object) => console.error(err));
}
</script>

<template>
    <Head title="LeetCode" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                LeetCode
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="pb-6 font-bold w-full">
                            LeetCode Question 238: Product of Array Except Self
                        </div>
                        <div class="flex">
                            <div class="text-center content-center">
                                Enter a list of comma-separated integers:
                            </div>
                            <input
                                class="ml-4"
                                v-model="prodOfArrayList"
                                placeholder="1,2,3,4"
                            />
                            <div
                                @click="submitProdOfAray"
                                class="text-center w-20 bg-black text-white rounded h-10 content-center mx-6"
                            >
                                Submit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
