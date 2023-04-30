import './bootstrap';
import './jquery/jquery.min.js';
import './bootstrap/js/bootstrap.bundle.min.js';
import './js/adminlte.js';
import './js/pages/dashboard3.js';
import { createApp } from 'vue';
import App from './project/App.vue';
import Menu from './project/components/Menu.vue';
import router from './project/router';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const app = createApp(App).use(router);

app.component('menu-component', Menu);

app.mount('#app');

