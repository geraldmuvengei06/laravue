<template>
	<div>
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="https://bulma.io">
				<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
				</a>

				<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				</a>
			</div>

			<div id="navbarBasicExample" class="navbar-menu">

				<div class="navbar-end">

				<div class="navbar-item">

					<a href="" class="navbar-item">Skills</a>

					<a href="" class="navbar-item">Work</a>

					<a href="" class="navbar-item">About</a>

					<a href="" class="navbar-item">Contact</a>

					<div class="buttons">
					<!-- <a class="button is-primary">
						<strong>Sign up</strong>
					</a> -->
					<a class="button is-blush">
						Log in
					</a>
					</div>
				</div>
				</div>
			</div>
		</nav>
	</div>
</template>

<script type="text/javascript">
	
	export default {
		name: 'navbar',
		props: ['navbar'],
		data() {
			return {
				user: {},
				form: new Form({}),
				menus: [],
				unauthRoutes: [
					{
						name: 'login',
						path: '/login'
					},

					{
						name: 'register',
						path: '/register'
					}
				],

				authRoutes: [
					{
						name: 'home',
						path: '/home'
					}
				]
			}
		},
		methods: {
			
			logout() {

				this.form.post('logout').then(() => {

					// delete user from local storage
					this.$auth.destroyUser()
					this.user = null
					if (this.user == null) {
						Fire.$emit('userUninit')
					}
					this.$router.push('/login')
				})
				
			},

			init() {

				// console.log('init')
				axios.get('/init').then( response => {
					this.user = response.data.user
					if (this.user != null) {
						
						Fire.$emit('userInit')

					}else{
						Fire.$emit('userUninit')
					}
				}).catch((error) => {
					console.log('error ')

				})
				
			}
			
		},

		mounted() {
			this.init()
			// When a specific event fires, change the menus
			Fire.$on('userInit', () => {
				this.menus = this.authRoutes
			})

			Fire.$on('userUninit', () => {
				this.menus = this.unauthRoutes
			})
		},
	};

</script>

<style lang="css" scoped>

	.dropdown-menu .dropdown-item{
		text-transform: capitalize
	}

	.navbar{
		background: #6a3093 !important;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #a044ff, #6a3093) !important;  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #a044ff, #6a3093) !important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}
</style>