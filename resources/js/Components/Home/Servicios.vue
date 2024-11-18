<script setup>
    import comunicacion from '@images/Home/Servicios/comunicacion.svg';
    import marketing from '@images/Home/Servicios/marketing-digital.svg';
    import gestion_negocio from '@images/Home/Servicios/gestion-negocio.svg';
    import disenio_grafico from '@images/Home/Servicios/diseno-grafico.svg';
    import consultoria from '@images/Home/Servicios/consultoria.svg';
    import programacion from '@images/Home/Servicios/programacion.svg';
    import banner_servicios from '@images/Home/banner.jpg';

const servicios = [
  {
    titulo: "Comunicación",
    descripcion: "Aplicamos la estrategia de comunicación que tu negocio necesita.",
    imagen: comunicacion,
    enlace: "marketing.html",
  },
  {
    titulo: "Marketing Digital",
    descripcion: "Posicionamiento, campañas digitales, analítica, evaluación de resultados.",
    imagen: marketing,
    enlace: "marketing.html",
  },
  {
    titulo: "Gestión De Negocio",
    descripcion: "Gestión y maximización del potencial de negocio.",
    imagen: gestion_negocio,
    enlace: "marketing.html",
  },
  {
    titulo: "Diseño Gráfico",
    descripcion: "Elaboración de grafismos y creatividades.",
    imagen: disenio_grafico,
    enlace: "marketing.html",
  },
  {
    titulo: "Consultorías & Auditorías",
    descripcion: "Investigación, análisis, y documentación acorde a la evolución de tu empresa.",
    imagen: consultoria,
    enlace: "marketing.html",
  },
  {
    titulo: "Programación Informática",
    descripcion: "Creación y mantenimiento de páginas web.",
    imagen: programacion,
    enlace: "marketing.html",
  },
];
</script>

<template>
    <div class="section-servicios py-5">
      <div class="container w-100">
        <div class="row z-1 position-relative">
          <div class="col-lg-12">
            <div class="section_title text_center text-white">
              <h6 class="subtitle text-uppercase text-center">servicios</h6>
              <h2 class="text-center text-white title mb-5">
                Crea tu propia estrategia
              </h2>
            </div>
          </div>
        </div>
        <div class="row row-servicios">
          <!-- Generar las tarjetas dinámicamente -->
          <div
            v-for="(servicio, index) in servicios"
            :key="index"
            class="techno_flipbox col-lg-4 col-md-6 col-sm-12 col-xs-6 shadow"
          >
            <div class="techno_flipbox_font mb-4 rounded">
              <div class="techno_flipbox_inner">
                <div class="techno_flipbox_icon">
                  <div class="icon">
                    <img :src="servicio.imagen" :alt="'Icono de ' + servicio.titulo" />
                  </div>
                </div>
                <div class="flipbox_title">
                  <h3 class="text-white">{{ servicio.titulo }}</h3>
                </div>
              </div>
            </div>
            <div class="techno_flipbox_back bg-green rounded">
              <div class="techno_flipbox_inner">
                <div class="flipbox_title">
                  <h3 class="text-white">{{ servicio.titulo }}</h3>
                </div>
                <div class="flipbox_desc">
                  <p class="text-white max-width mb-4">{{ servicio.descripcion }}</p>
                </div>
                <div class="flipbox_button">
                  <a :href="servicio.enlace" class="btn-public">
                    Más Información <i class="fa fa-angle-double-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
