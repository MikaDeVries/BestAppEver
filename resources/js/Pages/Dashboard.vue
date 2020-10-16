<template>
    <app-layout>
        <template #header>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h1>
        </template>
    <!-- songs -->

        <!-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-wrap bg-gray-500 bg-opacity-25 rounded justify-center "> 
                        <song v-for="song in songs" :key="song.id" :song="song"/>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="flex p-20 flex-col items-center bg-gradient-to-r from-teal-400 to-blue-500 bg-opacity-50 shadow-inner">
        <div class="w-1/5"></div>
        <div class="w-3/5  ">
            <h1 class="text-center pt-4 text-white text-5xl">Songify</h1>
        </div>
        <div class="w-1/5">
            <div class="text-center text-white text-xl">Welkom terug {{ $page.user.name }}</div>
        </div>
    </div>

    <!-- body  -->
    <div id="body" class="p-20 bg-gray-300">
        <!-- songify information -->

        <div class="flex space-x-4">
            <div class="w-3/5 p-10 bg-white rounded border-solid border-1 border-black shadow-xl text-center ">
                <h2>Songify the playlist</h2>
                <div >"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui 
                    ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                     quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
                     reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                      pariatur?"
                </div>
            </div>
            <div class="w-2/5 bg-white rounded border-solid border-1 border-black shadow-xl bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60)">
            </div>
        </div>

        <!-- icons -->
        <div class="mt-10 flex space-x-4">
            <div class="w-1/4 bg-white rounded border-solid border-1 border-black shadow-xl">
                <div class="m-5 text-center">
                    <i class="fas fa-music text-blue-700 text-xl text-center"></i>
                </div>
            </div>
            <div class="w-1/4 bg-white rounded border-solid border-1 border-black shadow-xl">
                <div class="m-5 text-center">
                     <i class="far fa-list-alt text-blue-700 text-xl text-center"></i>
                </div>
            </div>  
            <div class="w-1/4 bg-white rounded border-solid border-1 border-black shadow-xl">
                <div class="m-5 text-center">
                    <i class="fas fa-user text-blue-700 text-xl text-center"></i>     
                </div>
            </div>  
            <div class="w-1/4 bg-white rounded border-solid border-1 border-black shadow-xl">
                <div class="m-5 text-center">
                    <i class="fas fa-volume-up text-blue-700 text-xl text-center"></i>
                </div>
            </div>        
        </div>
    </div>
    <!-- slyder -->
    <div id="slyder" class="flex flex-row space-x-4 absolute">
        <songslyder />
        
    </div>
    <!-- <vueper-slides /> -->
 <div>
        <div>{{ getAnimalByIndex({ songs, index: songID }).name }}  </div> <div>  Image: {{ getAnimalByIndex({ songs, index: SongID }).thumbnail }} </div>
        <button @click="songNext()" class="bg-green p-9 ">Next song</button>
    </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout'
    // import Song from './../Components/Songs/SongComponent'
    import Songslyder from './../Components/Songs/SongSliderComponent'

    export default {
        props: ['songs'],
        components: {
            AppLayout,
            // Song,

            Songslyder,
            
            
        },
        data() {
            return {
                SongID: 1 
            };
        },
        methods:{
            getAnimalByIndex({ songs = [], index = 0 }) {
                return songs[index] || {}
            },
            songNext() {
                this.SongID = (this.SongID + 1);
            },
        }
        

    }
    
</script>
