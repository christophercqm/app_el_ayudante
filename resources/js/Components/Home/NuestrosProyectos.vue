<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";

// Recibe las props del componente padre
const props = defineProps({
    proyectos: Array,
});


// Responsividad del slider
const slidesPerView = ref(1);

const updateSlidesPerView = () => {
    const width = window.innerWidth;
    if (width > 1200) {
        slidesPerView.value = 4; // Pantallas grandes
    } else if (width > 768) {
        slidesPerView.value = 3; // Tablets
    } else {
        slidesPerView.value = 1; // Móviles
    }
};

onMounted(() => {
    updateSlidesPerView();
    window.addEventListener("resize", updateSlidesPerView);
});

onBeforeUnmount(() => {
    window.removeEventListener("resize", updateSlidesPerView);
});

// Función para determinar si el archivo es un video o una imagen
const isVideo = (file) => {
    if (!file || typeof file !== "string") return false; // Verifica si el archivo es válido
    const videoExtensions = ["webm", "mp4"]; // Extensiones de video permitidas
    const extension = file.split(".").pop().toLowerCase(); // Extraer la extensión
    return videoExtensions.includes(extension);
};
</script>

<template>
    <div class="container-proyectos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="subtitle text-uppercase text-center">
                        portfolio
                    </h2>
                    <h2 class="title mb-0">
                        Descubre nuestros<br />
                        últimos proyectos
                    </h2>
                </div>
            </div>
            <Swiper
                class="case_study_list py-5"
                :slidesPerView="slidesPerView"
                :spaceBetween="20"
                :loop="true"
                :modules="[Autoplay, Pagination]"
                :autoplay="{ delay: 3000, disableOnInteraction: false }"
                navigation
                pagination
                effect="slide"
            >
                <!-- Renderizamos los proyectos dinámicamente -->
                <SwiperSlide
                    v-for="(proyecto, index) in proyectos"
                    :key="index"
                >
                    <a
                        :href="proyecto.enlace || '#'"
                        class="single_case_study"
                        target="_blank"
                    >
                        <div class="single_case_study_inner">
                            <div class="single_case_study_thumb">
                                <!-- Si es video -->
                                <template
                                    v-if="
                                        proyecto.link &&
                                        isVideo(proyecto.link)
                                    "
                                >
                                    <video width="100%" autoplay loop muted>
                                        <source
                                            :src="`/${proyecto.link}`"
                                            type="video/webm"
                                        />
                                    </video>
                                </template>
                                <template v-else-if="proyecto.link">
                                    <img
                                        :src="`/${proyecto.link}`"
                                        :alt="proyecto.titulo"
                                    />
                                </template>
                            </div>
                        </div>
                        <div class="single_case_study_content">
                            <div class="single_case_study_content_inner">
                                <h2>{{ proyecto.titulo }}</h2>
                                <span>{{ proyecto.description }}</span>
                            </div>
                        </div>
                    </a>
                </SwiperSlide>
            </Swiper>
        </div>
    </div>
</template>

<style scoped>
.container-proyectos {
    padding: 50px 0;
}

.single_case_study {
    text-decoration: none;
    color: inherit;
}

.single_case_study_thumb img,
.single_case_study_thumb video {
    width: 100%;
    height: auto;
    object-fit: cover;
}
</style>
