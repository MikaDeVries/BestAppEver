<template>
   <button class="" @click="deleteSong(song)">
       Dit is een button
   </button>
</template>

<script>


    export default {
        props: ['song'],
        components: {
            
        },
        mounted(){
           
        },
        methods: {
            deleteSong: function(song){
                song._method = 'DELETE';
                 this.$inertia.post(`/songs/${song.id}`, song)
               
            }
        }
    }
</script>
