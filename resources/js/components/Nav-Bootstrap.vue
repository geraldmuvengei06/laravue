<template>
	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<router-link to="/" class="navbar-brand" href="javascript:;">Larauth</router-link>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					
					</ul>

					
					<ul class="navbar-nav ml-auto">

						<li class="nav-item dropdown">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fa fa-carret-down"></i> {{ user != null ? user.name : "Account" }}
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

							  <!-- <div v-if="user == null">
								<router-link to="/register" class="dropdown-item">
									<i class="fa fa-user-add"></i> Register
								</router-link>
								<div class="dropdown-divider"></div>
								<router-link to="/login" class="dropdown-item">
									<i class="fa fa-user"></i> Login
								</router-link>
							  </div> -->

							  <div v-for="(menu, index) in menus" :key="index" >
								<router-link :to="menu.path" class="dropdown-item">
									<i class="fa fa-user-add"></i> {{ menu.name }}
								</router-link>
							  </div>
							  <div v-if="user != null">

								<a href="javascript:;" @click="logout()" to="/logout" class="dropdown-item">
										<!-- Message Start -->
										<i class="fa fa-lock"></i> Logout
										<!-- Message End -->
								</a>
							  </div>
							</div>
							
						</li>
						
					</ul>
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
</style>