require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex'
import VueRouter from 'vue-router'

Vue.use(Vuex);
Vue.use(VueRouter)







import ChatApp from './chat/ChatApp.vue';


const app = new Vue({
    el: '#app',
    components: {ChatApp}
});
