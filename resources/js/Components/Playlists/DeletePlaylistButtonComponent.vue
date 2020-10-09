<template>
<div>
    <button class="text-gray-700 text-center bg-red-400 hover:bg-red-500 px-4 py-2 m-2" @click="showModal=true">
                Delete
    </button>
    <div id="DeleteModal" v-show="showModal" class="modal fixed z-0 left-0 top-0 w-full h-full overflow-auto bg-black bg-opacity-75">
        <div class="modal-content text-black bg-white m-auto px-5 border-solid border-1 border-gray-600 w-2/5 ">
            <span class="close text-black-500 hover:text-black cursor-pointer">&times;</span>
            <div class="mb-5">Weet je het zeker dat je dit wilt verwijderen?</div>
            <span class="close text-gray-700 text-center bg-gray-400 hover:bg-gray-500 px-4 py-2 m-2"><a @click="showModal=false">annuleren</a></span> | 
            <button class="text-gray-700 text-center bg-red-400 hover:bg-red-500 px-4 py-2 m-2" @click="deletePlaylist(playlist)">
                Delete
            </button>
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
           
        },
        data() {
            return {
                showModal: false,
                hideModal: true,
                form: this.$inertia.form({
                    '_method': 'PUT',
                    name: this.playlist.name,
                    description: this.playlist.description,
                    thumbnail: this.playlist.thumbnail,
                    user_id: this.playlist.user_id,
                    
                }, {
                    // bag: 'updateProfileInformation',
                    resetOnSuccess: false,
                }),

                photoPreview: null,
            }
            
        },
        methods: {
            deletePlaylist: function(song){
                song._method = 'DELETE';
                 this.$inertia.post(`/playlists/${this.playlist.id}`, playlist)
               
            },
            
        },
        
        // methods: {
        //     submit() {
        //     this.$inertia.post(`/songs/${this.song.id}`, this.form)
        //     },
        // },
    }
</script>
