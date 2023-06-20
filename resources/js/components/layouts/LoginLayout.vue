<script>
import {defineComponent} from "vue";

export default defineComponent({
    components: {},
    data(){
        return {
        }
    },
    methods:{
        PassUser:function(){
            this.$emit('LoginSuccess')
            console.log('passUser')
        }
    }

})

</script>

<template>
    <div class="hold-transition login-page">
        <div class="login-box">
            <slot name="content" @LoginSuccess="PassUser"></slot>
        </div>
    </div>
</template>

