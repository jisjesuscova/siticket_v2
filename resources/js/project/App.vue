<template>
  <div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <menu-component />
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <router-view></router-view>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    </div>
    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="https://siticket.pe">Siticket.pe</a>.</strong>
      Todos los derechos reservados.
    </footer>
  </div>
</template>