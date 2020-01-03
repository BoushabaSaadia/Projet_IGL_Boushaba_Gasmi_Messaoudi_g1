


require('./bootstrap');

window.Vue = require('vue');


import store from './store/index'
Vue.component('navy', require('./components/navy.vue'))
Vue.component('etudiants', require('./components/Etudiants.vue'))
Vue.component('createEtudiant', require('./components/CreateEtudiant.vue'))

const app = new Vue({
    el: '#app',
    store
});
