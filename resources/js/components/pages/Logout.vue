<script>
import {defineComponent} from "vue";
import logout from './../../api/logout.js';

export default defineComponent({
    components: {},
    data(){
        return {
            token: this.$cookies.get("access_token"),
        }
    },
    methods:{
        onSuccess:function(response){
            this.$cookies.remove("access_token");
            this.$router.push('/login');
        },
        onError:function(err){
            console.log(err)
            this.$router.push('/login');
        },
        submit:function(){
            logout(this.token,this.onSuccess,this.onError)
        }
    }

})
</script>

<template>
    <form v-on:submit.prevent="submit">
        <button type="submit" class="btn nav-link" >Logout</button>
    </form>
</template>
