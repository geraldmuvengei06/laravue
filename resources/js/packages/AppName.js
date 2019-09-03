export default function (Vue) {

	// defining the package
	
	Vue.applicationName = {

		// get app name

		getAppName () {

			var appName = null

			// app_name is a variable set on welcome.blade.php

			if ( app_name != null )

				appName = app_name

			else

				appName = 'Laravue'

			return appName
		}

	}

	// export this package to external word

	Object.defineProperties(Vue.prototype, {
		$applicationName : {
			get() {
				return Vue.applicationName
			}
		}
	})

}