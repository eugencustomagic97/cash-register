import {createRouter, createWebHistory } from "vue-router";


import Home from './components/pages/Home.vue'
import About from './components/pages/About.vue'
import Login from "./components/pages/Login.vue";
import MyAccount from "./components/pages/MyAccount.vue";


const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/about",
        component: About,
    },
    {
        path: "/login",
        component: Login,
    },
    {
        path: "/account",
        component: MyAccount,
    },

];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
