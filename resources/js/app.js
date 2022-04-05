
require('./bootstrap');


import { createApp } from 'vue'

import HelloWorld from "./components/HelloWorld";
import ChatMessage from "./components/ChatMessage";
import ChatForm from "./components/ChatForm";
const app = createApp({
    data(){
        return {

            messages:[],
            message:'',
        }
    },
    created() {
        window.Echo.private('chat')
            .listen('MessageSent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
    },
    mounted(){
        this.fetchMessages();
    },
    methods:{
        fetchMessages(){
            const po_number_get= fetch("messages")
                .then(response=>{
                    let material = response.json();
                    material.then((value) => {
                        console.log(value);
                        this.messages = value
                       // this.messages = response.data;

                    });
                })
        },
      //  Receives the message that was emitted from the ChatForm Vue component
        addMessage(message) {
            //Pushes it to the messages array
            this.messages.push(message);


                //POST request to the messages route with the message data in order for our Laravel server to broadcast it.
                axios.post('/messages', message).then(response=>{
                    console.log(response.data)
                    }
                )


        }
    }
});
app.component('hello-world', HelloWorld);
app.component('chat-messages',ChatMessage);
app.component('chat-form',ChatForm);
app.mount('#app')
//app.mount('#app');
