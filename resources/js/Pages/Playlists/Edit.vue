<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Playlist :{{playlist.name}}</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!-- playlist buttons -->
                    <div class="flex"> 
                        <div class="flex w-1/5">
                            <inertia-link :href="'/playlists/'+playlist.id" >
                                <div class="text-gray-700 text-center bg-blue-400 hover:bg-blue-500 px-4 py-2 m-2">back</div>
                            </inertia-link>
                        </div>
                        <div class="flex w-3/5 flex-wrap justify-center">
                            
                        </div>
                        <div class="flex w-1/5">
                        </div>
                    </div>
<!-- playlist information -->
                   
                       <div class="flex flex-wrap-reverse bg-gray-200">
                            <div class="w-1/5 p-2 bg-blue-600">
                                <!-- <img class="w-full object-cover h-48 overflow-hidden" :src="song.thumbnail" alt="Song image"> -->
                            </div>
                            <div class="w-4/5 p-2">
                                <div class="texts-center text-xl pb-3"> 
                                    <h1>Editor</h1>
                                </div>

                                <form @submit.prevent="submit">
                                    <div class="flex flex-col">
                                        <div class="flex w-1/1 p-1">
                                            <div class="flex w-1/2">Name: </div>
                                            <div class="flex w-1/2">
                                                <input style="text" id="name" v-model="form.name" />
                                                <jet-input-error :message="form.error('name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="flex w-1/1 p-1">
                                            <div class="flex w-1/2">Description: </div>
                                            <div class="flex w-1/2">
                                                <input style="text" id="description" v-model="form.description" />
                                                <jet-input-error :message="form.error('description')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="flex w-1/1 p-1">
                                            <div class="flex w-1/2">thumbnail </div>
                                            <div class="flex w-1/2">
                                                <input style="text" id="thumbnail" v-model="form.thumbnail" />
                                                <jet-input-error :message="form.error('thumbnail')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="flex w-1/1 p-1">
                                            <div class="flex w-1/2">user_id </div>
                                            <div class="flex w-1/2">
                                                <input style="text" id="user_id" v-model="form.user_id" />
                                                <jet-input-error :message="form.error('user_id')" class="mt-2" />
                                            </div>
                                        </div>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Submit</button>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>                                           
                   </div>
                </div>
            </div>
        
    </app-layout>
</template>


<script>
    import AppLayout from './../../Layouts/AppLayout'
    // import Playlist from './../../Components/Playlists/PlaylistComponent'
    import JetInputError from './../../Jetstream/InputError'
  

    export default {
        props: ['playlist'],
        components: {
            AppLayout,
            // Playlist,
            JetInputError,
            // DeletePlaylist
        },
        data() {
            return {
                form: this.$inertia.form({
                    '_method': 'PUT',
                    name: this.playlist.name,
                    description: this.playlist.description,
                    thumbnail: this.playlist.thumbnail,
                    user_id : this.playlist.user_id,
                    
                }, {
                    // bag: 'updateProfileInformation',
                    resetOnSuccess: false,
                }),

                photoPreview: null,
            }
        },
        methods: {
            submit() {
            this.$inertia.post(`/playlists/${this.playlist.id}`, this.form)
            },
        },
    }
    
</script>
