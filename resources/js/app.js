/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 

require('./bootstrap');

window.Vue = require('vue');






/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('template-toolbar-component', require('./components/TemplateToolbarComponent.vue').default);
Vue.component('student-list-component', require('./components/StudentListComponent.vue').default);
Vue.component('body-content-component', require('./components/BodyContentComponent.vue').default);
Vue.component('profile-component', require('./components/ProfileComponent.vue').default);
Vue.component('select-enrolled-component', require('./components/SelectEnrolledComponent.vue').default);
Vue.component('view-enrolled-component', require('./components/ViewEnrolledComponent.vue').default);
Vue.component('secondview-enrolled-component', require('./components/SecondViewEnrolledComponent.vue').default);
Vue.component('thirdview-enrolled-component', require('./components/ThirdViewEnrolledComponent.vue').default);
Vue.component('fourthview-enrolled-component', require('./components/FourthViewEnrolledComponent.vue').default);
Vue.component('fifthview-enrolled-component', require('./components/FifthViewEnrolledComponent.vue').default);
Vue.component('studentlist-component', require('./components/StudentListComponent.vue').default);
Vue.component('registeration-component', require('./components/RegisterationComponent.vue').default);
Vue.component('profile-edit-component', require('./components/ProfileEditComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vuetify from './plugins/vuetify.js'

import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    vuetify: Vuetify,
});
