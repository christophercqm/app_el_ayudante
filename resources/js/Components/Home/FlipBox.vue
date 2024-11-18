<script setup>
import pig from '@images/pig.svg';
const flipboxes = [
  {
    icon: pig,
    title: 'Rentabilidad - Ahorro',
    description: 'La clave de nuestra gestión empresarial en El Ayudante se basa en la optimización de la gestión y la rentabilidad.',
  },
  {
    icon: pig,
    title: 'Soluciones Tecnológicas',
    description: 'Maximiza la eficiencia de los procesos de tu empresa con herramientas adaptadas a tus necesidades.',
  },
  {
    icon: pig,
    title: 'Visibilidad - Credibilidad',
    description: 'Da a conocer tu marca, porque recuerda que si no comunicas, no existes y, por lo tanto, no vendes.',
  },
  {
    icon: pig,
    title: 'Visión Creativa',
    description: 'Aquellas entidades que integran la creatividad en su ADN incrementan su competitividad y visibilidad.',
  }
];
</script>

<template>
  <div class="flipbox_area top_feature">
    <div class="container">
      <div class="row nagative_margin">
        <!-- Iterar sobre el array flipboxes -->
        <div 
          v-for="(flipbox, index) in flipboxes" 
          :key="index" 
          class="col-lg-3 col-md-6 col-sm-12 col-xs-6"
        >
          <div class="techno_flipbox mb-30">
            <div class="techno_flipbox_font">
              <div class="techno_flipbox_inner">
                <div class="techno_flipbox_icon">
                  <div class="icon">
                    <img :src="flipbox.icon" :alt="flipbox.title" />
                  </div>
                </div>
                <div class="flipbox_title">
                  <h3>{{ flipbox.title }}</h3>
                </div>
              </div>
            </div>
            <div class="techno_flipbox_back">
              <div class="techno_flipbox_inner">
                <div class="flipbox_title">
                  <h3 class="text-white">{{ flipbox.title }}</h3>
                </div>
                <div class="flipbox_desc">
                  <p class="text-white">{{ flipbox.description }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


