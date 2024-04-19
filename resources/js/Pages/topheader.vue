<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    head:{
        type:String
    },
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    pessoas:{
        type:Boolean,
    }
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head :title="head" />
    <header class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <Link
                    :href="route('index')"
                    class="mr-5 text-gray-100 hover:text-gray-400"
                >
                    Inicio
                </Link>

                <Link :href="route('achados')"
                      class="mr-5 text-gray-100 hover:text-gray-400"
                >
                    Achados
                </Link>

                <Link :href="route('perdidos')"
                      class="mr-5 text-gray-100 hover:text-gray-400"
                >
                    Perdidos
                </Link>

                <Link :href="route('sobre')"
                      class="mr-5 text-gray-100 hover:text-gray-400"
                >
                    Sobre
                </Link>

            </nav>
            <button class="inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-blue-500 rounded text-base mt-4 md:mt-0">
                <Link
                    :href="route('login')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </Link>
            </button>
            <button class="inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-blue-500 rounded text-base mt-4 md:mt-0">
                <Link
                    :href="route('register')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Register
                </Link>
            </button>
        </div>
    </header>

</template>

<style scoped>

</style>
