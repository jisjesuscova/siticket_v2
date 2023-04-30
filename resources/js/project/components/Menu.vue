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
                        <router-link to="/" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            Inicio
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/team" class="nav-link">
                            <i class="nav-icon fas fa-people-group"></i>
                            Equipos
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            Perfil
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/sign_out" class="nav-link">
                            <i class="nav-icon fas fa-door-open"></i>
                            Salir
                        </router-link>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </div>
  </template>
  
  <script>
  
  export default {
    components: {
    }
  }
  </script>