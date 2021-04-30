<template>
    <div class="row form-group">
        <div  class="input-group row col-md-12 justify-content-center">
            <input
                    id="btn-input2"
                    type="number"
                    name="number"
                    v-model="newNumber"
                    class="form-control input-sm col-md-12"
                    style="width: 100% !important;"
                    placeholder="Type number"
                    @keyup="sendTypingEvent">
        </div><br>
        <div   class="input-group row col-md-12 justify-content-center">

            <textarea
                    id="btn-input"
                    type="text"
                    name="message"
                    class="form-control input-sm col-md-12"
                    style="width: 100% !important;"
                    placeholder="Type your message heress..."
                    v-model="newMessage"
                    @keyup.enter="sendMessage"
                    @keyup="sendTypingEvent"></textarea>

        </div>
        <span class="input-group-btn justify-content-center">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
    //     mounted(){
    //         window.Echo.channel('chat')
    //             .listen('MessageSent', (e) => {
    //                 console.log(e);
    //             });
    // },
        props: ['user'],


        data() {
            return {
                newNumber: '',
                newMessage: ''
            }
        },

        methods: {
            sendTypingEvent() {
               Echo.join('chat')
                    .whisper('typing', this.user);
            },

            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage,
                    receiver: this.newNumber
                });

                this.newMessage = ''
                this.newNumber = ''
            }
        }
    }
</script>