<template>
    <div class="has-background-gray">
        <section class="section container contact is-background-gray animated fadeIn">
			<center>
				<div class="columns is-centered">
					<div class="column">
                        <h2 class="title is-3">
                            <span class="has-shadow-blush">
                                Say Hello
                            </span>
                        </h2>
						
                        <form action="">
                            <div class="columns is-centered">
                                <div class="column is-6">

                                    <div class="field">
                                        <input type="text" class="input is-medium has-background-white-ter" name="name" required placeholder="Name*">
                                    </div>

                                    <div class="field">
                                        <input type="email" class="input is-medium has-background-white-ter" name="email" required placeholder="Email*">
                                    </div>
                                    
                                    <div class="field">
                                        <textarea name="message" id="message" cols="" rows="4" class="textarea has-background-white-ter" placeholder="Message*"></textarea>
                                    </div>

                                    <button type="submit" class="button is-rounded is-medium is-primary">{{ sendEmoji }}  Send</button>
                                    
                                </div>  
                            </div>
                        </form>

                        <h5 class="is-6 or">Or</h5>


                        <h2 class="title is-3">
                            <span class="has-shadow-yellow">
                                Find me on Social Media
                            </span>
                        </h2>

                        <div class="tags is-centered">
                            <a href="http://" class="button  is-medium is-twitter">Facebook</a>
                            <a href="http://" class="button  is-medium is-twitter">Twitter</a>
                            <a href="http://" class="button  is-medium is-twitter">Github</a>
                            <a href="http://" class="button  is-medium is-twitter">Linkedin</a>
                        </div>
					</div>
				</div>


			</center>
		</section>
    </div>
</template>

<script>

var myEmoji = require('node-emoji')

export default {
    data() {
        return {
            sendEmoji: myEmoji.get('envelope')
        }
    },

    mounted() {
    },
}
</script>

<style lang="sass" scoped>
    .tags
        .button
            margin-right: 4px 
            margin-left: 4px 
    .or
        margin-top: 30px 
        margin-bottom: 30px 
    form
        input, textarea
            border: none
            box-shadow: unset
            border-radius: 10px
</style>