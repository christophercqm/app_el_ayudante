<script setup>
import bgContactanos from "@images/Home/bg-contactanos.png";
import isotipoAyudanteBlanco from "@images/logo/logo-white-isotipo.svg";

const contacto = {
  titulo: "Contáctanos",
  telefono: "942 408 570",
  botonTexto: "Déjate Ayudar",
  botonEnlace: "contacto.html",
};
</script>

<template>
  <div
    class="call_do_action py-5 bg_black text-white"
    :style="{ backgroundImage: `url(${bgContactanos})` }"
  >
    <div class="container">
      <div class="row d-flex justify-content-center">
        <!-- Imagen -->
        <div class="col-4  px-5 d-flex iso-ayu align-items-center justify-content-center">
          <img
            :src="isotipoAyudanteBlanco"
            class="img-fluid p-5"
            alt="Logo Ayudante"
          />
        </div>

        <!-- Información de contacto -->
        <div class="col-5 section_title text-left px-5">
          <!-- Título -->
          <div class="phone_number mb-3">
            <h5 class="subtitle text-uppercase">{{ contacto.titulo }}</h5>
          </div>
          <!-- Subtítulo y Teléfono -->
          <div class="section_main_title">
            <h2 class="text-white desc">
              Toda la información<br />que necesites en el,
            </h2>
            <h2 class="text-highlight text-white">{{ contacto.telefono }}</h2>
          </div>
          <!-- Botón -->
          <div class="button three mt-4">
            <a :href="contacto.botonEnlace" class="btn-white d-inline-block">
              {{ contacto.botonTexto }}
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

