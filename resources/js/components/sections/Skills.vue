<template>
    <div>
        <section class="container skills" id="skills">
			<div class="columns">
				<div class="column is-5 animated fadeIn">
					<h2 class="title is-3">
						<span class=" has-shadow-red">Skills</span>
					</h2>
					<p class="text is-6">
						Since when I started my career in Web Developer in late 2017, I have been experimenting with Javascript and PHP frameworks trying to bring great ideas, passion and quality to what I code, and to keep myself informed on current development trends. However, it has not been easy since these trends keep changing every now and then.
					</p>
				</div>


				<div class="column is-7 animated fadeIn">
					<div class="card">
						<center	class="card-body">
							<figure class="image is-128x128">
								<img :src="skillsImage" alt="" class="">
								<!-- {{ codeEmoji }} -->
							</figure>
							<h3 class="title is-4">
								Full Stack Web Developer
							</h3>
							<p class="is-gray">
								As a Full-Stack Developer I have been helping bringing design concepts and development skills to life through HTML/CSS, JS Technologies, PHP and Laravel, placing special attention on mobile friendly and user friendly developments.
							</p>
							<br>
							<h4 class="subtitle">
								Languages I Speak:
							</h4>

							<div class="tags is-centered">
								<span class="tag">HTML</span>
								<span class="tag">CSS</span>
								<span class="tag">JS</span>
								<span class="tag">PHP</span>
							</div>
							<h4 class="subtitle">
								Development Tools:
							</h4>

							<div class="tags is-centered">
								<span class="tag">GIT</span>
								<span class="tag">BITBUCKET</span>
								<span class="tag">NPM</span>
								<span class="tag">VSCODE</span>
								<span class="tag">UBUNTU</span>
								<span class="tag">WINDOWS10</span>
							</div>

							<h4 class="subtitle">
								Frameworks:
							</h4>

							<div class="tags is-centered">
								<span class="tag">LARAVEL</span>
								<span class="tag">VUEJS</span>
								<span class="tag">BULMA</span>
								<span class="tag">BOOTSTRAP</span>
							</div>
						</center>
					</div>
				</div>
			</div>
        </section>
    </div>
</template>

<script>

import skillsImage from '../../images/illustrations/skills-image.svg';

let myEmoji = require('node-emoji')

export default {

	data() {
		return {
			skillsImage: skillsImage,
			codeEmoji: myEmoji.get('heart')
		}
	},

	mounted() {
	},
    
}
</script>

<style lang="sass" scoped>
	.skills
		margin-top: 80px
		// max-width: calc(100%-600px) !important
		padding-left: 20px
	
	.card
		border: none !important
		border-color: transparent
		box-shadow: 0 3px 6px rgba(10,10,10,.1) !important
		border-radius: 2px
		padding: 20px
		.card-body
			.subtitle
				.label
					float: left
</style>