<template>
    
    <div class="cursor-pointer">
        {{playlist.name}}
    </div>
</template>




<script>
    export default {
        
        props: ['playlist'],
        components: {
            
        },
        // mounted(){
        //    console.log(playlists)
        // },
        data(){
            return{
                
            }
        }
    }
</script>
