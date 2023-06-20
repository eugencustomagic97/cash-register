<script>

import SideBar from "../parts/SideBar.vue";
import {defineComponent} from "vue";
import NavBar from "../parts/NavBar.vue";
import BreadCrumbs from "../parts/BreadCrumbs.vue";
import CheckAuth from "../../api/checkAuth.js";
import Loading from "./../parts/Loading.vue";

export default defineComponent({
    components: {BreadCrumbs, NavBar, SideBar,Loading},
    data(){
        return {
            token: this.$cookies.get("access_token"),
            user:{},
            loading:true
        }
    },
    methods:{
        onSuccess:function(response){
            this.user = response.data
            this.loading = false
            if(this.user === null){
                this.Layout =
                    this.$router.push('/login');
            }
        },
        onError:function(err){
            this.$router.push('/login');
            this.loading = false
        },
    },
    mounted:async function(){
        await CheckAuth(this.token, this.onSuccess, this.onError);
    }

})
</script>



<template>
    <Loading v-if="loading"></Loading>
    <template v-else>
        <div class="wrapper">
            <!-- Navbar -->
            <NavBar></NavBar>
            <!-- Sidebar -->
            <SideBar :user="user"></SideBar>
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <BreadCrumbs></BreadCrumbs>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <slot name="content"></slot>
                    </div>
                </section>
            </div>

            <aside class="control-sidebar control-sidebar-dark"></aside>
        </div>

    </template>

</template>
