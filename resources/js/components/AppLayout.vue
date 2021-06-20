<template>
    <div class="col-md-12">
    <nav-bar-left></nav-bar-left>
    <nav-bar-float></nav-bar-float>
        <nav-bar-up></nav-bar-up>
        <div class="page-wrapper">

            <router-view></router-view>
<!--            <home-component></home-component>-->

            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com/"
                                                                                   target="_blank">Naug</a>. All rights
                    reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>

        </div>
    </div>
</template>

<script>

    export default {
        name: "AppLayout",
        mounted() {
            // let featherScript=document.createElement('script');
            // let progressBar=document.createElement('script');
            // let dashboard=document.createElement('script');
            // let datepicker=document.createElement('script');
            // featherScript.setAttribute('src','/assets/plugins/feather-icons/feather.min.js');
            // progressBar.setAttribute('src','/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js');
            // dashboard.setAttribute('src','/assets/js/dashboard.js');
            // datepicker.setAttribute('src','/assets/js/datepicker.js');
            // document.appendChild(featherScript);
            // document.appendChild(progressBar);
            // document.appendChild(dashboard);
            // document.appendChild(datepicker);

        }
    }

</script>

<style scoped>

</style>