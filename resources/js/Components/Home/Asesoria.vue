<script setup>
    import asesoria from "@images/Home/asesoria-collage.webp";
    import circle from "@images/Home/circle-green.webp";

    import iguana_icon from "@images/Home/iguana.svg";
    import vision_icon from "@images/Home/binoculares.svg";
    
</script>

<template>
    <div class="about_area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 order-2 order-md-1">
                    <div class="single_about_thumb_inner">
                        <img :src=asesoria alt="Imagen Asesoria" />
                    </div>
                    <div class="single_about_shape">
                        <div class="single_about_shape_thumb bounce-animate">
                            <img :src=circle alt="Imagen Circle" class="float-bobo" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 p-md-5 px-5 order-1 order-md-1">
                    <div class="section_title text_left">
                        <h2 class="section_sub_title text-uppercase">
                            libérate de tus preocupaciones
                        </h2>
                        <h1 class="title-asesoria">
                            Te ayudamos a<br />
                            emprender<br />
                            y dar lo
                            <span class="green-text">mejor de TI.</span>
                        </h1>
                        <p class="info-desc text-justify">
                            En El Ayudante, contamos con profesionales altamente
                            capacitados y los recursos necesarios para ofrecer a
                            nuestros clientes el mejor servicio.
                        </p>

                        <div class="singel_about_left_inner">
                            <div class="block-one d-flex gap-3">
                                <div class="icon icon-asesoria">
                                    <img :src=iguana_icon
                                        alt="Imagen Versatilidad y Adaptabilidad" />
                                </div>
                                <div class="info-asesoria">
                                    <h2>Versatilidad y Adaptabilidad</h2>
                                    <p class="text-justify">
                                        Nuestro proceso de trabajo se basa en la
                                        transversalidad de sectores como en
                                        funciones dentro de una empresa.
                                        Nuestros servicios se adaptan a
                                        cualquier tipo de negocio, ya que nos
                                        basamos en la especialización funcional.
                                    </p>
                                </div>
                            </div>
                            <div class="block-two d-flex gap-3">
                                <div class="icon icon-asesoria">
                                    <img :src=vision_icon
                                        alt="Imagen Versatilidad y Adaptabilidad" />
                                </div>
                                <div class="info-asesoria">
                                    <h2>Experiencia y Visión</h2>
                                    <p class="text-justify">
                                        Nuestra experiencia y credenciales en
                                        diferentes sectores nos proporciona
                                        conocimientos que ponemos a disposición
                                        de nuestros clientes, con una visión
                                        global que permite crear estrategias de
                                        gestión integral.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

