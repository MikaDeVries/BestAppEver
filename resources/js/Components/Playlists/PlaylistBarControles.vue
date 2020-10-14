<template>

            
                <div class="flex w-full bg-white h-14 absolute bottom-0">
                    <div class="w-1/5"></div>
                    <div class="w-3/5 flex flex-col m-2">
                        <div class="flex flex-col bg-gradient-to-r from-teal-400 to-blue-500 rounded text-center h-full justify-center">
                            <div class="text-white bottom-0">
                                
                            </div>

                            <div class="text-white space-x-4">
                                <button class="back flex-1 text-xl hover:text-gray-300" @click="back()">
                                    <i class="fas fa-step-backward"></i>
                                    </button>

                                <button id="play"  class="play flex-1 text-xl hover:text-gray-300" v-if="!isPlaying" @click="play()" >
                                    <i class="far fa-play-circle"></i></button>

                                <button id="pause" class="pause flex-1 text-xl hover:text-gray-300" v-else @click="pause()" >
                                    <i class="far fa-pause-circle"></i>
                                </button>

                                <button class="forward flex-1 text-xl hover:text-gray-300 " @click="forward()">
                                    <i class="fas fa-step-forward"></i>
                                </button>
                            </div>
                            <div class="text-white top-0  text-center">
                                
                                song.length
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5">
                        <div>volume:</div>
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
                isPlaying: false,
                };
            
        },
        methods: {
            play() {
                this.isPlaying = true;
                console.log("play pressed");
                document.getElementById("play").innerHTML= '<i class="far fa-pause-circle"></i>';   
            },
            pause() {
                console.log("pause pressed");
                document.getElementById("pause").innerHTML= '<i class="far fa-play-circle"></i></button>';
                this.isPlaying = false;
            },
            forward(){
                console.log("forward pressed");
            },
            back(){
                console.log("back pressed");
            }
        },
    }
</script>