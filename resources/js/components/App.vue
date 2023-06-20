<script>
import MainLayout from "./layouts/MainLayout.vue";


import LoginLayout from "./layouts/LoginLayout.vue";
export default {
    components: {MainLayout,LoginLayout},
    data(){
        return {
            loading:true,
        }
    },
    methods:{
      onSuccess:function(response){
          this.loading = false
      },
      onError:function(err){
          this.$router.push('/login');
          this.loading = false
      }
    },
    mounted:async function(){
        // await CheckAuth(this.token, this.onSuccess, this.onError);
    },
}
</script>

<template>

    <MainLayout  v-if="$route.path !== '/login'">
        <template v-slot:content>
            <router-view> </router-view>
        </template>
    </MainLayout>

    <LoginLayout v-else>
        <template v-slot:content>
            <router-view> </router-view>
        </template>
    </LoginLayout>



</template>
