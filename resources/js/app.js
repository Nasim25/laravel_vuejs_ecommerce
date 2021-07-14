
require('./bootstrap');

window.Vue = require('vue').default;

import Form from 'vform'

window.Form = Form

import VueRouter from 'vue-router'
Vue.use(VueRouter)


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('admin-main', require('./components/backend/AdminMaster.vue').default);
Vue.component('frontend-main',require('./components/backend/AdminMaster.vue').default);
import {routes} from './routers'

const router = new VueRouter({
    routes,
    mode:'hash',
})

// vue x
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from './store/store'
const store = new Vuex.Store(
    storeData,
);

import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.Toast = Toast;

import toastr from 'toastr'
window.toastr = toastr

// moment js
import moment from "moment";
Vue.filter('time',(a)=>{
    return moment(a).format('MMM Do YYYY');
});

// multiselect
import Multiselect from 'vue-multiselect'
Vue.component('multiselect', Multiselect)

// editor

import { VueEditor, Quill } from "vue2-editor";


const app = new Vue({
    el: '#app',
    router,
    store,
});
