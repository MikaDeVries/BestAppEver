<template>
    <div>
        <button @click="isOpen = true"></button>
        <button @click="isOpen = false"></button>
        <div v-if="isOpen = true">
           <div>Your Playlists</div>
           <div v-if="isLoaded">
                <play-list-name v-for="playlist in items" :key="playlist.id" :playlist="playlist"/>
           </div>
                
           <div>End of playlists</div>
        </div>
    </div>

</template>

<script>

    import PlayListName from './../../Components/Playlists/PlaylistName'
    export default {
        
        props: ['playlists'],
        components: {
            PlayListName,
           
        },
        data(){
            return{
                isOpen:true,
                isLoaded: false,
                items: []
            }
        },
        created(){
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
                // call again the method if the route changes
                '$route': 'fetchData'
            },
        
    }
</script>
