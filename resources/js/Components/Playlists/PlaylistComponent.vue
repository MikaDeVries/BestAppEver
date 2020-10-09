<template>
    
    <div class=" .w-56  lg:flex p-5">
        <div class="h-48 bg-blue-400 lg:h-auto lg:w-56 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="image">
        </div>
        <div class="border-r border-b border-l lg:w-56 border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div >
                <div class="text-gray-900 font-bold text-xl mb-2"><inertia-link :href="'/playlists/'+playlist.id" >{{playlist.name}}</inertia-link></div>
                
                    <div class="flex flex-row">
                        <div class="pr-1"><p class="text-gray-700 text-base ">{{playlist.description}}</p> </div>
                        <div class="pr-1"><p class="text-gray-700 text-base ">{{playlist.thumbnail}}</p></div>
                    </div>
                
            </div>
            <div class="flex items-center">
                <div class="">
                    <p class="text-gray-900 leading-none">date</p>
                    <p class="text-gray-600">catogorie</p>
                </div>
            </div>
        </div>
    </div>
</template>




<script>

    
    export default {
        
        props: ['playlist'],
        components: {
            
        },
        mounted(){
           
        }
    }
</script>
