import { createApp } from 'vue';
import App from './App.vue';
import Menu from './components/Menu.vue';
import router from './router';

const app = createApp(App).use(router);

app.component('menu-component', Menu);

app.mount('#app');
