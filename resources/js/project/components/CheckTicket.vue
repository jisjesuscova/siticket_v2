<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 margin-left">
                        <h1>
                            Validación de Entrada
                        </h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <img :src="`../../template/dist/img/logo.jpg`" style="height: auto; width: auto;" alt="Descripción de la imagen">
                            <br><br>
                            <center>
                                <h1>Evento: <strong>Mana</strong>.</h1>
                                <h1>Fecha 12/01/2023</h1>
                                <br><br>
                                <div class="alert alert-success text-center" role="alert">
                                    <h3><i class="fa-regular fa-circle-check"></i> Entrada aceptada</h3>
                                </div>
                                <div class="alert alert-danger text-center" role="alert">
                                    <h3><i class="fa-solid fa-circle-exclamation"></i> Entrada denegada</h3>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    </div>
</template>
  
<script>
export default {
    data() {

    },
    methods: {
        checkTicket() {
            this.$axios.get('/api/ticket/check/'+ this.$route.params.id).then((res) => {
                this.status = res.data.data;
                console.log(this_status);
            })
        }
    },
    async mounted() {
        this.checkTicket();
    }
}
</script>