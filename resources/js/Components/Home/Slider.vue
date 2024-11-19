<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules"; 
import "swiper/css"; // Estilos básicos
import "swiper/css/pagination"; // Estilos de paginación

// Configuración de Swiper
const props = defineProps({
    slides: {
        type: Array,
        required: true,
    },
    autoplay: {
        type: Boolean,
        default: true, 
    },
    autoplayDelay: {
        type: Number,
        default: 3000,
    },
    loop: {
        type: Boolean,
        default: true, // Habilita el bucle
    },
});
</script>

<template>
    <div class="slider-component">
        <Swiper
            :space-between="50"
            :slides-per-view="1"
            :loop="loop"
            :modules="[Autoplay, Pagination]"
            :autoplay="autoplay ? { delay: autoplayDelay, disableOnInteraction: false } : false"
            pagination
            class="my-swiper"
        >
            <!-- Renderiza las diapositivas -->
            <SwiperSlide v-for="slide in slides" :key="slide.id">
                <div class="slide-content">
                    <img
                        :src="slide.image"
                        :alt="slide.alt"
                        class="slider-image"
                    />
                    <h2 class="slide-title">{{ slide.title }}</h2>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</template>

<style scoped>
.slider-component {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.slider-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}



</style>
