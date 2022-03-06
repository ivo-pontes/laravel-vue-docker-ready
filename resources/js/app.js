require('./bootstrap');

require('alpinejs');

import { createApp } from 'vue';
import router from './router'

import Home from './Vue/Pages/Home.vue';

createApp({
    components: {
        Home
    }
}).use(router).mount('#app')
