<template>
    <div>
        <section class="container-fluid section work animated fadeIn" id="work">
			<div class="columns">
				<div class="column animated fadeIn">
					<h2 class="title">
						<span class="has-shadow-teal">
							Latest Works
						</span>
					</h2>
					<p class="is-gray">
						While doing my degree in Computer Science I have worked on several personal and professional projects including this website of mine. Here are my major works:
					</p><br>
					<a href="" class="button is-primary is-outlined">See My Projects</a>
				</div>

				<div class="column animated fadeIn">

					<div class="card">
						<div class="card-header">
							<div class="card-image">
								<img :src="portfolioImage" class="image" alt="Portfolio Website">
							</div>
						</div>

						<div class="card-body">
							<h3 class="subtitle">
								My Portfolio Website
							</h3>
							<p class="is-text-gra">
								Designing and coding my portfolio website.
							</p>
							<br>

							<div class="tags is-centered">
								<span class="tag">VUEJS</span>
								<span class="tag">BULMA</span>
								<span class="tag">SASS</span>
							</div>
						</div>


						
					</div>
					
				</div>
				<div class="column animated fadeIn">

					<div class="card">
						<div class="card-header">
							<div class="card-image">
								<img :src="tenantImage" class="image" alt="Tenant Management system">
							</div>
						</div>

						<div class="card-body">
							<h3 class="subtitle">
								MyTenant
							</h3>
							<p class="is-text-gra">
								Web application developed with Laravel - a PHP framework that helps you manage your rental houses and tenants.
							</p>
							<br>
							<div class="tags is-centered">
								<span class="tag">LARAVEL</span>
								<span class="tag">BOOTSTRAP</span>
								<span class="tag">PHP</span>
							</div>
						</div>

						
					</div>
					
				</div>
				<div class="column animated fadeIn">
					<div class="card has-shadow-gray">
						<div class="card-header">
							<div class="card-image">
								<img :src="posImage" class="image" alt="Point of sale system">
							</div>
						</div>

						<div class="card-body">
							<h3 class="subtitle">
								IPOS
							</h3>
							<p class="is-text-gra">
								A Point of Sale Web application, also developed with Laravel to help you manage stocks, sales in your sales business.
							</p>

							<br>
							<div class="tags is-centered">
								<span class="tag">LARAVEL</span>
								<span class="tag">BOOTSTRAP</span>
								<span class="tag">PHP</span>
								<span class="tag">AFRICASTALKING</span>
							</div>
						</div>

						
					</div>

				</div>
			</div>
		</section>
    </div>
</template>
<script>

import portfolioImage from '../../images/illustrations/full-stack-develo.png'
import tenantImage from '../../images/illustrations/undraw_steps.png'
import posImage from '../../images/backgrounds/Blush.jpg'

export default {
    data() {
		return {
			portfolioImage: portfolioImage,
			tenantImage: tenantImage,
			posImage: posImage,
		}
	},
}
</script>

<style lang="sass" scoped>
	.work
		margin-top: 80px
		.card
			box-shadow: 0 2px 5px 0 rgba(0,0,0,.1)
			border-radius: 10px
			.card-body
				padding: 18px 12px		
	.card
		.card-body
			.subtitle
				margin-bottom: 4px !important		
</style>