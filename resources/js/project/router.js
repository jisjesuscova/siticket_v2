import { createWebHistory, createRouter } from "vue-router";
import Home from './components/Home.vue'
import Team from './components/Team.vue'
import Profile from './components/Profile.vue'
import AddTeam from './components/AddTeam.vue'

const routes = [
    {
        name:'administrator',
        path:'/administrator',
        component: Home
    },
    {
        name:'home',
        path:'/home',
        component: Home
    },
    {
        name:'team',
        path:'/team',
        component: Team
    },
    {
        name:'profile',
        path:'/profile',
        component: Profile
    },
    {
        name:'add_team',
        path:'/add_team',
        component: AddTeam
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router