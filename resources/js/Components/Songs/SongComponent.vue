<template>
   <!-- 
   <delete-song :song="song"/>
   -->
    
    <div class="w-2/5  p-2 pt-10">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" >
            <inertia-link :href="song.permalink" >
                <img class="w-full object-cover h-48 overflow-hidden" :src="song.thumbnail" alt="Song image">
            </inertia-link>
            <div class="px-6 py-4">
                <div>
                    <div class="font-bold text-black text-xl mb-2 text-center"><inertia-link :href="song.permalink" >{{song.name}}</inertia-link></div>
                    
                <play-lists-dropdown :song="song" />
                        
                </div>
                <p class="text-gray-700 text-base flex" >
                    <audio controls class="flex-1 align-center">
                        <source :scr="song.mp3_link" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </p>
            </div>
            <div class="px-6 pt-4 pb-2 flex items-center">
                <span class="flex-1 text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#pop</span>
                <span class="flex-1 text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#USA</span>
                <span class="flex-1 text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#rock</span>
            </div>
        </div>
    </div>

</template>

<script>
    import PlayListsDropdown from './../../Components/Playlists/PlaylistsDropdown'

    export default {
        
        props: ['song','playlists'],
        
        // mounted(){
        //    console.log(this.playlist)
        // },

        components: {
            PlayListsDropdown,
            
        },
        
        
    }
</script>
