<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Song : Create</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!-- song buttons -->
                    
<!-- song information -->
                   <div class="flex justify-center  bg-gray-500 bg-opacity-25 rounded  p-5 "> 
                       <div class="flex flex-wrap-reverse bg-gray-200">
                            <div class="w-full p-2">
                                <div class="text-gray-700 text-center bg-black-400 p-2">
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
                                                <div class="flex w-1/2">Thumbnail: </div>
                                                <div class="flex w-1/2">
                                                    <input style="text" id="thumbnail"  v-model="form.thumbnail"/>
                                                    <jet-input-error :message="form.error('thumbnail')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="flex w-1/1 p-1">
                                                <div class="flex w-1/2">length </div>
                                                <div class="flex w-1/2">
                                                    <input style="text" id="length" v-model="form.length"  />
                                                    <jet-input-error :message="form.error('length')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="flex w-1/1 p-1">
                                                <div class="flex w-1/2">mp3_link </div>
                                                <div class="flex w-1/2">
                                                    <input style="text" id="mp3_link" v-model="form.mp3_link" />
                                                    <jet-input-error :message="form.error('mp3_link')" class="mt-2" />
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                       
                   </div>
                </div>
            </div>
        
    </app-layout>
</template>


<script>
    import AppLayout from './../../Layouts/AppLayout'
    import JetInputError from './../../Jetstream/InputError'
    import Song from './../../Components/Songs/SongComponent'

    export default {

        props: ['song'],
        components: {
            AppLayout,
            JetInputError,
            Song,
        },
        
        data() {
            
            return {
                form: this.$inertia.form({
                    '_method': 'POST',
                    
                    
                }, {
                    // bag: 'updateProfileInformation',
                    resetOnSuccess: false,
                }),

                photoPreview: null,
            }
        },
        methods: {
            submit() {
            this.$inertia.post(`/songs/`, this.form)
            },
        },
        
       
        
    }
    
</script>
