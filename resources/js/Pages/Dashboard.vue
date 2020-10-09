<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard<i class="fas fa-hourglass-start"></i>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-wrap bg-gray-500 bg-opacity-25 rounded justify-center "> 
                        <song v-for="song in songs" :key="song.id" :song="song"/>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout'
    import Song from './../Components/Songs/SongComponent'

    export default {
        props: ['songs'],
        components: {
            AppLayout,
            Song,
        },
    }
</script>
