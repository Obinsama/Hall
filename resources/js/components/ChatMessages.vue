<template>
    <ul class="chat">
        <li class="left clearfix" v-model="messages" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p>
                   For : {{ message.receiver }}
                    <br>
                   Message : {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        // mounted(){
        //     window.Echo.channel('chat')
        //         .listen('MessageSent', (e) => {
        //             console.log(e);
        //         });
        // },

        props: ['messages']
    };
</script>