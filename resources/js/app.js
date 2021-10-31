require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import VueChatScroll from 'vue-chat-scroll';

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueChatScroll);

const store = new Vuex.Store({
    state: {
        currentUser: null,
    },
    getters: {
        currentUser(state){
            return state.currentUser;
        },
    },
    mutations: {
        setCurrentUser(state, payload){
            state.currentUser = payload;
        },
    },
    actions: {
        fetchCurrentUser(context,id){
            axios.get('/chat/fetch-recipient',{
                    params: {
                        recipient: id,
                    }
                })
                .then((response) => {
                    context.commit('setCurrentUser', response.data.data);
                })
                .catch((error) => {
                    console.log(error);
                })
        }
    }
});


// Fetch CUrrent User
let queryString = findGetParameter('open');
if(queryString){
    store.dispatch('fetchCurrentUser',queryString);
}
function findGetParameter(parameterName) {
    var result = null, tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}
// End Fetch CUrrent User


import ChatApp from './chat/ChatApp.vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',
    store,
    components: {ChatApp}
});
