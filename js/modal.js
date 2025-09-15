const modal = document.getElementById('modal');
const inicioSesion = document.getElementById('inicioSesion');
const registro = document.getElementById('registro');


const cerrarModal = () => {
    modal.classList.remove('modal-active');
}
const abrirModal = () => {
    modal.classList.add('modal-active');
}

const cambioDeFormulario = (e) => {
    inicioSesion.classList.toggle('sesion-active');
    registro.classList.toggle('sesion-active');
}