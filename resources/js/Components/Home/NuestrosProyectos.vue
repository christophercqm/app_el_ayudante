<script setup>
import { ref, onMounted, onBeforeUnmount  } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, Pagination } from 'swiper/modules'; 

import "swiper/css";
import "swiper/css/pagination"; 

import hostelSantander from "@images/Proyectos/hostelSantander.webm";
import lopez_alonso from "@images/Proyectos/lopez-alonso.webp";
import avenida_farmacia from "@images/Proyectos/avenida-farmacia.webp";
import trofeos_sport from "@images/Proyectos/trofeosSport.webm";
import logopedas from "@images/Proyectos/logopedasCantabria.webm";
import sainz from "@images/Proyectos/saizFisioterapia.webm";
import la_puchera from "@images/Proyectos/laPuchera.webp";

const caseStudies = [
    {
        title: "Hostel Santander",
        media: hostelSantander,
        type: "video",
        description: "Web",
        link: "#",
    },
    {
        title: "LópezAlonso Inmobiliaria",
        media: lopez_alonso,
        type: "image",
        description: "Branding, Web",
        link: "https://lopezalonsoinmobiliaria.com/",
    },
    {
        title: "Farmacia La Avenida",
        media: avenida_farmacia,
        type: "image",
        description: "Branding, Web",
        link: "#",
    },
    {
        title: "Trofeos Sport",
        media: trofeos_sport,
        type: "video",
        description: "Branding, Web, RRSS",
        link: "https://trofeossport.es/",
    },
    {
        title: "Logopedas Cantabria",
        media: logopedas,
        type: "video",
        description: "Branding, Web, Animación",
        link: "https://www.logopedascantabria.org/",
    },
    {
        title: "SAIZ Fisioterapia",
        media: sainz,
        type: "video",
        description: "Branding, Web, RRSS",
        link: "https://saizfisioterapia.com/",
    },
    {
        title: "La Puchera",
        media: la_puchera,
        type: "image",
        description: "Web, Rotulación, Packaging, Papelería",
        link: "https://lapucheratradicional.es/",
    },
];

const slidesPerView = ref(1); // Definir el valor inicial de slidesPerView

// Calcular cuántas imágenes caben en la pantalla
const updateSlidesPerView = () => {
    const width = window.innerWidth;
    if (width > 1200) {
        slidesPerView.value = 4; // 4 imágenes para pantallas grandes
    } else if (width > 768) {
        slidesPerView.value = 3; // 3 imágenes para tablets
    } else {
        slidesPerView.value = 1; // 1 imagen para móviles
    }
};

// Llamar a la función para ajustar los slides al cargar la página
onMounted(() => {
    updateSlidesPerView();
    window.addEventListener('resize', updateSlidesPerView);
});

// Eliminar el listener de evento al destruir el componente
onBeforeUnmount(() => {
    window.removeEventListener('resize', updateSlidesPerView);
});
</script>

<template>
    <div class="container-proyectos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="subtitle text-uppercase text-center">
                        portfolio
                    </h2>
                    <h2 class="title mb-5">
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
                <SwiperSlide v-for="(study, index) in caseStudies" :key="index">
                    <a :href="study.link || '#'" class="single_case_study" target="_blank">
                        <div class="single_case_study_inner">
                            <div class="single_case_study_thumb">
                                <template v-if="study.type === 'video'">
                                    <video width="100%" autoplay loop muted>
                                        <source :src="study.media" type="video/webm" />
                                    </video>
                                </template>
                                <template v-else-if="study.type === 'image'">
                                    <img :src="study.media" :alt="study.title" />
                                </template>
                            </div>
                        </div>
                        <div class="single_case_study_content">
                            <div class="single_case_study_content_inner">
                                <h2>{{ study.title }}</h2>
                                <span>{{ study.description }}</span>
                            </div>
                        </div>
                    </a>
                </SwiperSlide>
            </Swiper>
        </div>
    </div>
</template>
