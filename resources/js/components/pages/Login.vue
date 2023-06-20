<script>
import {defineComponent} from "vue";
import Login from './../../api/login.js'
import CheckAuth from "../../api/checkAuth.js";

export default defineComponent({
    components: {},
    data(){
        return {
             form:{
                 email:{
                     value:'',
                     is_invalid:false,
                     errors:[]
                 },
                 password:{
                     value:'',
                     is_invalid:false,
                     errors:[]
                 },
                 invalid_credentials:false,
                 errors:[]
             }
        }
    },
    methods:{
        onSuccess:function(response){
            console.log(response);
            this.$cookies.set("access_token",response.data.token,'30d');
            this.$emit('LoginSuccess')
            this.$router.push('/');
        },
        onError:function(err){
            if(err.response.data.errors){
                Object.entries(err.response.data.errors).map((er) => {
                    if(er[0] === 'password' ){
                        this.form.password.is_invalid = true;
                        this.form.password.errors = er[1];
                    }
                    if(er[0] === 'email' ){
                        this.form.email.is_invalid = true;
                        this.form.email.errors = er[1];
                    }
                    if(er[0] === 'invalid_credentials' ){
                        this.form.invalid_credentials = true;
                        this.form.email.is_invalid = true;
                        this.form.password.is_invalid = true;
                        this.form.errors = er[1];
                    }
                });
            }

        },
        submit:function(){
            console.log(this.form)

            Login(this.form.email.value,this.form.password.value,this.onSuccess,this.onError)

        },
        clearInput(name){
            if(this.form.invalid_credentials){
                this.form.email.is_invalid = false;
                this.form.email.errors = [];
                this.form.password.is_invalid = false;
                this.form.password.errors = [];
                this.form.errors = [];
                this.form.invalid_credentials = false;
            }
            else {
                this.form[name].is_invalid = false;
                this.form[name].errors = [];
            }

        },
    }

})
</script>

<template>
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form v-on:submit.prevent="submit">
                        <div class="input-group mb-3">
                            <input v-on:input="clearInput('email')" v-model="form.email.value" type="text" :class="form.email.is_invalid ? 'is-invalid' : '' " class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <div v-if="form.email.is_invalid" v-for="err in form.email.errors" class="invalid-feedback">
                                {{err}}

                            </div>

                        </div>
                        <div class="input-group mb-3">
                            <input v-on:input="clearInput('password')" v-model="form.password.value" type="password" :class="form.password.is_invalid ? 'is-invalid' : '' " class="form-control" placeholder="Password">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div v-if="form.password.is_invalid"  v-for="err in form.password.errors" class="invalid-feedback">
                                {{err}}
                            </div>
                        </div>

                        <div v-if="form.invalid_credentials" class="col-12 p-0 my-3 text-danger small">
                            Invalid credentials
                        </div>

                        <div class="col-4 p-0">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>


                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</template>
<script setup>
</script>
