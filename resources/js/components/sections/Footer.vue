<template>
    <div>
        <section class="section footer is-background-gray animated fadeIn">
			<center>
				<div class="columns is-centered">
					<div class="column is-6">
						<p>
							This website was crafted with {{ heart }} by Gerald Muvengei using <a href="" class="link">Vuejs</a>, <a href="" class="link">Laravel</a>, <a href="" class="link">Bulma</a>.
						</p>
						<br>
						<a href="https://bulma.co">
							<figure class="image">
								<img class="" :src="madeWithBulma" alt="made with bulma">
							</figure>
						</a>

					</div>
				</div>
			</center>
		</section>
    </div>
</template>

<script>

let myEmoji = require('node-emoji')

import madeWithBulma from '../../images/made-with-bulma.png'

export default {
	data() {
		return {
			heart: myEmoji.get('heart'),
			madeWithBulma: madeWithBulma
		}
	},
}
</script>

<style lang="sass" scoped>
	.footer
		background: #f7f7f7
		margin-top: 40px
		figure
			img
				max-width: 200px
</style>