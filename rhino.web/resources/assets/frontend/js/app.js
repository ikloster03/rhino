import 'babel-polyfill'
import Vue from "vue"
import Vuex from 'vuex'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import App from 'Apps/App'

Vue.use(Vuex)
Vue.use(VueResource)
Vue.use(VueRouter)

new Vue({
    el: '#app',
    render: h => h(App),
    
});
