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
            <div class="w-12 flex justify-center">
                <i @click="play()" class="far fa-play-circle text-2xl self-center  cursor-pointer"></i>
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
        
        props: ['song'],
        components: {
            DeleteSong
        },
        mounted(){
           
        },
        // play : function (){
        //     var audio = new Audio('file://storage/app/public/upload/files/audio'+{{song.audio}}); // path to file
        //     audio.play();
        // }
    }
</script>
