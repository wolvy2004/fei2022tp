import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import HomeComponent from '../components/HomeComponent'
import About from '../components/AboutComponent'

const routes = [
    { path: '/', name: 'HomeComponent', component: HomeComponent },
    { path: '/acerca', name: 'AboutComponent', component: About }
];

const router = new VueRouter(
    {
        mode:'history',
        base: process.env.BASE_URL,
        routes: routes,

    })
export default router

