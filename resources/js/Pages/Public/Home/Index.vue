<template>
    <header class="header">
      <!-- Barra superior -->
      <div class="top-bar">
        <div class="container">
          <div class="contact-info">
            <a href="mailto:info@elayudante.es" class="email">info@elayudante.es</a>
            <span class="separator">|</span>
            <span class="phone">942 40 85 70</span>
          </div>
          <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank" class="social-icon">F</a>
            <a href="https://www.instagram.com" target="_blank" class="social-icon">I</a>
            <a href="https://www.linkedin.com" target="_blank" class="social-icon">L</a>
          </div>
        </div>
      </div>
  
      <!-- Barra de navegación principal -->
      <nav class="navbar">
        <div class="container">
          <!-- Logo -->
          <div class="logo">
            <img src="path_to_logo_image.png" alt="ElAyudante" class="logo-img" />
            <span class="brand-name">ElAyudante</span>
          </div>
  
          <!-- Menú de navegación -->
          <ul class="nav-links">
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Proyectos</a></li>
            <li><a href="#">Kit Digital</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    name: "Header"
  };
  </script>
  
  <style scoped lang="scss">
  /* Estilos para el header */
  .header {
    font-family: Arial, sans-serif;
    background-color: #4CAF50;
  }
  
  /* Barra superior */
  .top-bar {
    background-color: #3e8e41;
    padding: 10px 0;
  }
  
  .top-bar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .contact-info a,
  .phone {
    color: white;
    text-decoration: none;
    margin-right: 10px;
  }
  
  .contact-info .separator {
    color: white;
    margin-right: 10px;
  }
  
  .social-icons a {
    color: white;
    text-decoration: none;
    margin-left: 15px;
  }
  
  .social-icons a:hover {
    color: #ddd;
  }
  
  /* Barra de navegación principal */
  .navbar {
    background-color: white;
    padding: 10px 0;
  }
  
  .navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .logo {
    display: flex;
    align-items: center;
  }
  
  .logo-img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
  }
  
  .brand-name {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
  }
  
  .nav-links {
    display: flex;
    list-style-type: none;
    margin: 0;
  }
  
  .nav-links li {
    margin-left: 20px;
  }
  
  .nav-links a {
    text-decoration: none;
    color: #333;
    font-size: 1rem;
  }
  
  .nav-links a:hover {
    color: #4CAF50;
  }
  </style>
  