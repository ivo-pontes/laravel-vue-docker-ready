import { createRouter, createWebHistory } from 'vue-router'

import Home from '../Vue/Pages/Home.vue'
import About from '../Vue/Pages/About.vue'
import Contact from '../Vue/Pages/Contact.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})