require('./bootstrap')
// require('admin-lte')

window.Vue = require('vue')

import VueRouter from 'vue-router'
Vue.use(VueRouter)

// handles form posts 
import VueAxios from 'vue-axios'
import axio from 'axios'

Vue.use(VueAxios, axio)

// V form to handle requests
import { Form, HasError, AlertError } from 'vform';

window.Form = Form;

// Sweet alert
import swal from 'sweetalert2';

window.swal = swal;

// progress bar

import VueProgressBar from 'vue-progressbar'

const options = {
  color: '#bffaf3',
  failedColor: '#874b4b',
  thickness: '5px',
  transition: {
    speed: '0.2s',
    opacity: '0.6s',
    termination: 300
  },
  autoRevert: true,
  location: 'top',
  inverse: false
}

Vue.use(VueProgressBar, options)

// Sweet alert toast
const toast = swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000
});

window.toast = toast;

// For events

window.Fire = new Vue;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

// custom packages 

// import appName from packages

import AppName from './packages/AppName.js'

Vue.use(AppName)

// Emoji

import myEmoji from 'node-emoji'
Vue.use(myEmoji)

// Animate

import animateCss from 'animate.css'
Vue.use(animateCss)

let appName = Vue.applicationName.getAppName()

// import auth from packages

import Auth from './packages/Auth.js'

Vue.use(Auth)

import App from './App.vue'

import routes from './routes'

const router = new VueRouter({ 

	routes: routes

})





new Vue(Vue.util.extend({ router }, App )).$mount('#app')