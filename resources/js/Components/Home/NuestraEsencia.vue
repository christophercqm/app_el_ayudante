<script setup>
const pilares = [
  {
    numero: 1,
    titulo: "Atención Individualizada",
    descripcion:
      "Nos gusta hacer sentir cómodos a nuestros clientes, darles la posibilidad de tener un espacio donde volcar sus ideas y poder darles vida a través de una estrategia coherente.",
  },
  {
    numero: 2,
    titulo: "Profesionalidad",
    descripcion:
      "Nos involucramos en cada proyecto como si fuese el nuestro, para que el esfuerzo se vea reflejado en cada detalle, y obtener los mejores resultados.",
  },
  {
    numero: 3,
    titulo: "Crecimiento Continuo",
    descripcion:
      "El objetivo siempre está claro y presente en cada decisión. Identificamos las necesidades y trabajamos con pasión para obtener la satisfacción de nuestros clientes.",
  },
];
</script>

<template>
  <div class="how_it_work py-5">
    <div class="container">
      <!-- Título -->
      <div class="row">
        <div class="col-lg-12">
          <div class="section_title text_center mb-60 mt-3">
            <div class="section_sub_title uppercase mb-3">
              <h6 class="subtitle text-center">NUESTRA ESENCIA</h6>
            </div>
            <div class="section_main_title">
              <h1 class="title mb-5">Nuestros Pilares</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Pilares -->
      <div class="row row-services">
        <div
          v-for="(pilar, index) in pilares"
          :key="index"
          class="col-lg-4 col-md-6 col-sm-12"
        >
          <div class="single_it_work mb-4">
            <div class="single_it_work_content pl-2 pr-2">
              <!-- Número -->
              <div class="single_it_work_content_list pb-5 d-flex justify-content-center">
                <span class="circle">{{ pilar.numero }}</span>
              </div>
              <!-- Título -->
              <div class="single_work_content_title pb-2">
                <h4 class="title">{{ pilar.titulo }}</h4>
              </div>
              <!-- Descripción -->
              <div class="single_it_work_content_text pt-1 text-justify">
                <p class="text-center">{{ pilar.descripcion }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


