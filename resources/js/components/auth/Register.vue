<template>
	<div class="container page">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xm-12 ml-auto mr-auto mt-4">
                <div class="register-logo">
                    <a href="../../index2.html"><b>Admin</b>LTE</a>
                </div>
                                    
                <div class="card">
                    <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new membership</p>

                    <form @submit.prevent="createUser()">
                        <div class="form-group has-feedback">
                            <input v-model="form.name" type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Full name">
                            <has-error :form="form" field="name"></has-error>
                        </div>

                        <div class="form-group has-feedback">
                            <input v-model="form.email" type="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Email">
                            <has-error :form="form" field="email"></has-error>
                        </div>

                        <div class="form-group has-feedback">
                            <input v-model="form.password" type="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Password">
                            <has-error :form="form" field="password"></has-error>
                        </div>

                        <div class="form-group has-feedback">
                            <input v-model="form.password_confirmation" type="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password_confirmation') }" placeholder="Retype password">
                        </div>

                        <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="checkbox icheck">
                            <label>
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> I agree to the <a href="#">terms</a>
                            </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                        <i class="fa fa-facebook mr-2"></i>
                        Sign up using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                        <i class="fa fa-google-plus mr-2"></i>
                        Sign up using Google+
                        </a>
                    </div>

                    <a href="login.html" class="text-center">I already have a membership</a>
                    </div>
                    <!-- /.form-box -->
                </div>
            </div>
        </div>
	</div>
</template>

<script type="text/javascript">
	
	export default {

        name: 'register',
        // props: ['app'],

        data () {
            return {

                user: {},

                // new form instance
                
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                }),
                
            }
        },

        methods: {
            
            createUser() {

                this.form.post('/register').then( ({data}) => {

                    // this.form.reset()
                    
                    if(data.message == true ){

                        
                        toast.fire({
                            type: 'success',
                            title: 'Registration successiful! Login to your account.'
                        })
                        this.$router.push('/login')   
                        
                        
                    }else{

                        toast.fire({
                            type: 'error',
                            title: 'Registration failed!'
                        })
                        
                    }


                }).catch(() => {

                    toast.fire({
                        type: 'error',
                        title: 'Registeration not successful!'
                    })
                    
                })
                
            },

            // getUsers() {

            //     axios.get('/user').then(response => {
                    
            //         this.user = response.data

            //         if(response.data.message == true ){

            //             this.$router.push('/home')    
            //             this.user = response.data.user
                        
            //         }
            //     }).catch(error => {

            //         console.log(error) 

            //     })

            // }

            
        },

        created() {
            // this.getUsers()
        },
        
	};

</script>

<style lang="css" scoped>
   .register-logo {
        font-size: 35px;
        text-align: center;
        margin-bottom: 25px;
        font-weight: 300;
    }
    .register-logo a{
        text-decoration: none;
        color: #444;
    }
    .register-logo a b{
        font-weight: lighter;
        color: #555;
    }
</style>