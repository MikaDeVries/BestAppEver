<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Playlist : Create</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!-- song buttons -->
                    
<!-- song information -->
                   <div class="flex justify-center bg-gray-200 bg-opacity-25 rounded  p-5 "> 
                        <div class="w-full p-2">                              
                                <div class="text-center text-xl pb-3"> 
                                    <h1>Create</h1>
                                </div>
                                <div class="flex flex-row">
                                    <div class="w-1/5"></div>
                                    <div class="flex w-3/5  justify-center">
                                        <form @submit.prevent="submit">
                                            <div class="flex flex-col ">
                                                <div class="flex w-1/1 p-1">
                                                    <div class="flex w-2/5">Name: </div>
                                                    <div class="flex w-3/5">
                                                        <input style="text shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" v-model="form.name" />
                                                        <jet-input-error :message="form.error('name')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="flex w-1/1 p-1">
                                                    <div class="flex w-2/5">Description: </div>
                                                    <div class="flex w-3/5">
                                                        <input style="text" id="description" v-model="form.description" />
                                                        <jet-input-error :message="form.error('description')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="flex w-1/1 p-1">
                                                    <div class="flex w-2/5">thumbnail </div>
                                                    <div class="flex w-3/5">
                                                        <input style="text" id="thumbnail" v-model="form.thumbnail" />
                                                        <jet-input-error :message="form.error('thumbnail')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="flex w-1/1 p-1">
                                                    <div class="flex w-2/5">user_id </div>
                                                    <div class="flex w-3/5">
                                                        <input style="text" id="user_id" v-model="form.user_id" />
                                                        <jet-input-error :message="form.error('user_id')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="flex w-1/1 p-1">
                                                    <div class="flex w-2/5"></div>
                                                    <div class="flex w-3/5">
                                                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <div class="w-1/5"></div>
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

    export default {
        props: ['playlist'],
        components: {
            AppLayout,
            JetInputError,
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
            this.$inertia.post(`/playlists/`, this.form)
            },
        },
    }
    
</script>
