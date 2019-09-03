<template>
	<div class="">
		<section class="hero is-medium has-background-gradient-blush">
			<div class="">
				<div class="hero-head container">
					<nav class="navbar" role="navigation" aria-label="main navigation">
						<div class="navbar-brand">
							<a class="navbar-item" href="https://bulma.io">
							<!-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> -->
							Logo
							</a>

							<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							</a>
						</div>

						<div id="navbarBasicExample" class="navbar-menu">

							<div class="navbar-end">

								<a href="#skills" class="navbar-item">Skills</a>

								<a href="#work" class="navbar-item">Work</a>

								<a href="#about" class="navbar-item">About</a>

								<a href="#contact" class="navbar-item">Contact</a>

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
					</nav>
				</div>
				<div class="hero-body">
					<div class="container">
						<div class="columns">

							<center class="column column-left">
								<h1 class="title">I'm Gerald Muvengei</h1>
								<h2 class="subtitle">Full Stack Web Developer</h2>
								<a class="button is-white is-outlined is-medium animated infinite fadeIn">Learn More</a>
							</center>

							<div class="column column-right">
								<img  class="image is-256x256" alt="I am a full stack web developer">
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- from skills component -->

		<skills />

		<!-- from works component -->

		<works />

		<!-- from about component -->

		<about />

		<!-- from contacts component -->

		<contacts />

		<!-- from footer component -->

		<contentfooter />

		

	</div>
</template>

<script type="text/javascript">
	import introImage from '../images/illustrations/bulb-coding.jpg'

	import Skills from './sections/Skills.vue'
	import Works from './sections/Works.vue'
	import About from './sections/About.vue'
	import Contact from './sections/Contact.vue'
	import ContentFooter from './sections/Footer.vue'
	
	export default {

		components: {
			'skills' : Skills,
			'works' : Works,
			'about' : About,
			'contacts' : Contact,
			'contentfooter' : ContentFooter,
		},
		
		data() {
			return {
				baseUrl: BASE_URL,
				introImage: introImage,
			}
		},

		created() {
			console.log(BASE_URL)
		},

	};

</script>

<style lang="sass" scoped>

	// box-shadow: inset 0 -6px 0 rgba(35,209,153,.2);
	section
		padding: 40px auto
	
	.navbar
		.navbar-item
			color: #fff
			font-weight: normal

		.navbar-item:hover
				background: #B24592
				opacity: 4
				transition: 0.4s all ease-in-out

	.hero-body
		.columns
			.column-left
				.title, .subtitle
					color: #fff
				.title
					font-weight: bolder
				.subtitle
					font-weight: lighter
</style>