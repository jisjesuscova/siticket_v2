<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 margin-left">
                        <h1>
                            Lector Qr
                        </h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <img :src="`../../template/dist/img/logo.jpg`" style="height: 200px;" alt="Descripción de la imagen">
                            <br><br>
                            <h1>Evento: <strong>Mana</strong>.  &nbsp;&nbsp;&nbsp;&nbsp;  Fecha 12/01/2023</h1>
                            <br><br>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <h1><i class="fa-regular fa-circle-check"></i> Entrada aceptada</h1>
                            </div>
                            <h1>¡Bienvenido!</h1>
                            <h4>La confianza que depositas en nosotros al asistir a este evento es muy valiosa para nosotros. Agradecemos tu presencia y esperamos que puedas disfrutar de cada momento que hemos preparado con mucho cariño.</h4>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h1><i class="fa-solid fa-circle-exclamation"></i> Entrada denegada</h1>
                            </div>
                            <h1>¡Error!</h1>
                            <h4>La entrada ya ha sido utilizada anteriormente.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    </div>
</template>
  
<script>

</script>