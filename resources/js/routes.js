import Welcome from './components/Welcome.vue'
import Login from './components/auth/Login.vue'
import Register from './components/auth/Register.vue'
import Home from './components/auth/admin/Home.vue'


export default[
	{
		path: '/',
		name: 'Welcome',
		component: Welcome,
		meta: {
			title: app_name + ' | Welcome'
		}
	},
	{
		path: '/login',
		name: 'Login',
		component: Login,
		meta: {
			forVisitors: true,
			title: app_name + ' | Login'
		}
	},
	{
		path: '/register',
		name: 'Register',
		component: Register,
		meta: {
			forVisitors: true,
			title: app_name + ' | Register'
		}
	},

	{
		path: '/home',
		name: 'Home',
		component: Home,
		meta: {
			forAuth: true,
			title: app_name + ' | Home'
		}
	}


]