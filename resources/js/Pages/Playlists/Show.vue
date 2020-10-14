<template>
    <app-layout >
        
        <template #header>
            <div class="flex justify-between">
            <div class="flex-1">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Playlist :{{playlist.name}}</h2>
            </div>

                <div class="flex">
                        <!-- <inertia-link :href="'/playlists/'" class="text-gray-700 text-center bg-blue-400 hover:bg-blue-500 px-4 py-2 m-2">Back</inertia-link> -->
                        <inertia-link :href="'/playlists/'+playlist.id+'/edit'" class="text-gray-700 text-center bg-blue-400 hover:bg-blue-500 px-4 py-2 m-2">Edit</inertia-link>
                        <delete-playlist :playlist="playlist"/>
                </div>
            </div>
        </template>
            <div class="my-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                        <!-- playlist information -->
                        <div class="w-full flex ">
                            <div class="w-12 flex justify-center">
                                <div class="text-lg self-center"></div>
                            </div>
                            <div class="w-12 flex justify-center">
                                <div class="text-lg self-center"></div>
                            </div>
                            <div class="flex-1 ml-4 justify-center self-center">
                                <div class="text-lg self-center">Name:</div>
                            </div>

                            <div class="w-32 flex justify-center">
                                <div class="w-16 self-center">option</div>
                                <div class="w-16 flex justify-center self-center"><i class="far fa-clock self-center"></i></div>
                            </div>
                        </div>
                        <song-list-item v-for="song in playlist.songs" :key="song.id" :song="song"/>
                    </div>
                </div>
            </div>
            <div>
                <!-- <playlist-bar-controles /> -->
            </div>
        
        
    </app-layout>
</template>




<script>
    import AppLayout from './../../Layouts/AppLayout'
    import Playlist from './../../Components/Playlists/PlaylistComponent'
    import Song from './../../Components/Songs/SongComponent'
    import SongListItem from './../../Components/Songs/SongListItemComponent'
    import DeletePlaylist from './../../Components/Playlists/DeletePlaylistButtonComponent'
    import PlaylistBarControles from './../../Components/Playlists/PlaylistBarControles'

    export default {
        props: ['playlist'],
        components: {
            AppLayout,
            Playlist,
            Song,
            SongListItem,
            DeletePlaylist,
            PlaylistBarControles,
            
        },
        mounted(){
        }
    }

</script>
