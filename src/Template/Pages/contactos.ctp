<body class="paginas-internas">
    <section class="bienvenidos">

        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">¡Contáctenos!</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Estamos listos para ayudarte</p>

            </div>

        </div>

    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    
                    <?php echo $this->Html->link('Inicio',['controller' => 'Pages', 'action' => 'display', 'inicio'],['class'=>'col-xs-12 text-xs-right']);?> » Contacto

                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <h2 class="m-b-2">Formulario de contacto</h2>


                    <form action="#">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje"></textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>




                </div>
                <div class="col-md-4">
                   <!-- <h3>Detalles de contacto</h3>-->
                    <h3>Servicios Especializados AQUÍTOY S.A.C.</h3>
                    <p>  Para prestarte un mejor servicio envíanos tu solicitud, dudas, quejas o reclamos llenando el siguiente formulario. Déjanos tus datos y nos pondremos en contacto contigo.</p>

                     <p>  También puedes comunicarte con nosotros através del celular: 943287141</p>
                      <p>O visitar nuestras oficinas en: 
                     Avenida Pardo 1347 interior 18. Chimbote, Perú. </p>

                      

                </div>





            </div>
        </div>
    </main>


    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->

    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>


</body>