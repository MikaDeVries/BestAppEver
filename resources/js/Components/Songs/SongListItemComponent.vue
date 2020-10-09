<template>
   <!-- 
   <delete-song :song="song"/>
   -->
    
    <div class="w-full flex">
            
            
            <div class="w-12">
            <inertia-link :href="song.permalink" >
                <img class="object-cover object-center h-12 w-12" :src="song.thumbnail" :alt="song.name">
            </inertia-link>
            </div>
            <div class="w-12">
                <button @click="play()">Play</button><i class="far fa-play-circle"></i>
            </div>
            <div class="flex-1 ml-4">
                <inertia-link :href="song.permalink" class="my-auto text-lg text-gray-500">{{song.name}}</inertia-link>
            </div>

            <div class="w-32 flex">
                <div class="w-16">option</div>
                <div class="w-16">option</div>
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
           
        }
    }
</script>
