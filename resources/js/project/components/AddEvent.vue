<template>
    <div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Agregar Evento</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cantidad de Entradas</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Cantidad de >Entradas">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fecha del Evento</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Fecha del Evento">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Logo">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  components: {
  }
}
</script>