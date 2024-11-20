<script setup>
import Slider from "@/Components/Home/Slider.vue";
import FlipBox from "@/Components/Home/FlipBox.vue";
import Asesoria from "@/Components/Home/Asesoria.vue";
import Servicios from "@/Components/Home/Servicios.vue";
import NuestraEsencia from "@/Components/Home/NuestraEsencia.vue";
import Contactanos from "@/Components/Home/Contactanos.vue";
import NuestrosProyectos from "@/Components/Home/NuestrosProyectos.vue";
import Resenias from "@/Components/Home/Resenias.vue";
import Blog from "@/Components/Home/Blog.vue";

// Imágenes del slider
import slide_1 from "@images/Home/slider-1.svg";
import slide_2 from "@images/Home/slider-2.webp";

// Props del controlador
const props = defineProps({
    proyectos: Array,
    blogs: Array,
});

// Array de slides
const slides = [
  {
    image: slide_1,
    title1Big: "¡digitalízate!",
    alt: "Subvenciones de hasta 12.000€",
    title: "Programa KIT DIGITAL",
    description: "de ayuda a PYMES",
    button: "más información",
    buttonLink: "https://www.ejemplo.com/kit-digital"  
  },
  {
    image: slide_2,
    alt: "Haz que tu marca sea relevante",
    title: "Impulsa TU NEGOCIO,",
    description: "ahora es MÁS FÁCIL",
    button: "servicios de gestoría",
    buttonLink: "https://www.ejemplo.com/gestoria"
  },
];

</script>

<template>
    <div class="container-home">
        <!-- Slider -->
        <Slider
            :slides="slides"
            :autoplay="true"
            :loop="true"
            :autoplayDelay="15000"
        />

        <!-- Otros componentes -->
        <div class="flipbox-contain w-100">
            <FlipBox />
        </div>

        <div class="contain-asesoria">
            <Asesoria />
        </div>

        <div class="contain-servicios w-100">
            <Servicios />
        </div>

        <div class="contain-nuestra-esencia">
            <NuestraEsencia />
        </div>

        <div class="contain-proyectos">
            <NuestrosProyectos :proyectos="proyectos" />
        </div>

        <div class="contain-contactanos w-100">
            <Contactanos />
        </div>

        <div class="contain-resenias">
            <Resenias />
        </div>

        <div class="contain-blog">
            <Blog :blogs="blogs" />
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

.flipbox-contain {
    z-index: 1;
}
</style>
