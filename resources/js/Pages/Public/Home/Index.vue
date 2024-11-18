<script setup>
import Slider from '@/Components/Home/Slider.vue';
import Slider_1 from '@images/Home/slider-1.svg';
import Slider_2 from '@images/Home/slider-2.webp';

import FlipBox from '@/Components/Home/FlipBox.vue';

// Datos para las diapositivas
const slides = [
    { id: 1, image: Slider_1, alt: 'Slide 1', title: '' },
    { id: 2, image: Slider_2, alt: 'Slide 2', title: '' },
];
</script>

<template>
  <div class="container-home">
    <!-- Cambia el tiempo de avance con autoplayDelay -->
    <Slider :slides="slides" :autoplay="true" :loop="true" :autoplayDelay="5000" />

    <div class="flipbox-contain w-100">
      <FlipBox />
    </div>
  </div>
</template>

<style scoped>
.container-home {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.swiper-container {
    width: 100%;
    height: 100%; 
}

.slider-image {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
}

.flipbox-contain {
  z-index: 1;
}

</style>
