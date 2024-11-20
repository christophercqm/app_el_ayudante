<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

// Props
const props = defineProps({
    slides: {
        type: Array,
        required: true,
    },
    autoplay: {
        type: Boolean,
        default: false,
    },
    autoplayDelay: {
        type: Number,
        default: 3000,
    },
    loop: {
        type: Boolean,
        default: true,
    },
});
</script>

<template>
    <div class="slider-component">
        <Swiper
            :space-between="50"
            :slides-per-view="1"
            :loop="loop"
            :modules="[Autoplay]"
            :autoplay="
                autoplay
                    ? { delay: autoplayDelay, disableOnInteraction: false }
                    : false
            "
            class="my-swiper h-100"
        >
            <SwiperSlide v-for="(slide, index) in slides" :key="index">
                <div class="slide-content">
                    <!-- Imagen del slide -->
                    <img
                        :src="slide.image"
                        :alt="slide.alt"
                        class="slider-image"
                    />

                    <!-- Caja de texto con título y descripción -->
                    <div
                        :class="[
                            'slide-text',
                            index === 0 ? 'slide-1' : '',
                            index === 1 ? 'slide-2' : '',
                        ]"
                        class="w-100 d-flex flex-column align-items-start"
                    >
                    
                            <!-- Mostrar solo el title1Big en el primer slide -->
                            <h2 v-if="index === 0" class="title-big m-0">
                                {{ slide.title1Big }}
                            </h2>


                        <p class="text-alt mb-4">{{ slide.alt }}</p>
                        <div class="conten-title">
                            <h2 class="slide-title m-0">{{ slide.title }}</h2>
                            <h2 class="slide-description m-0 text-start">
                                {{ slide.description }}
                            </h2>
                        </div>


                       <!-- BTN -->
                        <a :href="slide.buttonLink" class="btn text-uppercase text-white mt-5">{{ slide.button }}</a>
                    </div>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</template>

<style scoped>
.slider-component {
    width: 100%;
    height: 100vh;
    padding-top: 132px; /* Ajusta la distancia para tu header fijo */
}

.slider-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slide-content {
    text-align: center;
    position: relative;
    height: 100%;
}

/* Caja de texto */
.slide-text {
    position: absolute;
    top: 50%; /* Centra el contenido verticalmente */
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    max-width: 80%;
}

/* Clases dinámicas para cambiar color o estilo */

.slide-title,
.slide-description {
    font-size: 3.8rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    color: #0a5624 !important; /* Valor por defecto */
}

.text-alt {
    color: #0a5624 !important;
    font-size: 1.25rem;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
}

.slide-2 .conten-title .slide-title,
.slide-2 .conten-title .slide-description,
.slide-2 .text-alt {
    color: white !important;
}

.slide-1 a{
    background: #488F2B;
    padding: 16px 32px;
    font-size: 18px;
    font-weight: 500;
    display: inline-block;
    transition: .5s;
    position: relative;
    overflow: hidden;
    z-index: 44;
    border-radius: 5px;
    color: #fff;
}

.slide-2 a{
    background: #0A5624;
    padding: 16px 32px;
    font-size: 18px;
    font-weight: 500;
    display: inline-block;
    transition: .5s;
    position: relative;
    overflow: hidden;
    z-index: 44;
    border-radius: 5px;
    color: #fff;
}

.title-big {
    color: #456617;
    font-size: 6.5rem;
    text-transform: uppercase;
    font-weight: 900;
    margin-bottom: 2rem !important;
}
</style>
