<template>
    <div>
        <!-- Button to trigger modal -->
        <button type="button" class="btn-green m-3" @click="openModal">
            Crear Proyecto
        </button>

        <!-- Modal Background with opacity (only visible when modal is shown) -->
        <div v-if="showModal" class="modal-backdrop"></div>

        <!-- Modal Form -->
        <div v-if="showModal" class="modal fade show d-block" tabindex="-1" style="display: block" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir proyecto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <!-- Título del Proyecto -->
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input v-model="form.titulo" type="text" class="form-control" id="titulo" required />
                            </div>

                            <!-- Enlace del Proyecto -->
                            <div class="mb-3">
                                <label for="enlace" class="form-label">Enlace</label>
                                <input v-model="form.enlace" type="text" class="form-control" id="enlace" required />
                                <small class="form-text text-muted">Proporcione el enlace externo del proyecto.</small>
                            </div>

                            <!-- Descripción -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea v-model="form.description" class="form-control" id="description" rows="3" required></textarea>
                            </div>

                            <!-- Imagen -->
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control" id="imagen" @change="handleFileChange" required />
                                <small class="form-text text-muted">Selecciona una imagen (JPG, PNG, GIF).</small>
                            </div>

                            <button type="submit" class="btn-green">
                                Guardar Proyecto
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Listado de Proyectos -->
        <div class="mt-3">
            <h3>Listado de Proyectos</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Enlace</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí usamos v-for para iterar sobre los proyectos pasados como props -->
                        <tr v-for="proyecto in props.proyectos" :key="proyecto.id">
                            <td>{{ proyecto.id }}</td>
                            <td>{{ proyecto.titulo }}</td>
                            <td><a :href="proyecto.enlace" target="_blank">{{ proyecto.enlace }}</a></td>
                            <td>{{ proyecto.description }}</td>
                            <td><img :src="proyecto.link" alt="Imagen del Proyecto" width="50" height="50"></td>
                            <td class="d-flex gap-2">
                                <button class="btn btn-sm bg-success" title="Editar">
                                    <i class="bi bi-pen text-white"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" title="Eliminar">
                                    <i class="bi bi-trash text-white"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { useForm } from "@inertiajs/vue3";

// Recibe las props de Inertia
const props = defineProps({
    proyectos: Array,
});

console.log(props.proyectos);

const showModal = ref(false);
const form = useForm({
    titulo: "",
    enlace: "",
    description: "",
    imagen: null, // Inicializamos la imagen en null
    link: "", // Este es el campo para la ruta de la imagen
});

const proyectos = ref([]); // Lista de proyectos que vendrán del backend

// Función para abrir el modal
function openModal() {
    showModal.value = true;
}

// Función para cerrar el modal
function closeModal() {
    showModal.value = false;
}

// Función para manejar el cambio de imagen
// Función para manejar el cambio de archivo
function handleFileChange(event) {
    const file = event.target.files[0]; // Obtener el archivo seleccionado

    // Verificamos si el archivo es una imagen o un archivo webm
    if (file && (file.type.startsWith("image") || file.type === "video/webm")) {
        form.imagen = file;
    } else {
        alert("Por favor, selecciona una imagen o un archivo webm válido.");
    }
}


// Enviar formulario
function submitForm() {
    const formData = new FormData();
    formData.append("titulo", form.titulo);
    formData.append("enlace", form.enlace); // Enlace del proyecto
    formData.append("description", form.description);
    formData.append("imagen", form.imagen); // Ruta de la imagen
    
    // Enviar el formulario con la imagen
    form.post(route("admin.proyectos.store"), {
        data: formData,
        onSuccess: () => {
            // Limpiar el formulario después de guardar el proyecto
            form.reset(); // Resetea los campos del formulario
            form.imagen = null; // Limpia la imagen seleccionada

            closeModal(); // Cerrar modal al guardar
            getProyectos(); // Actualizar la lista de proyectos
        },
        onError: (errors) => {
            // Manejar los errores de validación si es necesario
            console.log(errors);
        },
    });
}

// Obtener proyectos al cargar la página
function getProyectos() {
    proyectos.value = [
        { id: 1, titulo: "Proyecto 1" },
        { id: 2, titulo: "Proyecto 2" },
    ];
}

onMounted(() => {
    getProyectos(); // Obtener proyectos al montar el componente
});
</script>

<style scoped>
/* Asegura que el fondo oscuro se muestre correctamente */
.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro con opacidad */
    z-index: 1040; /* Asegura que el fondo esté detrás del modal */
}

.modal.fade.show {
    display: block;
    z-index: 1050; /* Asegura que el modal esté por encima del fondo */
}

/* Evita que el fondo se muestre cuando no hay un modal visible */
.modal-backdrop {
    display: none;
}

.modal-backdrop.show {
    display: block;
}

/* Estilo para la tabla responsiva */
.table-responsive {
    margin-bottom: 20px;
}

/* Ocultar la tabla en pantallas pequeñas */
.d-none {
    display: none !important;
}

/* Mostrar la tabla solo en pantallas grandes */
.d-md-block {
    display: block !important;
}

/* Mostrar la lista solo en pantallas pequeñas */
.d-md-none {
    display: block !important;
}

/* Agregar márgenes a los elementos de la lista */
.list-group-item {
    padding: 15px;
    border: 1px solid #ddd;
    margin-bottom: 10px;
}

</style>
