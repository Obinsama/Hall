/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');
// require('../../public/assets/plugins/feather-icons/feather.min');
// require('../../public/assets/js/dashboard.js');
// require('../../public/assets/js/datepicker.js');
// require('./bootstrap');
window.Vue = require('vue');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import VueFeatherIcon from 'vue-feather-icon';

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueFeatherIcon);

import storeData from "./store/index";
import HomeComponent from "./components/HomeComponent";
import GestionEquipements from "./components/GestionEquipements";
import GestionCommandes from "./components/GestionCommandes";
import GestionVentes from "./components/GestionVentes";
import GestionPrestations from "./components/GestionPrestations";
import GestionPersonnel from "./components/GestionPersonnel";
import Impression from "./components/Impression";

const store = new Vuex.Store(
    storeData
);
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const routes = [{
    path: '/',
    component: HomeComponent
}, {
    path: '/equipements',
    component: GestionEquipements
}, {
    path: '/commandes',
    component: GestionCommandes
}, {
    path: '/ventes',
    component: GestionVentes
}, {
    path: '/prestations',
    component: GestionPrestations
}, {
        path: '/impression/:id',
        component: Impression
    },
    {
        path:'/personnel',
        component:GestionPersonnel
    }
];

const router = new VueRouter({
    routes,

});
const app = new Vue({
    el: '#app',
    router: router,
    store,
    data: {
        messages: [],
        users: [],
    },

    // created() {
    //     this.fetchMessages();
    //
    //     Echo.join('chat')
    //         .here(users => {
    //             this.users = users;
    //         })
    //         .joining(user => {
    //             this.users.push(user);
    //         })
    //         .leaving(user => {
    //             this.users = this.users.filter(u => u.id !== user.id);
    //         })
    //         .listenForWhisper('typing', ({id, name}) => {
    //             this.users.forEach((user, index) => {
    //                 if (user.id === id) {
    //                     user.typing = true;
    //                     this.$set(this.users, index, user);
    //                 }
    //             });
    //         })
    //         .listen('MessageSent', (event) => {
    //             this.messages.push({
    //                 message: event.message.message,
    //                 receiver: event.message.receiver,
    //                 user: event.user
    //             });
    //
    //             this.users.forEach((user, index) => {
    //                 if (user.id === event.user.id) {
    //                     user.typing = false;
    //                     this.$set(this.users, index, user);
    //                 }
    //             });
    //
    //         });
    // },


    methods: {
        // fetchMessages() {
        //     axios.get('/messages').then(response => {
        //         this.messages = response.data;
        //
        //     });
        // },
        //
        // addMessage(message) {
        //     this.messages.unshift(message);
        //     this.messages.pop();
        //
        //
        //     axios.post('/messages', message).then(response => {
        //         console.log(response.data);
        //     });
        // }
    }
});
