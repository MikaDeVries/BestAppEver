<template>

    <!-- <div>
        <h2>Name :{{ getAnimalByIndex({ songs, index: 2 }).name }} Image: {{ getAnimalByIndex({ songs, index: 2 }).thumbnail }} </h2>
        
    </div> -->
 <div></div>
 
</template>
<script>
// import songlistimport from './SongSliderLoadList';
export default {
    props: ['songs'],
    components: {
            // songlistimport,
            
        },
   data() {
        return {
            
                SongID: 1 
            };
        },
    methods:{
            getAnimalByIndex({ songs = [], index = 0 }) {
                return songs[index] || {}
            }
        }
}    
</script>
