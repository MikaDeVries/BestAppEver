<template>
    <div class="">
        <div class="font-bold text-black text-xl pl-5 text-left"> >{{playlist.name}}</div>
    </div>
</template>

<script>

    import DeletePlaylist from './DeletePlaylistButtonComponent'
    export default {
        
        props: ['playlist'],
        components: {
            DeletePlaylist
        },
        mounted(){
           
        }
    }
</script>
