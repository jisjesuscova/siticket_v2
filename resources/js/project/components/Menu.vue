<template>
    <div>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <router-link to="/home" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            Inicio
                        </router-link>
                    </li>
                    <li class="nav-item" v-if="rol_id == 1">
                        <router-link to="/team" class="nav-link">
                            <i class="nav-icon fas fa-people-group"></i>
                            Equipos
                        </router-link>
                    </li>
                    <li class="nav-item" v-if="rol_id == 2">
                        <router-link to="/event" class="nav-link">
                            <i class="nav-icon far fa-calendar-days"></i>
                            Eventos
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/setting" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            Perfil
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a :href="'/logout'" class="nav-link">
                            <i class="nav-icon fas fa-door-open"></i>
                            Salir
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </div>
  </template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            rol_id: ''
        }
    },
    mounted() {
        axios.get('/session-data')
        .then(response => {
            this.rol_id = response.data.rol_id;
        })
        .catch(error => {
            console.log(error);
        });
    }
}
</script>