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