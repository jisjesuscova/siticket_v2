import { createWebHistory, createRouter } from "vue-router";
import Home from './components/Home.vue'
import Team from './components/Team.vue'
import Setting from './components/Setting.vue'
import AddTeam from './components/AddTeam.vue'
import Event from './components/Event.vue'
import AddEvent from './components/AddEvent.vue'
import ShowTicket from './components/ShowTicket.vue'
import Ticket from './components/Ticket.vue'
import Control from './components/Control.vue'
import AddControl from './components/AddControl.vue'
import QrCode from './components/QrCode.vue'

const routes = [
    {
        name:'administrator',
        path:'/administrator',
        component: Home
    },
    {
        name:'show_ticket_token',
        path:'/show_ticket/token',
        component: ShowTicket
    },
    {
        name:'organizator',
        path:'/organizator',
        component: Home
    },
    {
        name:'event',
        path:'/event',
        component: Event
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
        name:'setting',
        path:'/setting',
        component: Setting
    },
    {
        name:'add_team',
        path:'/add_team',
        component: AddTeam
    },
    {
        name:'add_event',
        path:'/add_event',
        component: AddEvent
    },
    {
        name:'ticket',
        path:'/ticket/:id',
        component: Ticket
    },
    {
        name:'control',
        path:'/control',
        component: Control
    },
    {
        name:'add_control',
        path:'/add_control',
        component: AddControl
    },
    {
        name:'security',
        path:'/security',
        component: Home
    },
    {
        name:'qr_code',
        path:'/qr_code',
        component: QrCode
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router