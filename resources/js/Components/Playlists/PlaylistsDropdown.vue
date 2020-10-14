<template>
    <div>
        <button @click="isOpen = true" v-if="!isOpen">Open</button>
        <button @click="isOpen = false" v-else>Close</button> 
        <transition name="fade">
            <div v-if="isOpen">
            <div>Your Playlists :</div>
            <div v-if="isLoaded">
                <div>
                    <div class="w-1/4"><i class="fas fa-check"></i></div>
                    <div class="w-3/4">
                        <div v-for="playlist in items" :key="playlist.id" @click="addSongToPlaylist(playlist)" :playlist="playlist" >{{playlist.name}}</div>
                    </div>
                </div>
            </div>
                    
            <div>End of playlists</div>
            </div>
        </transition>
    </div>

</template>

<script>

    import PlayListItem from './../../Components/Playlists/PlayListItem'
    export default {
        
        props: ['playlists', 'song'],
        components: {
            PlayListItem,
           
        },
        data(){
            return{
                isOpen: false,
                ListIsOpen:false,
                isLoaded: false,
                items: []
            }
        },
        mounted(){
            // if(!this.playlists){
            //     console.log('hallo haloo')
            // }
            
            axios.get(`/api/user/playlists`).then( res => {
                this.items = res.data;                // this.items = res.data
                this.isLoaded = true;
                console.log(res.data)
                
            });
           
        },
        watch: {
            isOpen: function(val){
                console.log('changeeee')
            }
        },
        methods: {
            addSongToPlaylist: function(playlist){

                 axios.post(`/api/user/playlists/${playlist.id}/add-song`,{id:this.song.id}).then( res => {
                   console.log(res.data)           
            });
            }
        }
        // watch: {
        //         // call again the method if the route changes
        //         '$route': 'fetchData'
        //     },
        
    }
</script>
