<script>
import {defineComponent} from "vue";
import Logout from "../pages/Logout.vue";

export default defineComponent({
    components: {Logout},
    data(){
        return {
            form:{
                email:'',
                password:''
            }
        }
    },
    methods:{
        onSuccess:function(response){

        },
        onError:function(err){

        },
        submit:function(){

        }
    }

})
</script>

<template>
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <router-link class="nav-link" to="/about">About</router-link>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <router-link class="nav-link" to="/login">Login</router-link>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <Logout></Logout>
            </li>
        </ul>
    </nav>
</template>
<script setup>
</script>
