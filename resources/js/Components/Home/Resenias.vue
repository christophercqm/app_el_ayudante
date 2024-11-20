<script setup>
import { ref, onMounted } from "vue";

// Imágenes de ejemplo
import dental_saja from "@images/Home/Resenias/dental-saja.webp";
import unilang from "@images/Home/Resenias/unilang.webp";
import hostel_santander from "@images/Home/Resenias/hostel-santander.webp";
import farmacia_avenida from "@images/Home/Resenias/icon-farmacia.webp";
import redefine from "@images/Home/Resenias/redefine.webp";
import beatriz_escranoglle from "@images/Home/Resenias/beatriz-escranoglle.webp";
import trofeos_sport from "@images/Home/Resenias/trofeos-sport.webp";
import abaloa from "@images/Home/Resenias/abaloa.webp";
import sainz from "@images/Home/Resenias/saiz-fisioterapia.webp";
import lopez_alonso from "@images/Home/Resenias/alonso-inmobiliaria.webp";
import bayres from "@images/Home/Resenias/bayres.webp";

// Datos de las imágenes flotantes
const floatingImages = ref([
    { src: dental_saja, alt: "Logo 1" },
    { src: unilang, alt: "Logo 2" },
    { src: hostel_santander, alt: "Logo 3" },
    { src: farmacia_avenida, alt: "Logo 4" },
    { src: redefine, alt: "Logo 5" },
    { src: beatriz_escranoglle, alt: "Logo 6" },
    { src: trofeos_sport, alt: "Logo 7" },
    { src: abaloa, alt: "Logo 8" },
    { src: sainz, alt: "Logo 9" },
    { src: lopez_alonso, alt: "Logo 10" },
    { src: bayres, alt: "Logo 11" },
]);

// Testimonios
const testimonials = ref([
    {
        text: "La respuesta y el compromiso de El Ayudante, siempre ha sido perfecta y adecuada, siempre son los primeros a quienes consulto y confío. Lo que más me gusta de ellos es sus ganas de hacer las cosas bien.",
        name: "Sonia Fernandez Liebana",
        job: "Dental Saja",
        img: dental_saja,
    },
    {
        text: "Lo que más valoro de El Ayudante es la cercanía y el trato de todo el equipo. Siempre están dispuestos a ayudarte, sea cual sea el servicio que necesita tu empresa. Son unos magníficos profesionales con un equipo muy cualificado.",
        name: "Carlos González Valle",
        job: "Idiomas Unilang",
        img: unilang,
    },
    {
        text: "Lo que más valoro de El Ayudante es la cercanía y el trato de todo el equipo. Siempre están dispuestos a ayudarte, sea cual sea el servicio que necesita tu empresa. Son unos magníficos profesionales con un equipo muy cualificado.",
        name: "Valentín Cavia Garrido",
        job: "Hostel Santander",
        img: hostel_santander,
    },
    {
        text: "La verdad que el servicio fue excelente, en especial su dueño. Lo que más me gusta de ellos es el trato cálido de su gente. Muy recomendable, para los que recién empiezan, te brindan las herramientas necesarias para tener éxito en tu negocio. ¡GRACIAS CHICOS!",
        name: "Laura Sanchéz de Movellan",
        job: "Farmacia la Avenida",
        img: farmacia_avenida,
    },
    {
        text: "La respuesta y el compromiso de El Ayudante, siempre ha sido perfecta y adecuada, siempre son los primeros a quienes consulto y confío. Lo que más me gusta de ellos es sus ganas de hacer las cosas bien.",
        name: "Rosalía Demetrio",
        job: "Redefine Santander",
        img: redefine,
    },
    {
        text: "Lo que más me ha gustado es la cercanía del equipo, el apoyo que me han facilitado y la rapidez de finalizar el trabajo. Me encantó la dulzura de cómo han plasmado en la página web mi personalidad, gracias.",
        name: "Beatriz D´Escragnolle Ferreira",
        job: "Beatriz d'Escragnolle",
        img: beatriz_escranoglle,
    },
    {
        text: "Lo que más valoro de El Ayudante es la cercanía y el trato de todo el equipo. Siempre están dispuestos a ayudarte, sea cual sea el servicio que necesita tu empresa. Son unos magníficos profesionales con un equipo muy cualificado.",
        name: "Rodrigo Peña Sánchez",
        job: "Trofeos Sport",
        img: trofeos_sport,
    },
    {
        text: "La verdad que el servicio fue excelente, en especial su dueño. Lo que más me gusta de ellos es el trato cálido de su gente. Muy recomendable, para los que recién empiezan, te brindan las herramientas necesarias para tener éxito en tu negocio. ¡GRACIAS CHICOS!",
        name: "Carlos Abascal",
        job: "Construcciones Abaloa",
        img: abaloa,
    },
    {
        text: "La respuesta y el compromiso de El Ayudante, siempre ha sido perfecta y adecuada, siempre son los primeros a quienes consulto y confío. Lo que más me gusta de ellos es sus ganas de hacer las cosas bien.",
        name: "Diego Saiz Sánchez",
        job: "Saiz Fisioterapia",
        img: sainz,
    },
    {
        text: "Lo que más me ha gustado es la cercanía del equipo, el apoyo que me han facilitado y la rapidez de finalizar el trabajo. Me encantó la dulzura de cómo han plasmado en la página web mi personalidad, gracias.",
        name: "Juan López-Alonso Santibañez",
        job: "López-Alonso Inmobiliaria",
        img: lopez_alonso,
    },
    {
        text: "Lo que más valoro de El Ayudante es la cercanía y el trato de todo el equipo. Siempre están dispuestos a ayudarte, sea cual sea el servicio que necesita tu empresa. Son unos magníficos profesionales con un equipo muy cualificado.",
        name: "Adrian Eduardo Mutto",
        job: "Bayres Home",
        img: bayres,
    },
]);

