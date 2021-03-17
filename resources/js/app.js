require('./bootstrap');

window.Vue = require('vue');

import Form from "./form"
window.Form = Form;


import VueRouter from 'vue-router'
import routes from './router.js'
import VueEditor from "vue2-editor";


Vue.use(VueRouter);
Vue.use(VueEditor);

import showCats from './components/showCats.vue';
Vue.component('showCats', showCats);

import navbar from './components/navbar.vue'
Vue.component('navbar', navbar); 

import domainReg from './components/domainRegister.vue'
Vue.component('domain-reg', domainReg);

import domains from './components/domainsDisplay'
Vue.component('domains', domains);


const app = new Vue({
    el: '#app',
    router:new VueRouter(routes)
});
