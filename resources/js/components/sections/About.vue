<template>
    <div>
        <section class="section about is-background-gray animated fadeIn" id="about">
			<center>
				<div class="columns is-centered">
					<div class="column is-8">
                        <h2 class="title is-3">
                            <span class="has-shadow-yellow">
                                About me
                            </span>
                        </h2>
                        <figure class="image is-128x128">
                            <img :src="userImage" class="is-rounded" alt="Gerald Muvengei">
                        </figure>
                        <br>
						<p class="content">
							Ssup! An Gerald Muvengei, Full Stack Web Developer and a Computer Scientist. I'm passionate about technology, coding, rock music and sometimes gaming. Since my second year in the university in 2016, I developed intrest is web development and I've always wanted to be a Web Developer! Which I am now, and still building up on.
						</p>

                        <a href="" class="button is-rounded is-primary is-medium">Resume {{ resume }}</a>
					</div>
				</div>
			</center>
		</section>
    </div>
</template>

<script>

import userImage from '../../images/geraldmuvengei.jpg'

let myEmoji = require('node-emoji')

export default {
    data() {
        return {
            userImage: userImage,
            resume: myEmoji.get('male-student')
        }
    },

    mounted() {
    },
}
</script>

<style lang="sass" scoped>
	
</style>