// Manejo de la animación
const currentTestimonialIndex = ref(0);

onMounted(() => {
    // Cambiar el testimonial cada 5 segundos (ajustar el tiempo si es necesario)
    setInterval(() => {
        currentTestimonialIndex.value =
            (currentTestimonialIndex.value + 1) % testimonials.value.length;
    }, 5000);
});

const getImageOrDefault = (src) => {
    return src ? src : null;
};
</script>

<template>
    <div id="testimonial-section">
        <div class="container text-center">
            <!-- Título -->
            <div class="section_title">
                <h6 class="section_sub_title uppercase mb-3">RESEÑAS</h6>
                <h1 class="section_main_title mb-4">
                    ¿Qué dicen <span class="green">Nuestros Clientes?</span>
                </h1>
            </div>

            <!-- Imágenes flotantes -->
            <div class="row">
                <!-- Columna izquierda con iconos 1-6 -->
                <div class="col-3">
                    <div class="floating-images">
                        <div
                            v-for="(img, index) in floatingImages.slice(0, 6)"
                            :key="index"
                            class="floating-image"
                            :style="{
                                marginBottom: `${(index + 1) * 30}px`,
                                marginLeft: `${Math.random() * 10}%`,
                                marginRight: `${Math.random() * 10}%`,
                                animationDelay: `${Math.random() * 3}s`, // Delay aleatorio
                                animationDuration: `${Math.random() * 3 + 5}s`, // Duración aleatoria entre 5s y 8s
                                animationName:
                                    index % 2 === 0
                                        ? 'rotateSlightlyClockwise'
                                        : 'rotateSlightlyCounterClockwise', // Sentido alterno
                            }"
                        >
                            <img
                                v-if="img.src"
                                :src="getImageOrDefault(img.src)"
                                :alt="img.alt"
                            />
                            <div v-else class="empty-circle"></div>
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIALS -->
                <div class="col-6" style="position: relative; height: 250px">
                    <div
                        v-for="(testimonial, index) in testimonials"
                        :key="index"
                        class="quote"
                        :class="{
                            'quote-enter': index === currentTestimonialIndex,
                            'quote-leave': index !== currentTestimonialIndex,
                        }"
                        :style="{
                            opacity: index === currentTestimonialIndex ? 1 : 0,
                            position: 'absolute',
                            visibility:
                                index === currentTestimonialIndex
                                    ? 'visible'
                                    : 'hidden',
                            transform:
                                index === currentTestimonialIndex
                                    ? 'translateY(0)'
                                    : index < currentTestimonialIndex
                                    ? 'translateY(-20px)'
                                    : 'translateY(20px)',
                        }"
                    >
                        <p class="testimonial">{{ testimonial.text }}</p>
                        <div class="container-info d-flex justify-content-center align-items-center gap-3">
                            <div class="pp container-testimonial-data bg-white shadow rounded-circle">
                                <img :src="testimonial.img" alt="Logo" />
                            </div>
                           
                            <div class="name-testimonial d-flex gap align-items-start flex-column ">
                                <div class="name">{{ testimonial.name }}</div>
                                <div class="job ">{{ testimonial.job }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna derecha con iconos 7-11 -->
                <div class="col-3">
                    <div class="floating-images">
                        <div
                            v-for="(img, index) in floatingImages.slice(6, 11)"
                            :key="index + 6"
                            class="floating-image"
                            :style="{
                                marginBottom: `${(index + 1) * 30}px`,
                                marginLeft: `${Math.random() * 10}%`,
                                marginRight: `${Math.random() * 10}%`,
                                animationDelay: `${Math.random() * 3}s`, // Delay aleatorio
                                animationDuration: `${Math.random() * 3 + 5}s`, // Duración aleatoria entre 5s y 8s
                                animationName:
                                    index % 2 === 0
                                        ? 'rotateSlightlyClockwise'
                                        : 'rotateSlightlyCounterClockwise', // Sentido alterno
                            }"
                        >
                            <img
                                v-if="img.src"
                                :src="getImageOrDefault(img.src)"
                                :alt="img.alt"
                            />
                            <div v-else class="empty-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
