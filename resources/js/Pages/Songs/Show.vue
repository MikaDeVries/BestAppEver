<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Song :{{song.name}}</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!-- song buttons -->
                    <div class="flex"> 
                        <div class="flex w-1/5">
                            <inertia-link :href="'/songs/'" >
                                <div class="text-gray-700 text-center bg-blue-400 hover:bg-blue-500 px-4 py-2 m-2">Back</div>
                            </inertia-link>
                        </div>
                        <div class="flex w-3/5 flex-wrap justify-center">
                            <inertia-link :href="'/songs/'+song.id+'/edit'" >
                                <div class="text-gray-700 text-center bg-blue-400 hover:bg-blue-500 px-4 py-2 m-2">Edit</div>
                            </inertia-link>
                            <inertia-link :href="'/songs/delete'" >
                                <div class="text-gray-700 text-center bg-red-500 hover:bg-red-600 px-4 py-2 m-2">Delete</div>
                            </inertia-link>
                        </div>
                        <div class="flex w-1/5">

                        </div>
                    </div>
<!-- song information -->
                   <div class="flex justify-center  bg-gray-500 bg-opacity-25 rounded  p-5 "> 
                       <div class="flex flex-wrap-reverse bg-gray-200">
                            <div class="w-2/5 p-2">
                                <img class="w-full object-cover h-48 overflow-hidden" :src="song.thumbnail" alt="Song image">
                            </div>
                            <div class="w-3/5 p-2">
                                <div class="text-gray-700 text-center bg-black-400 p-2">
                                    <div class="text-xl">
                                        <h1>{{song.name}}</h1>
                                    </div>
                                    <div class="flex flex-center p-5 ">
                                        <audio controls class="flex-1">
                                            <source :scr="song.mp3_link" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div>
                                    <div class="text-left">
                                        Author:
                                    </div>
                                    <div class="text-left">
                                        Publised:
                                    </div>
                                    <div class="text-left">
                                        Albums:
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                   </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'
    import Song from './../../Components/Songs/SongComponent'

    export default {
        props: ['song'],
        components: {
            AppLayout,
            Song,
        },
    }
</script>
