import { createApp } from 'vue';
import App from './App.vue';
import Menu from './components/Menu.vue';
import router from './router';
import axios from 'axios';

const app = createApp(App).use(router);

app.component('menu-component', Menu);

app.mount('#app');

app.config.globalProperties.$axios = axios;
window.axios = axios;