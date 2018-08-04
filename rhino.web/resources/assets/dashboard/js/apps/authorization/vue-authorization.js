import Vue from 'vue';
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import _ from 'underscore'


Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueResource);
Object.defineProperty(Vue.prototype, '$_', { value: _ });

import Authorization from './Authorization.vue'


const appAuthorization = new Vue({
    el: '#app-authorization',
    components:{
        Authorization
    },
});



