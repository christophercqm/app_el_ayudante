<script setup>
import { computed } from "vue";

// Definimos las propiedades que acepta el componente
const props = defineProps({
    blogs: {
        type: Array,
        required: true,
    },
});

// Normalizamos los datos en caso de que haya claves diferentes o necesitemos manipulación adicional
const normalizedBlogs = computed(() =>
    props.blogs.map((blog) => ({
        title: blog.titulo,
        description: blog.descripcion,
        image: blog.imagen,
        url: blog.enlace_blog,
        author: "El Ayudante", // Puedes agregar datos estáticos si son comunes
        date: new Date(blog.created_at).toLocaleDateString("es-ES", {
            year: "numeric",
            month: "long",
            day: "numeric",
        }),
    }))
);
</script>

<template>
    <div class="blog_area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section_title text-center mt-3">
                        <h2 class="subtitle text-uppercase subtitle">
                            Últimas Noticias
                        </h2>
                        <h2 class="title mb-5 title">Descubre Nuestras</h2>
                    </div>
                </div>
            </div>

            <!-- Listado de Blogs -->
            <div class="row">
                <div
                    v-for="(blog, index) in normalizedBlogs"
                    :key="index"
                    class="col-lg-4 col-md-6 col-sm-12"
                >
                    <div class="single_blog mb-4 shadow">
                        <div class="single_blog_thumb pb-4">
                            <a :href="blog.url">
                                <img
                                    :src="blog.image"
                                    :alt="blog.title"
                                    class="img-fluid"
                                />
                            </a>
                        </div>
                        <div class="single_blog_content px-4">
                            <div class="techno_blog_meta">
                                <span class="author">
                                    {{ blog.author }} |
                                </span>
                                <span class="meta-date pl-3">{{
                                    blog.date
                                }}</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3 class="title-blog">
                                    <a :href="blog.url">{{ blog.title }}</a>
                                </h3>
                            </div>
                            <div class="blog_description">
                                <p>{{ blog.description }}</p>
                            </div>
                            <div class="blog_page_button pb-4">
                                <a :href="blog.url" style="color: inherit">
                                    Más Información
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón para visitar el blog -->
            <div class="row">
                <div class="section_button w-auto mx-auto">
                    <a href="/blog" class="d-block btn-green"
                        >Visita el Blog</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>
