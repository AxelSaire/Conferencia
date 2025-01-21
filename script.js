setTimeout(function() {
    const successMessage = document.getElementById('successMessage');
    const failedMessage = document.getElementById('failedMessage');
    if (successMessage) {
        successMessage.style.display = 'none';
        if (form) {
                form.reset(); // Limpia el formulario
            }
    }
    if(failedMessage){
        failedMessage.style.display='none';
    }
}, 1000);


document.addEventListener('DOMContentLoaded', function () {
    // Obtener los radio buttons y el contenedor de opciones adicionales
    const certificadoSi = document.getElementById('certificado-si');
    const certificadoNo = document.getElementById('certificado-no');
    const extraOptions = document.getElementById('extra-options');

    // Función para mostrar/ocultar las opciones adicionales
    function toggleExtraOptions() {
        if (certificadoSi.checked) {
            extraOptions.style.display = 'block';
        } else if (certificadoNo.checked) {
            extraOptions.style.display = 'none';
        }
    }

    // Escuchar cambios en ambos radio buttons
    certificadoSi.addEventListener('change', toggleExtraOptions);
    certificadoNo.addEventListener('change', toggleExtraOptions);
});