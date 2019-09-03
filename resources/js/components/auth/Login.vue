<template>
	<div class="container page">
        <div class="row">
            <div class="col-md-4 col-sm-12 ml-auto mr-auto mt-4">

                <div class="login-logo">
                    <a  href="../../index2.html"><b>Admin</b>LTE</a>
                </div>
                                    
                <div class="card">
                    <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form @submit.prevent="loginUser()">
                       <div class="form-group has-feedback">
                            <input v-model="form.email" type="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Email">
                            <has-error :form="form" field="email"></has-error>
                        </div>

                        <div class="form-group has-feedback">
                            <input v-model="form.password" type="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Password">
                            <has-error :form="form" field="password"></has-error>
                        </div>
                        
                        <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="checkbox icheck">
                            <label>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
                            </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                        <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                        <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="#">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
	</div>
</template>

<script type="text/javascript">
	
	export default {

        name: 'login',
        // props: ['app'],

        
        data() {
            return {
                reactive: true,

                user: {},

                message: '',
    
                form : new Form({
                    email: '',
                    password: '',
                }),
            }
        },

        methods: {

            loginUser () {

                this.form.post('/login').then(({ data }) => {

                    this.user = data.user
                    this.message = data.message

                    if (this.message === true) {

                        // store user in the localStorage
                        this.$auth.setUser(this.user)
                        
                        this.$router.push('/home')
                        toast.fire({
                            type: 'success',
                            title: 'Welcome ' +  this.user.name
                        })
                        
                    }else{

                        this.form.fill(this.form)
                        toast.fire({
                            type: 'error',
                            title: 'Login credentials don\'t match or don\'t exist!'
                        })
                        
                    }
                    
                }).catch(({error}) => {

                    toast.fire({
                        type: 'error',
                        title: 'Unable to login!'
                    })
                    console.log(error)
                    
                })
            },

            getUsers() {

                axios.get('/user').then(response => {
                    
                    this.user = response.data

                    if(response.data.message == true ){

                        this.$router.push('/home')    
                        this.user = response.data.user
						Fire.$emit('userInit')

                        
                    }else{

                        this.$router.push('/login')    
                        
                    }

                }).catch(error => {

                    console.log(error) 

                })

            }
            
        },

        
        mounted() {
            this.getUsers()
        },
	};

</script>

<style lang="css" scoped>
   .login-logo {
        font-size: 35px;
        text-align: center;
        margin-bottom: 25px;
        font-weight: 300;
    }
    .login-logo a{
        text-decoration: none;
        color: #444;
    }
    .login-logo a b{
        font-weight: lighter;
        color: #555;
    }
</style>