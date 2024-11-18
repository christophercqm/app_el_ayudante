<script setup>
import logo_footer from "@images/logo/logo-white.webp";
import green_icon from "@images/logo/greenFoundation.webp";

// Obtener el año actual
const currentYear = new Date().getFullYear();
</script>

<template>
  <footer class="footer text-white py-4">
    <div class="container">
      <div class="row">
        <!-- Columna de Redes Sociales -->
        <div class="col-md-3">
          <div class="image-logo">
            <img :src="logo_footer" alt="Green Web Foundation" class="img-fluid" />
          </div>
        </div>

        <!-- Columna de Servicios -->
        <div class="col-md-3">
          <h5 class="title text-white">Servicios</h5>
          <ul class="d-flex flex-column gap-2">
            <li><a href="#" class="text-white">Gestión de Negocio</a></li>
            <li><a href="#" class="text-white">Comunicación & Marketing</a></li>
            <li><a href="#" class="text-white">Tecnología e Informática</a></li>
            <li><a href="#" class="text-white">Diseño Gráfico</a></li>
          </ul>
        </div>

        <!-- Columna de Contacto -->
        <div class="col-md-3">
          <h5 class="title text-white">Contacto</h5>
          <ul class="d-flex flex-column gap-2">
            <li><span>942 408 570</span></li>
            <li><a href="mailto:info@elayudante.es" class="text-white">info@elayudante.es</a></li>
            <li><span>Nuestra Oficina</span></li>
          </ul>
        </div>

        <!-- Columna de Web Ecológica -->
        <div class="col-md-3 d-flex flex-column justify-center">
          <h5 class="title text-white">Sitio Web Ecológico</h5>
          <div class="contain-green-icon">
            <!-- Coloca aquí la imagen del logo ecológico -->
            <img :src="green_icon" alt="Green Web Foundation" class="img-fluid green-icon" />
          </div>
        </div>
      </div>

      <hr>
      <!-- Copyright y enlaces de política -->
      <div class="row mt-4">
        <div class="col-12 text-center d-flex justify-content-between">
          <small class="mb-0">&copy; 2016-{{ currentYear }} ElAyudante. Todos los derechos reservados.</small>
          <small class="mb-0">
            <a href="#" class="text-white">Política de Privacidad</a> | 
            <a href="#" class="text-white">Términos y Condiciones</a>
          </small>
        </div>
      </div>
    </div>
  </footer>
</template>
