 <template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> 
        <inertia-link :href="'/playlists/create'" >
            <div class="text-gray-700 text-center bg-blue-400 hover:bg-blue-500 px-4 py-2 m-2">Create</div>
        </inertia-link>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-wrap bg-gray-500 bg-opacity-25 rounded justify-center "> 
                        
                         <div class="flex flex-col text-left .w-56"> 
                             
                            <playlist v-for="playlist in playlists" :key="playlist.id" :playlist="playlist"/>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'
    import Playlist from './../../Components/Playlists/PlaylistComponent'

    export default {
        props: ['playlists'],
        components: {
            AppLayout,
            Playlist,
        },
    }
</script>
