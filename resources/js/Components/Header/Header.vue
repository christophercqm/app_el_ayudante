<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import logo from "@images/logo/logo-ayudante.svg";
import { Link } from "@inertiajs/vue3";

// Definir las variables reactivas
const isScrolled = ref(false); // Para detectar si el usuario ha hecho scroll
const isTopBarVisible = ref(true); // Para manejar la visibilidad de la top-bar

// Detectar el scroll
const handleScroll = () => {
  // Comprobar si el usuario ha hecho scroll
  isScrolled.value = window.scrollY > 10;

  // Ocultar top-bar cuando se haga scroll
  isTopBarVisible.value = window.scrollY === 0;
};

// Registra el evento cuando el componente se monta
onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

// Elimina el evento cuando el componente se desmonta
onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
  <header class="header">
    <!-- Barra superior -->
    <div class="top-bar" v-if="isTopBarVisible">
      <div class="container">
        <!-- SOCIAL  -->
        <div class="social-icons">
          <span class="text-white unete"><b>Únete</b></span>
          <a href="https://www.facebook.com" target="_blank" class="social-icon">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" class="social-icon">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.linkedin.com" target="_blank" class="social-icon">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>

        <div class="contact-info">
          <a href="mailto:info@elayudante.es" class="email text-white icon">
            <i class="bi bi-envelope-at-fill"></i>
            <span>info@elayudante.es</span>
          </a>
          <a href="" class="text-white icon">
            <i class="bi bi-geo-alt-fill"></i>
            <span>C/ Floranes, nº 23, local - entresuelo. </span>
          </a>
          <a href="" class="text-white icon">
            <i class="bi bi-telephone-fill"></i>
            <span class="phone">942 40 85 70</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Barra de navegación principal -->
    <nav class="navbar" :class="{ 'navbar-fixed': isScrolled }">
      <div class="container">
        <!-- Logo -->
        <div class="row w-100">
          <div class="col-3">
            <div class="logo w-100">
              <Link href="/">
              <img :src="logo" alt="ElAyudante" class="logo-img img-fluid" />
              </Link>
            </div>
          </div>

          <!-- Menú de navegación -->
          <div class="col-9 nav-links">
            <ul class="nav-links">
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Proyectos</a></li>
              <li><a href="#">Kit Digital</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>
