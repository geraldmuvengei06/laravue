
export default function (Vue) {

	// functions in the auth package
	Vue.auth = {

		// set logged in user to local storage
		setUser (user) {
			localStorage.setItem('user', user.email)
		},

		// get logged in user
		getUser () {

			let user = localStorage.getItem('user')

			console.log(user)
			if ( ! user ){
				console.log('no user')
				return null

			}else{
				console.log('yes user')
				return user

			}
			
		},

		// destroy logged in user
		destroyUser () {
			localStorage.removeItem('user')
		},

		// check if user is authenticated
		isAuthenticated () {

			return true
			
		} 


	}


	Object.defineProperties(Vue.prototype, {
		$auth: {
			get() {
				return Vue.auth
			}
		}
	})
}