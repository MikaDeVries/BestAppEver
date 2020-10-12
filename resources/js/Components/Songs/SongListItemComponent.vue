<template>
   <!-- 
   <delete-song :song="song"/>
   -->
    
    <div class="w-full flex ">
            
            
            <div class="w-12">
            <inertia-link :href="song.permalink" >
                <img class="object-cover object-center h-12 w-12" :src="song.thumbnail" :alt="song.name">
            </inertia-link>
            </div>
            <div @click="startMusic()" class="w-12 flex justify-center" id="playButton"   ref="playButton">
                <i  class="far fa-play-circle text-2xl self-center  cursor-pointer"></i>
            </div>
            <div class="flex-1 ml-4 justify-center self-center">
                <inertia-link :href="song.permalink" class="my-auto text-lg self-center text-black hover:text-gray-500 no-underline hover:underline text-center">{{song.name}}</inertia-link>
            </div>

            <div class="w-32 flex justify-center self-center">
                <div class="w-16 self-center">option</div>
                <div class="w-16 flex justify-center">{{song.length}}</div>
            </div>
            
    </div>

</template>

<script>
    
    import DeleteSong from './DeleteSongButtonComponent'
    export default {
        
        components: {
            DeleteSong
        },
        props: {
            song: {},
            playButton: { type: Boolean, default: false }
        },
        data() {
            return {
                isPlaying: false
            }
        },
        mounted(){
            if (this.playButton) this.startMusic();
        },
        methods:{
            startMusic () {
                this.isPlaying = true;
                console.log("music is now playing");

            },

            pauzeMusic () {
                this.isPlaying= false;
                console.log("music has stopt playting");
            }
        }

    }
</script>