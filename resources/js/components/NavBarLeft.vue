<template>
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand" style="">
<!--                e<span>City</span>-->
                <img id="logo" style="float: left" :src="logo" alt="" width="65px"  >
            </a>

            <div class="sidebar-toggler active" @click.prevent="hide">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <menu-template></menu-template>

    </nav>
</template>

<script>
    export default {
        name: "NavBarLeft",
        data(){
            return{
                logo:'../assets/images/logo.jpg',
            }
        },
        methods:{
            hide(e){
                var img =document.getElementById('logo');
                img.toggle();
            }
        },
        computed:{
            activated(){
                return function () {

                    return 'active'
                }
            }
        },
    }
</script>

<style scoped>

</style>