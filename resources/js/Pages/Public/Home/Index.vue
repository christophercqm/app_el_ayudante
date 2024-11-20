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


// Recibe las props del controlador (Inertia)
const props = defineProps({
  proyectos: Array,
  blogs: Array,
});

console.log(props.blogs);

</script>

<template>
    <div class="container-home w-100">
        <!-- Cambia el tiempo de avance con autoplayDelay -->
        <Slider
            :slides="slides"
            :autoplay="true"
            :loop="true"
            :autoplayDelay="5000"
        />

        <div class="flipbox-contain w-100">
            <FlipBox />
        </div>

        <!-- ASESORIA -->
        <div class="contain-asesoria">
            <Asesoria />
        </div>

        <!-- SERVICIOS -->
        <div class="contain-servicios w-100">
            <Servicios />
        </div>

        <!-- NUESTRA ESENCIA -->
        <div class="contain-nuestra-esencia">
            <NuestraEsencia />
        </div>

        <div class="contain-proyectos">
            <NuestrosProyectos :proyectos="proyectos" />
        </div>

        <!-- CONTÁCTANOS -->
        <div class="contain-contactanos w-100">
            <Contactanos />
        </div>

        <div class="contain-resenias">
            <Resenias />
        </div>

        <div class="contain-blog"> <!-- 3 ÚLTIMA PUBLICACIONES -->
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
